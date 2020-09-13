<?
    define('viewsFolder', dirname(__FILE__).'/../views/');

    function HomePage($vars)
    {
        include viewsFolder.'home.php';
        Home($vars);
    }

    function ArticleCreationPage($vars)
    {
        include viewsFolder.'articles.php';
        ArticleIndex($vars);
    }

    function ArticleListPage($vars)
    {
        echo $vars['page'];
    }
