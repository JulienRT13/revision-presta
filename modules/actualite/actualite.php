<?php

if (!defined('_PS_VERSION_'))
	exit;
 
class Actualite extends Module
{

	public function __construct()
    {
		$this->name = 'actualite';
		$this->tab = 'actualite_tab';
		$this->version = '1.0';
		$this->author = 'Julien PASINI';
		$this->need_instance = 0;
	 
		parent::__construct();
	 
		$this->displayName = $this->l("Actualite");
		$this->description = $this->l("Module pour publier des actualites");
    }
	
	public function uninstall()
	{
		if (!parent::uninstall())
			Db::getInstance()->Execute("DROP TABLE "._DB_PREFIX_."actualite;");
		parent::uninstall();
	}
 
	public function install()
    {
		if (parent::install() == false OR !$this->registerHook('rightColumn'))
		  return false;
		Db::getInstance()->Execute("CREATE TABLE "._DB_PREFIX_."actualite(id_actualite int(11) NOT NULL AUTO_INCREMENT, titre varchar(100) NOT NULL, description varchar(100), lien varchar(200), photo varchar(150), dateCreation date NOT NULL, dateModification date, actif int(11) NOT NULL, PRIMARY KEY(id_actualite));");
		return true;
    }
	
	public function hookLeftColumn($params)
	{
		global $smarty;
                $this->context->controller->addCSS(($this->_path).'/owl-carousel/owl.carousel.css', 'all');
                $this->context->controller->addCSS(($this->_path).'owl-carousel/owl.theme.css', 'all');
                $this->context->controller->addJS(($this->_path).'owl-carousel/owl.carousel.js', 'all');
		$actualite = Db::getInstance()->ExecuteS("select * from "._DB_PREFIX_."actualite  where actif='1'");	
		
		$records = array();
		foreach($actualite as $row)
		{
			$rec = new stdClass();
			$rec->titre = $row['titre'];
			$rec->description = $row['description'];
			$rec->lien = $row['lien'];
			$rec->photo = $row['photo'];
			
			if(empty($row['titre']) && empty($row['description']))
			{
				$rec->hauteur = '150px';
				$rec->largeur = '121px';
			}
			else
			{
				$rec->hauteur = '107px';
				$rec->largeur = '121px';
			}
			
			array_push($records,$rec);
		}
		$this->context->smarty->assign('records', $records);
		return $this->display(__FILE__, 'actualite.tpl');
	}

	public function hookRightColumn($params)
	{
		global $smarty;
                $this->context->controller->addCSS(($this->_path).'/owl-carousel/owl.carousel.css', 'all');
                $this->context->controller->addCSS(($this->_path).'owl-carousel/owl.theme.css', 'all');
                $this->context->controller->addJS(($this->_path).'owl-carousel/owl.carousel.js', 'all');
		$actualite = Db::getInstance()->ExecuteS("select * from "._DB_PREFIX_."actualite where actif='1'");	
		
		$records = array();
		foreach($actualite as $row)
		{
			$rec = new stdClass();
			$rec->titre = $row['titre'];
			$rec->description = $row['description'];
			$rec->lien = $row['lien'];
			$rec->photo = $row['photo'];
			
			if(empty($row['titre']) && empty($row['description']))
			{
				$rec->hauteur = '150px';
				$rec->largeur = '121px';
			}
			else
			{
				$rec->hauteur = '107px';
				$rec->largeur = '121px';
			}
			
			array_push($records,$rec);
		}
		$this->context->smarty->assign('records', $records);

		$smarty->assign('my_module_link', $this->context->link->getModuleLink('actualite', 'liste_actualite'));
		return $this->display(__FILE__, 'actualite.tpl');
	}
	
	public function getContent()
	{
		$output = null;
 
		if (Tools::isSubmit('submit'.$this->name))
		{
			$my_module_name = strval(Tools::getValue('actualite'));
			if (!$my_module_name  || empty($my_module_name) || !Validate::isGenericName($my_module_name))
				$output .= $this->displayError( $this->l('Invalid Configuration value') );
			else
			{
				Configuration::updateValue('actualite', $my_module_name); 
				$output .= $this->displayConfirmation($this->l('Settings updated'));
			}
		}
		//return $output.$this->displayForm();
	}
}