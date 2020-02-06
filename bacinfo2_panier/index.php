<?php

foreach (glob(__DIR__."/controllers/*.php") as $filename)
{
    include_once $filename;
}

$request = explode('/', $_SERVER['REQUEST_URI'])[2];

//Coucou

switch ($request) {
    case '' :
        $controller = new HomeController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}