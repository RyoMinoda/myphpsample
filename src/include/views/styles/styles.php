<?php
    function ReadAllStyles(){
        $common = file_get_contents(dirname(__FILE__).'/common.css');
        $article_list = file_get_contents(dirname(__FILE__).'/article_list.css');
        $users_home = file_get_contents(dirname(__FILE__).'/users_home.css');
        $users_new_entry = file_get_contents(dirname(__FILE__).'/users_new_entry.css');
        return $common.$article_list.$users_home.$users_new_entry;
    }