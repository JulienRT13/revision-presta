<?php

if (!defined('_PS_VERSION_'))
	exit;
 
class Test extends Module
{

    public function __construct()
    {
        $this->name = 'test';
        $this->tab = 'test_tab';
        $this->version = '1.0';
        $this->author = 'Julien PASINI';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l("Test");
        $this->description = $this->l("Module test");
    }
 
    public function install()
    {
        if (parent::install() == false OR !$this->registerHook('actionAuthentication'))
          return false;
        return true;
    }
	
    public function hookActionAuthentication($params)
    {
        print_r($params['cart']->getProducts(true));
        die;
    }
}