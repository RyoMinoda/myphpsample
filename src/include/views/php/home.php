<?php
    require_once dirname(__FILE__).'/../../../vendor/smarty/smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../styles/styles.php';
    require dirname(__FILE__).'/../images/images.php';
    
    function Home($vars){
        $smarty = new Smarty();
        $smarty->template_dir = dirname(__FILE__).'/../templates/';
        $smarty->compile_dir  = dirname(__FILE__).'/../templates_c/';
        
        $style = ReadAllStyles();
        $smarty->assign('contentsFile', dirname(__FILE__).'/../contents/home.tpl');
        $smarty->assign('style', $style);
        $smarty->assign('innerContents', 'Home');
        $smarty->display('common.tpl');
    }