<?php
    require_once dirname(__FILE__).'/../../../vendor/smarty/smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../styles/styles.php';
    function UsersHome($tab){
        $_styles = GetBackgroundStyles($tab);
        $smarty = new Smarty();
        $smarty->template_dir = dirname(__FILE__).'/../templates/';
        $smarty->compile_dir  = dirname(__FILE__).'/../templates_c/';
        $smarty->assign('contentsFile', dirname(__FILE__).'/../contents/users_'.$tab.'.tpl');
        $smarty->assign('css_style', ReadAllStyles());
        $smarty->assign('styles', $_styles);
        $smarty->display('users_common.tpl');
    }

    $styles = [
        "home" => "",
        "new_entry" => "",
        "edit_entry" => "",
        "history" => "",
        "media_library" => "",
        "new_media" => "",
        "edit_profile" => "",
        "message" => "",
    ];

    function GetBackgroundStyles($tab){
        $setting = "background-color:rgb(108,121,142)";
        $_styles = $styles;
        $_styles[$tab] = $setting;
        return $_styles;
    }