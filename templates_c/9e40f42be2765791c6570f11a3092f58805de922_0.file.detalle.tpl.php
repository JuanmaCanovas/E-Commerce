<?php
/* Smarty version 3.1.40, created on 2021-10-15 02:39:08
  from 'C:\xampp\htdocs\Repo\TpEspecialWeb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6168cdacb9e8c8_40166788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e40f42be2765791c6570f11a3092f58805de922' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Repo\\TpEspecialWeb2\\templates\\detalle.tpl',
      1 => 1634258348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168cdacb9e8c8_40166788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
        <div class="card text-center w-50 shadow position-absolute top-50 start-50 translate-middle">
            <div class="card-header">
                Detalle del producto
            </div>
            <div class="card-body">
            <div class="container">
            <img src="images/default_image.jpg" class="card-img-top w-50" alt="...">
            </div>
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
 <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</h5>
            <p class="card-text">Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value['marca'];?>
</p>
            <p class="card-text">Modelo: <?php echo $_smarty_tpl->tpl_vars['producto']->value['modelo'];?>
</p>
            <p class="card-text">Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</p>
            <a href="home" class="btn btn-primary">Volver a Home</a>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
