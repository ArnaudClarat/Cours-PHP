<?php

/**
 * Gestion des dependances
 * La fonction glob permet de regarder tout ce qui est dans les dossiers
 */
foreach (glob(__DIR__. '/controllers/*.php') as $filename)
{
    include_once $filename;
}

// separation en tableau de chaîne de charactère et selectionne le 3e éléments
$request = explode('/', $_SERVER['REQUEST_URI'])[2]; // Permet de récuperer la bonne partie de l'url

/* Routing:  Si c'est vide, on charge la page racine home index.html */ 
switch ($request) {
    case '' :
        $controller = new HomeController();
        break;

    case 'contact' :
        $controller = new ContactController();
        break;

    //   Les preg_match() sont du RegEx, l'astérisque est un Wild Card
    case (preg_match('/product\?id=*/', $request) ? true : false) :
        $controller = new ProductController();
        break;

    case (preg_match('/categorie\?id=*/', $request) ? true : false) :
        $controller = new CategorieController();
        break;

    case (preg_match('/search\?stringSearch*/', $request) ? true : false) :
        $controller = new SearchController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}