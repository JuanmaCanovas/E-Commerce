<?php
/* Smarty version 3.1.40, created on 2021-11-29 21:07:57
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\headerdetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a5331d645471_61822184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1af3a0d5be8a261af7480d5520a4dd57a8ef58e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\headerdetail.tpl',
      1 => 1638206840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5331d645471_61822184 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="<?php echo BASE_URL;?>
"/>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
            <title>PcMARKET</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href='home'>PCMARKET</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PCMARKET</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active bg-dark" aria-current="page" href="home">Home</a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-panel">Administracion de usuarios</a>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['isLogged']->value) {?>
                        <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                        </li>
      
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                            </li>

                    <?php }?>
                    
                    
                   </ul>
            </div>
        </div>
    </div>
</nav><?php }
}
