<?php
/* Smarty version 3.1.40, created on 2021-10-14 06:38:23
  from 'C:\xampp\htdocs\pcmarket SMARTY\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6167b43f7148b9_08091033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff2b6592b4e98f6f0243c9d2e93d0c1b38edb2ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcmarket SMARTY\\templates\\header.tpl',
      1 => 1634186286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6167b43f7148b9_08091033 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <li>
                                <a class="dropdown-item" href="filter/<?php echo $_smarty_tpl->tpl_vars['category']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['categoria'];?>
<a href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value['categoria'];?>
"><i class="bi bi-x-circle-fill text-danger"></i></a><a href="editCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value['categoria'];?>
"><i class="bi bi-pencil-square text-warning"></i></a></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                        </li>
                   </ul>
            </div>
        </div>
    </div>
</nav><?php }
}
