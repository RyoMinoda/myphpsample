<?php
    require_once dirname(__FILE__).'/../../../vendor/smarty/smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../styles/styles.php';
    require dirname(__FILE__).'/../images/images.php';
    
    function Contact($vars){
        $smarty = new Smarty();
        $smarty->template_dir = dirname(__FILE__).'/../templates/';
        $smarty->compile_dir  = dirname(__FILE__).'/../templates_c/';
        
        $smarty->assign('contentsFile', dirname(__FILE__).'/../contents/contact.tpl');
        $smarty->assign('css_style', ReadAllStyles());
        $smarty->display('common.tpl');
    }