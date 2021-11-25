<?php
/* Smarty version 3.1.40, created on 2021-11-25 21:00:37
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619feb65bdbc86_61872625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b384f68bd8ab736390200655943c2bc22eeb97a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\signup.tpl',
      1 => 1637817179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619feb65bdbc86_61872625 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <h3 class="fw-bold text-center py-5">Cree su usuario</h3>
                            <form action="sendSignUp" method="POST">
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
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
