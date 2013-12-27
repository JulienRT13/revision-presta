<?php

if (!defined('_PS_VERSION_'))
    exit;
 
class ModuleTexte extends Module
{
    public function __construct()
    {
        $this->name = 'moduletexte';
        $this->tab = 'moduletexte_tab';
        $this->version = '1.0';
        $this->author = 'Julien PASINI';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l("Module Texte");
        $this->description = $this->l("Module Texte pour afficher sur le front office");
    }

    public function uninstall(){
        if (!parent::uninstall() || !Configuration::deleteByName('texte_perso'))
            return false;
        return true;
    }

    public function install()
    {
        if (parent::install() == false OR !$this->registerHook('leftColumn'))
            return false;
        if( !Configuration::updateValue('texte_perso', ''))
            return false;
        return true;
    }

    public function hookLeftColumn($params)
    {
        global $smarty;
        $this->context->controller->addCSS(($this->_path).'moduletexte.css', 'all');
        $smarty->assign('texte', array(stripslashes(Configuration::get('texte_perso'))));
        return $this->display(__FILE__,'moduletexte.tpl');
    }

    public function hookRightColumn($params)
    {
        global $smarty;
        $this->context->controller->addCSS(($this->_path).'moduletexte.css', 'all');
        $smarty->assign('texte', array(stripslashes(Configuration::get('texte_perso'))));
        return $this->display(__FILE__,'moduletexte.tpl');
    }

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit'.$this->name))
        {
            $my_module_name = strval(Tools::getValue('texte_perso'));
            if (!$my_module_name  || empty($my_module_name) || !Validate::isGenericName($my_module_name))
                $output .= $this->displayError( $this->l('Invalid Configuration value') );
            else
            {
                Configuration::updateValue('texte_perso', $my_module_name);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        return $output.$this->displayForm();
    }
    
    public function displayForm()
    {
        // Get default Language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => 'Texte',
                    'name' => 'texte_perso',
                    'size' => 50,
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'button'
            )
        );

        $helper = new HelperForm();

        // Module, t    oken and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
            array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules'),
            ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        // Load current value
        $helper->fields_value['texte_perso'] = Configuration::get('texte_perso');

        return $helper->generateForm($fields_form);
    }
}