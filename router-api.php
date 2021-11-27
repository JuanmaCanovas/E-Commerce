<?php
    require_once 'libs/Router.php';
    require_once 'Controller/ApiCommentController.php';



    //Crea el router
    $router = new Router();

    //Tabla de ruteo
    //$router->addRoute('productos/:ID', 'GET', 'ApiProductController', 'viewProduct');
    $router->addRoute('/comentarios/:ID', 'GET', 'ApiCommentController', 'getComments');
    $router->addRoute('/comentarios/:ID', 'DELETE', 'ApiCommentController', 'deleteComment');
    $router->addRoute('/comentarios', 'POST', 'ApiCommentController', 'addComment');

    //routea
    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>