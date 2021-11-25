<?php
    class LoginView {

        function __construct(){

        }

        function showSignUp(){
            $smarty = new Smarty();
            $smarty->display('templates/signup.tpl');
        }

        function showLogin(){
            $smarty= new Smarty();
            $smarty->display('templates/login.tpl');
          }


        function showAdminPanel($users, $isAdmin){
            $smarty = new Smarty();
            $smarty->assign('isAdmin',$isAdmin);
            $smarty->assign('users',$users);
            $smarty->display('templates/adminpanel.tpl');
        }
    }