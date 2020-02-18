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

    case (preg_match('/product*/', $request) ? true : false) :
        $controller = new ProductController();
        break;

    case (preg_match('/categorie*/', $request) ? true : false) :
        $controller = new CategorieController();
        break;

    case (preg_match('/search*/', $request) ? true : false) :
        $controller = new SearchController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}