<?php
    require_once dirname(__FILE__).'/../../../vendor/smarty/smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../styles/styles.php';
    function Profile($articles){
        $smarty = new Smarty();
        $smarty->template_dir = dirname(__FILE__).'/../templates/';
        $smarty->compile_dir  = dirname(__FILE__).'/../templates_c/';

        $smarty->assign('contentsFile', dirname(__FILE__).'/../contents/profile.tpl');
        $smarty->assign('articles', $articles);
        $smarty->assign('css_style', ReadAllStyles());
        $smarty->display('common.tpl');
    }