<?php
/* Smarty version 3.1.40, created on 2021-10-14 02:23:58
  from 'C:\xampp\htdocs\pcmarket SMARTY\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6167789e33e3a9_42649882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99006bc28750c4805979bacb9128551931ad6cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcmarket SMARTY\\templates\\editar.tpl',
      1 => 1634170739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6167789e33e3a9_42649882 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <title>PcMARKET</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form class="row g-3" action="updateProduct" method="POST"> 
        <div class="col-md-4">
          <label class="form-label text-white">Nombre del producto</label>
          <input type="text" class="form-control" name="nombre" placeholder="Ryzen 5" required>
        </div>
        <div class="col-md-4">
          <label class="form-label text-white">Marca</label>
          <input type="text" class="form-control" name="marca" placeholder="AMD" required>
        </div>
        <div class="col-md-4">
          <label  class="form-label text-white">Modelo</label>
          <input type="text" class="form-control" name="modelo" placeholder="3600" required>
        </div>
        <div class="col-md-6">
          <label  class="form-label text-white">Categoria</label>
          <select class="form-select" name="categoria" required>
            <option value="cpu">CPU</option>
            <option value="gpu">GPU</option>
            <option value="motherboard">Motherboards</option>
            <option value="ram">Memorias RAM</option>
            <option value="fuente">Fuentes</option>
            <option value="gabinete">Gabinetes</option>
          </select>
        </div>
        <div class="col-md-6">
          <label  class="form-label text-white">Precio</label>
          <input type="number" class="form-control" name="precio" placeholder="20000" required>
        </div>
        <input class="form-control" hidden type="text" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">
        <button type="submit" class="btn btn-primary">Actualizar</button>           
    </form>
</div>
</html><?php }
}
