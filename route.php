<?php
    require_once "Controller/ProductController.php";
    require_once "Controller/CategoryController.php";
    require_once "Controller/LoginController.php";

    define('BASE_URL' , '//' . $_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/' );

    define('home', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/home');

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; 
    }

    $productController = new ProductContoller();
    $categoryController = new CategoryController();
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
            $categoryController->createCategory(); //Done
            break;
        case 'updateProduct':
            $productController->updateProduct();
            break;
        case 'editProduct':
            $productController->viewEditProduct($params[1]);
            break;
        case 'updateCategory':
            $categoryController->updateCategory(); //Done
            break;
        case 'editCategory':
            $categoryController->viewEditCategory($params[1]); //Done
            break;
        case 'deleteProduct':
            $productController->deleteProduct($params[1]);
            break;
        case 'deleteCategory':
            $categoryController->deleteCategory($params[1]); //Done
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
            session_start();
            session_destroy();
            break;
        case 'logout':
            $loginController->logout();
            break;
        case 'logging':
            $loginController->verifyLogin();
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }
    
    

