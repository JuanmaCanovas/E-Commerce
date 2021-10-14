<?php
    require_once "./Model/LoginModel.php";
    require_once "./View/LoginView.php";

    class LoginController{

        private $model;
        private $view;

        function __construct(){
            //$this->model = new LoginModel;
            $this->view = new LoginView;
        }

        function login(){
            $this->view->showLogin();
        }
    }