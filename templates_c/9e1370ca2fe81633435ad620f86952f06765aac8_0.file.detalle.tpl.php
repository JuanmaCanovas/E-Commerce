<?php
/* Smarty version 3.1.40, created on 2021-11-28 00:39:56
  from 'C:\xampp\htdocs\TpEspecialWeb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a2c1cc044024_42984352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1370ca2fe81633435ad620f86952f06765aac8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpEspecialWeb2\\templates\\detalle.tpl',
      1 => 1638056345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:addcomentario.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61a2c1cc044024_42984352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="producto">
    <div class="container p-5">
        <div class="card text-center d-flex shadow mt-5">
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
</div>
    <div class="container_form container">
        
        <?php $_smarty_tpl->_subTemplateRender("file:addcomentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        </div>
    </div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/main.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
