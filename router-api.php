<?php
    require_once 'libs/Router.php';
    require_once 'Controller/ApiProductController.php';
    require_once 'Controller/ApiCommentController.php';

    //Crea el router
    $router = new Router();

    //Tabla de ruteo
    //$router->addRoute('productos/:ID', 'GET', 'ApiProductController', 'viewProduct');
    $router->addRoute('productos/:ID', 'GET', 'ApiCommentController', 'getComments');
    $router->addRoute("/comentarios/:ID", "DELETE", "ApiCommentController", "deleteComentario");
    $router->addRoute("/comentarios", "POST", "ApiCommentController", "agregarComentario");

    //routea
    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>