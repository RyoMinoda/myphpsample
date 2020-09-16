<?
    require dirname(__FILE__).'/../vendor/autoload.php';
    require dirname(__FILE__).'/../include/controllers/controller.php';
    require dirname(__FILE__).'/../include/conf/fast_route.php';

    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use($base) {
        $r->addRoute('GET', '/', 'HomePage');
        $r->addRoute('GET', '/articles/new_entry', 'ArticleCreationPage');
        $r->addRoute('GET', '/articles/entrylist', 'ArticleListPage');
        $r->addRoute('GET', '/articles/entrylist:page={page:\d+}:orderBy={column:.+}_{order:.+}', 'ArticleListPageOrderBy');
        $r->addRoute('GET', '/articles/entry/{id:\d+}', 'ArticlePage');
        $r->addRoute('GET', '/articles/entry/{id:\d+}/edit', 'ArticleEditionPage');
        $r->addRoute('GET', '/profile', 'ProfilePage');
        $r->addRoute('GET', '/contact', 'ContactPage');
        $r->addRoute('GET', '/user:tab={tab:.+}', 'UserHomePage');

        $r->addRoute('GET', '/images/{title:.+}', 'ImagePage');
    });

    configure($dispatcher);