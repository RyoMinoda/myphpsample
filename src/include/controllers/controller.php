<?
    define('views_folder', dirname(__FILE__).'/../views/');
    require_once dirname(__FILE__).'/../repositories/ArticleRepository.php';
    
    function HomePage($vars)
    {
        include views_folder.'home.php';
        Home($vars);
    }

    function ArticleListPage($vars)
    {
        $repository = new ArticleRepository();
        $articles = $repository -> getAllArticles();
        include views_folder.'article_list.php';
        ArticleList($articles);
    }
