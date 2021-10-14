<?php
/* Smarty version 3.1.40, created on 2021-10-14 07:03:54
  from 'C:\xampp\htdocs\pcmarket SMARTY\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6167ba3a7f5018_46656360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3ea05db033065cd5ce78bb2c3d6f2dc4d78e5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcmarket SMARTY\\templates\\login.tpl',
      1 => 1634187643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6167ba3a7f5018_46656360 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="css/style.css">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
              <title>PcMARKET</title>
            </head>
            <body>
              
                <div class="container w-75 bg-light mt-5 rounded shadow">
                    <div class="row align-items-stretch">
                        <div class="col bg d-none d-lg-block rounded-start">
            
                        </div>
                        <div class="col p-5">
                            <div class="text-end logo">
                                <img src="images/logo.png" width="100" alt="">
                            </div>
                            <h3 class="fw-bold text-center py-5">Bienvenido!</h3>
                            <form action="#">
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                </div>
                                <div class="py-4 text-center">
                                    <p class="fw-bold">O</p>
                                    <a href="home">Continuar como invitado</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            
            
              <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"><?php echo '</script'; ?>
>
              <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"><?php echo '</script'; ?>
>
            </body>
            </html><?php }
}
