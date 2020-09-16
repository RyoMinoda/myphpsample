<?php
    require_once dirname(__FILE__).'/../../../vendor/smarty/smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../styles/styles.php';
    function UsersHome($tab){
        $styles = GetBackgroundStyles($tab);
        $smarty = new Smarty();
        $smarty->template_dir = dirname(__FILE__).'/../templates/';
        $smarty->compile_dir  = dirname(__FILE__).'/../templates_c/';
        $smarty->assign('contentsFile', dirname(__FILE__).'/../contents/users_home.tpl');
        $smarty->assign('style', ReadAllStyles());
        $smarty->assign('active_tab', $tab);
        $smarty->assign('styles', $styles);
        $smarty->display('users_common.tpl');
    }

    function GetBackgroundStyles($tab){
        $setting = "background-color:rgb(108,121,142)";
        $styles = [
            "home" => "",
            "new_entry" => "",
        ];
        switch ($tab) {
            case 'home':
                $styles['home'] = $setting;
                break;
            case 'new_entry':
                $styles['new_entry'] = $setting;
                break;
            default:
                break;
        }
        return $styles;
    }