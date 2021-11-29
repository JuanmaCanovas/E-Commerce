<?php
    require_once "./Model/LoginModel.php";
    require_once "./View/LoginView.php";

    class LoginController{

        private $model;
        private $view;

        function __construct(){
            $this->model = new LoginModel;
            $this->view = new LoginView;
   
        }

        function login(){
            $this->view->showLogin();
        }

        function goSignUp(){
            $this->view->showSignUp();
        }

        function createUser(){

            if ((isset($_POST['email']))&&(isset($_POST['password']))){

                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $this->model->signupUser($email, $password);
                $id_usuario=$this->model->getUserId($email);
                if ((!empty($_POST['email'])) && (!empty($_POST['password']))){

                    session_start();
                    $_SESSION['isAdmin'] = false;
                    $_SESSION['logged'] = true;
                    $_SESSION['usuario'] = $email;
                    $_SESSION['id_usuario'] = $id_usuario[0]['id_usuario'];
                    header(home);
                }

            }

        }
        
        function verifyLogin(){
            if ((!empty($_POST['email']))&&(!empty($_POST['password']))){
                $usuario = $_POST['email'];
                $contraseña = $_POST['password'];
                $dbUsuario = $this->model->getUsuario($usuario); //Obtiene el email y usuario de la db 
                $id_usuario=$this->model->getUserId($usuario);
                if ($dbUsuario && password_verify($contraseña, ($dbUsuario[0]["password"]))){
                    
                    
                    if ($dbUsuario[0]['admin']==true){
                        session_start();
                        $_SESSION['isAdmin'] = true;
                        $_SESSION['logged'] = true;
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['id_usuario'] = $id_usuario[0]['id_usuario'];
                        header(home);
                    }else{
                        session_start();
                        $_SESSION['isAdmin'] = false;
                        $_SESSION['logged'] = true;
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['id_usuario'] = $id_usuario[0]['id_usuario'];

                        header(home);
                    }                   
                    
                }else{
                    $this->view->showLogin();
                    echo '<h3 class="text-danger text-center">Email o password erroneos, verifique sus datos y vuelva a intentar.</h3>';
                }


            }
        }

        function guest(){

            session_start();
            $_SESSION['isAdmin'] = false;
            $_SESSION['logged'] = false;
            $_SESSION['usuario'] = null;
            $_SESSION['id_usuario'] = null;
            header(home);

        }

        function AdminPanel(){
            session_start();
            if (isset($_SESSION['isAdmin'])){
                $users = $this->model->getUsers();
                $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin']);
                
            }
        }



        function promoteUser($id_usuario){
            session_start();
            $admin = 1;
            $this->model->updateUser($admin,$id_usuario);
            $users = $this->model->getUsers();
            $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin']);
        }

        function demoteUser($id_usuario){
            session_start();
            $admin = 0;
            $users = $this->model->getUsers();
            $this->model->updateUser($admin,$id_usuario);
            $users = $this->model->getUsers();
            $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin']);
        }

        function deleteUser($id_usuario){
            session_start();
            $this->model->deleteUserDB($id_usuario);
            $users = $this->model->getUsers();
            $this->view->showAdminPanel($users,$isAdmin=$_SESSION['isAdmin']);

        }

        function logout(){
            session_start();
            session_destroy();
            $this->view->showLogin();
        }

    }