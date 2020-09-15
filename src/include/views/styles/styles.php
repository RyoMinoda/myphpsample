<?php
    function ReadAllStyles(){
        $common = file_get_contents(dirname(__FILE__).'/common.css');
        $article_list = file_get_contents(dirname(__FILE__).'/article_list.css');
        return $common.$article_list;
    }