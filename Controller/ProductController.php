<?php
    require_once "./Model/ProductModel.php";
    require_once "./View/ProductView.php";
    require_once "./View/LoginView.php";
    require_once "./Model/LoginModel.php";
    require_once "./Controller/LoginController.php";
    class ProductContoller {

        private $model;
        private $view;
        private $login;
       function __construct(){
            $this->model = new ProductModel;
            $this->view = new ProductView;
            $this->login = new LoginController;
       }
       function showHome(){

           $products = $this->model->getProducts();
           for ($i=0; $i < count($products); $i++) { 
            $products[$i]['id_categoria'] = $this->model->get_category($products[$i]['id_categoria']);
            }
           $categories = $this->model->getCategory();
           session_start();
           if(isset($_SESSION['usuario'])){
               $this->view->home($products, $categories,$is_logged=$_SESSION['logged']);
           }else{
                $this->view->home($products, $categories);
           }

       }

       function createProduct(){
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $precio=$_POST['precio'];
        $id_categoria=$this->model->get_id_product($_POST['categoria']);
        $this->model->insertProduct($nombre,$marca,$modelo,$id_categoria,$precio);
        header(home);

       }

       function deleteProduct($id){
            $this->model->deleteProductDB($id);
            header(home);
       }

       function showProduct($id){
           $producto = $this->model->getProduct($id);
           $producto['id_categoria'] = $this->model->get_category($producto['id_categoria']);
           session_start();
           if(isset($_SESSION['usuario'])){
            $this->view->viewDetail($producto,$is_logged=$_SESSION['logged']);
           }else{
               $this->view->viewDetail($producto);
                
           }
       }

       function showProductByCategory($categoria){
           $id_categoria = $this->model->getIdByName($categoria);
           $productos = $this->model->getProductByCategory($id_categoria);
           for ($i=0; $i < count($productos); $i++) { 
            $productos[$i]['id_categoria'] = $this->model->get_category($productos[$i]['id_categoria']);
            }
           $categories = $this->model->getCategory();
           session_start();
           if(isset($_SESSION['usuario'])){
            $this->view->home($productos,$categories,$is_logged=$_SESSION['logged']);

           }else{
            $this->view->home($productos,$categories);
                
           }
           
       }

       function viewEditProduct($id){
        $categories = $this->model->getCategory();
        session_start();
           if(isset($_SESSION['usuario'])){
                $this->view->editarProducto($id,$categories,$is_logged=$_SESSION['logged']);
           }else{
                $this->view->editarProducto($id,$categories);
                
           }
        
       }

       function updateProduct(){
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $precio=$_POST['precio'];
        $id_categoria=$this->model->get_id_product($_POST['categoria']);
        $id_product = $_POST['id_product'];
        $this->model->updateProduct($nombre, $marca, $modelo, $id_categoria, $precio,$id_product);
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
            $categories = $this->model->getCategory();
            session_start();

            if(isset($_SESSION['usuario'])){
                $this->view->editarCategoria($id,$categories,$is_logged=$_SESSION['logged']);
            }else{
                $this->view->editarCategoria($id,$categories);
                 
            }
            
        }

        function updateCategory(){
            var_dump($_POST['categoria']);
            var_dump($_POST['id_categoria']);
            $this->model->updateCategory($_POST['categoria'],$_POST['id_categoria']);
            header(home);
        }

    }