<?
    require dirname(__FILE__).'/../../vendor/autoload.php';

    function configure($dispatcher) {

    $method = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    $uri = rawurldecode($uri);
    $routeInfo = $dispatcher->dispatch($method, $uri);

    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            echo "404 Not Found";
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            echo "405 Method Not Allowed";
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            echo $handler($vars);
            break;
    };
};
