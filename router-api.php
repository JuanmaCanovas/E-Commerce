<?php
    require_once 'libs/Router.php';
    require_once 'Controller/ApiCommentController.php';
    require_once 'Controller/ApiProductosController.php';



    //Crea el router
    $router = new Router();

    //Tabla de ruteo
    $router->addRoute('/comentarios/:ID', 'GET', 'ApiCommentController', 'getComments');
    $router->addRoute('/comentarios/:ID', 'DELETE', 'ApiCommentController', 'deleteComment');
    $router->addRoute('/comentarios', 'POST', 'ApiCommentController', 'addComment');
    $router->addRoute('/comentarios/:ID/:ATTR', 'GET', 'ApiProductosController', 'getAttr');

    //routea
    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>