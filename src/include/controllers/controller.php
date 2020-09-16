<?
    define('views_folder', dirname(__FILE__).'/../views/');
    define('php_folder', dirname(__FILE__).'/../views/php/');
    require_once dirname(__FILE__).'/../repositories/ArticleRepository.php';
    
    function HomePage($vars)
    {
        $repository = new ArticleRepository();
        $articles = $repository -> getAllArticles();
        include php_folder.'home.php';
        Home($articles);
    }

    function ArticleListPage($vars)
    {
        $repository = new ArticleRepository();
        $column = "updated_at";
        $order = "DESC";
        $articles = $repository -> getAllArticles();
        include php_folder.'article_list.php';
        ArticleList($articles);
    }

    function ArticleListPageOrderBy($vars)
    {
        $repository = new ArticleRepository();
        $column = $vars['column'];
        $order = $vars['order'];
        $page = $vars['page'];
        $articles = $repository -> getArticlesOrderBy($column, $order);
        include php_folder.'article_list.php';
        ArticleList($articles);
    }

    function ProfilePage($vars)
    {
        include php_folder.'profile.php';
        Profile($vars);
    }

    function ContactPage($vars)
    {
        include php_folder.'contact.php';
        Contact($vars);
    }

    function UserHomePage($vars)
    {
        $tab = $vars['tab'];
        include php_folder.'users_home.php';
        UsersHome($tab);
    }

    function ImagePage($vars)
    {
        include views_folder.'images/images.php';
        echo ReadImage($vars['title']);
    }
