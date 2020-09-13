<?php
    require_once dirname(__FILE__).'/../../vendor/smarty/smarty/libs/Smarty.class.php';
    require dirname(__FILE__).'/../repositories/ArticleRepository.php';
    function ArticleIndex($vars){
        $repository = new ArticleRepository();
        $articles = $repository -> getAllArticles();

        $smarty = new Smarty();
        $smarty->template_dir = dirname(__FILE__).'/templates/';
        $smarty->compile_dir  = dirname(__FILE__).'/templates_c/';

        $smarty->assign('contents_file', dirname(__FILE__).'/contents/top.tpl');
        $smarty->assign('innerContents', '記事一覧');
        $smarty->assign('currentPage', 'articles');
        $smarty->display('common.tpl');
    }