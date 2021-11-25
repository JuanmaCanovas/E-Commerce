<?php
    require_once "./Model/CategoryModel.php";
    require_once "./View/CategoryView.php";
    require_once "./View/LoginView.php";
    require_once "./Model/LoginModel.php";
    require_once "./Controller/LoginController.php";
    class CategoryController {

        private $model;
        private $view;
        private $login;
        function __construct(){
                $this->model = new CategoryModel;
                $this->view = new CategoryView;
                $this->login = new LoginController;
        }

        function createCategory(){
            $this->model->insertCategory($_POST['categoria']);
            header(home);
        }

        function updateCategory(){
            var_dump($_POST['categoria']);
            var_dump($_POST['id_categoria']);
            $this->model->updateCategoryDB($_POST['categoria'],$_POST['id_categoria']);
            header(home);
        }

        function viewEditCategory($id){
            $categories = $this->model->getCategory();
            session_start();

            if(isset($_SESSION['usuario'])){
                $this->view->editarCategoria($id,$categories,$is_logged=$_SESSION['logged'],$is_admin['isAdmin']);
            }else{
                $this->view->editarCategoria($id,$categories);
                 
            }
            
        }
        
        function deleteCategory($id){
            $this->model->deleteCategoryDB($id);
            header(home);
        }
    }
?>