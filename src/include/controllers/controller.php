<?
    define('views_folder', dirname(__FILE__).'/../views/');
    define('php_folder', dirname(__FILE__).'/../views/php/');
    require_once dirname(__FILE__).'/../repositories/ArticleRepository.php';
    
    function HomePage($vars)
    {
        include php_folder.'home.php';
        Home($vars);
    }

    function ArticleListPage($vars)
    {
        $repository = new ArticleRepository();
        $articles = $repository -> getAllArticles();
        include php_folder.'article_list.php';
        ArticleList($articles);
    }

    function ProfilePage($vars)
    {
        include php_folder.'profile.php';
        Profile($vars);
    }

    function ImagePage($vars)
    {
        include views_folder.'images/images.php';
        echo ReadImage($vars['title']);
    }
