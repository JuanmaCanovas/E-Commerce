<?php
/* Smarty version 3.1.40, created on 2021-10-14 05:52:38
  from 'C:\xampp\htdocs\pcmarket SMARTY\templates\editarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6167a986da1797_77099863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba6cb26badc33bc0577a5da5453ce212e17deb0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcmarket SMARTY\\templates\\editarProducto.tpl',
      1 => 1634183535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6167a986da1797_77099863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
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
</body>
</html><?php }
}
