<?php
    require_once "Controller/ProductController.php";
    require_once "Controller/LoginController.php";

    define('BASE_URL' , '//' . $_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/' );

    define('home', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/home');

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; 
    }

    $productController = new ProductContoller();
    $loginController = new LoginController();

    $params = explode('/', $action);
    

    switch ($params[0]) {
        case 'home': 
            $productController->showHome(); 
            break;
        case 'createProduct':
            $productController->createProduct();
            break;
        case 'createCategory':
            $productController->createCategory();
            break;
        case 'updateProduct':
            $productController->updateProduct();
            break;
        case 'editProduct':
            $productController->viewEditProduct($params[1]);
            break;
        case 'updateCategory':
            $productController->updateCategory();
            break;
        case 'editCategory':
            $productController->viewEditCategory($params[1]);
            break;
        case 'deleteProduct':
            $productController->deleteProduct($params[1]);
            break;
        case 'deleteCategory':
            $productController->deleteCategory($params[1]);
            break;
        case 'viewProduct':
            $productController->showProduct($params[1]);
            break;
        case 'viewLogin':
            viewLogin();
            break;
        case 'filter':
            $productController->showProductByCategory($params[1]);
            break;
        case 'login':
            $loginController->login();
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }
    
    

