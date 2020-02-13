<?php

foreach (glob(__DIR__. '/controllers/*.php') as $filename)
{
    include_once $filename;
}

$request = explode('/', $_SERVER['REQUEST_URI'])[2];
switch ($request) {
    case '' :
        $controller = new HomeController();
        break;

    case 'product' :
        $controller = new ProductController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}