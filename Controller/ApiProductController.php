<?php
    require_once 'Model/ProductModel.php';
    require_once 'View/ApiProductView.php';

    class ApiProductController {

        private $model;
        private $view;
        
        function __construct(){

            $this->model = new ProductModel();
            $this->view = new ApiProductView();
        }

        function products(){

            $productos = $this->model->getProducts();
            if ($productos){
                return $this->view->response($productos, 200);
            }else {
                return $this->view->response($productos, 404);
            }

        }

        function viewProduct($params = []){
            $idProduct = $params[":ID"];
            $producto = $this->model->getProduct($idProduct);
            if ($producto){
                return $this->view->response($producto, 200);
            }else{
                return $this->view->response("El producto con el id=$idProduct no existe", 404);
            }
        }
    }
?>