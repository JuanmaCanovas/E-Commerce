<?php
    require_once "./Model/ProductModel.php";
    require_once "./Model/CommentModel.php";
    require_once "./Model/LoginModel.php";
    require_once "./View/ProductView.php";
    require_once "./View/LoginView.php";
    require_once "./Controller/LoginController.php";
    class ProductContoller {

        private $model;
        private $view;
        private $login;
       function __construct(){
            $this->model = new ProductModel;
            $this->view = new ProductView;
            $this->login = new LoginController;
            $this->loginModel = new LoginModel;
            $this->commentModel = new CommentModel;

       }

       function showHome(){

           $products = $this->model->getProducts();
           for ($i=0; $i < count($products); $i++) { 
            $products[$i]['id_categoria'] = $this->model->getCategoryName($products[$i]['id_categoria']);
            }
           $categories = $this->model->getCategory();
           session_start();
           if(isset($_SESSION['usuario'])){
               $this->view->home($products, $categories,$is_logged=$_SESSION['logged'],$is_admin=$_SESSION['isAdmin']);
           }else{
                $_SESSION['logged']=false;
                $_SESSION['isAdmin']=false;
                $_SESSION['usuario'] = '';
                $_SESSION['id_usuario'] = '';
                $this->view->home($products, $categories,$is_logged=$_SESSION['logged'],$id_admin=$_SESSION['isAdmin']);
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
           $producto['id_categoria'] = $this->model->getCategoryName($producto['id_categoria']);
           $comments = $this->commentModel->getCommentsDB($id, null);
           $usuarios = $this->loginModel->getUsers();
           session_start();
           if(isset($_SESSION['usuario'])){
            $this->view->viewDetail($producto,$usuarios,$comments,$is_admin=$_SESSION['isAdmin'],$is_logged=$_SESSION['logged'],$usuario=$_SESSION['usuario'],$idUsuario=$_SESSION['id_usuario']);
           }else{
            $this->view->viewDetail($producto,$usuarios,$comments,$is_admin=$_SESSION['isAdmin'],$is_logged=$_SESSION['logged'],$usuario=$_SESSION['usuario'],$idUsuario=$_SESSION['id_usuario']);        
           }
       }

       function showProductByCategory($categoria){
           $id_categoria = $this->model->getIdByName($categoria);
           $productos = $this->model->getProductByCategory($id_categoria);
           for ($i=0; $i < count($productos); $i++) { 
            $productos[$i]['id_categoria'] = $this->model->getCategoryName($productos[$i]['id_categoria']);
            }
           $categories = $this->model->getCategory();
           session_start();
           if(isset($_SESSION['usuario'])){
            $this->view->home($productos,$categories,$is_logged=$_SESSION['logged'],$is_admin=$_SESSION['isAdmin']);

           }else{
            $this->view->home($productos,$categories);
                
           }
           
       }

       function viewEditProduct($id){
        $categories = $this->model->getCategory();
        session_start();
           if(isset($_SESSION['usuario'])){
                $this->view->editarProducto($id,$categories,$is_logged=$_SESSION['logged'],$is_admin=$_SESSION['isAdmin']);
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

    }