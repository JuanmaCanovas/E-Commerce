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

        function verifyLogin(){
            if ((!empty($_POST['email']))&&(!empty($_POST['password']))){
                $usuario = $_POST['email'];
                $contraseña = $_POST['password'];
                $dbUsuario = $this->model->getUsuario($usuario); //Obtiene el email y usuario de la db 
                
                if ($dbUsuario && password_verify($contraseña, ($dbUsuario[0]["password"]))){
                    session_start();
                    echo 'Logeado papi';
                    $_SESSION['logged'] = true;
                    $_SESSION['usuario'] = $usuario;
                    header(home);
                   
                    
                }else{
                    $this->view->showLogin();
                    echo '<h3 class="text-danger text-center">Email o password erroneos, verifique sus datos y vuelva a intentar.</h3>';
                }


            }
        }
        function logout(){
            session_start();
            session_destroy();
            $this->view->showLogin();
        }
    }