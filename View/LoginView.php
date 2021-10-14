<?php
    class LoginView {

        function __construct(){

        }

        

        function showLogin(){
            $smarty= new Smarty();
            $smarty->display('templates/login.tpl');
          }

    }