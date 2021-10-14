<?php
    require_once "./Model/ProductModel.php";
    require_once "./View/ProductView.php";
    class ProductContoller {

        private $model;
        private $view;

       function __construct(){

            $this->model = new ProductModel;
            $this->view = new ProductView;
       }
       function showHome(){
           $products = $this->model->getProducts();
           $categories = $this->model->getCategory();
           $this->view->home($products, $categories);

       }

       function createProduct(){

            $this->model->insertProduct($_POST['nombre'], $_POST['marca'], $_POST['modelo'], $_POST['categoria'], $_POST['precio']);
            header(home);

       }

       function deleteProduct($id){
            $this->model->deleteProductDB($id);
            header(home);
       }

       function showProduct($id){
           $producto = $this->model->getProduct($id);
           $this->view->viewDetail($producto);
       }

       function showProductByCategory($categoria){
           $productos = $this->model->getProductByCategory($categoria);
           $categories = $this->model->getCategory();
           $this->view->home($productos,$categories);
       }

       function viewEditProduct($id){
           $this->view->editarProducto($id);
       }

       function updateProduct(){
           $this->model->updateProduct($_POST['nombre'], $_POST['marca'], $_POST['modelo'], $_POST['categoria'], $_POST['precio'],$_POST['id_product']);
           header(home);
        }

        function createCategory(){
            $this->model->insertCategory($_POST['categoria']);
            header(home);
        }

        function deleteCategory($id){
            $this->model->deleteCategoryDB($id);
            header(home);
        }

        function viewEditCategory($id){
            $this->view->editarCategoria($id);
        }

        function updateCategory(){
            $this->model->updateCategory($_POST['categoria']);
            header(home);
        }

    }