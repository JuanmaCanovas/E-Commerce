<?php
/* Smarty version 3.1.40, created on 2021-11-25 06:13:37
  from 'C:\xampp\htdocs\TpeEspecialWeb2\TpEspecialWeb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619f1b817254a3_50002630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf3fee3baa1f6c528ed9d8c294a4a9f75e57b45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeEspecialWeb2\\TpEspecialWeb2\\templates\\detalle.tpl',
      1 => 1637817179,
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
function content_619f1b817254a3_50002630 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="form-group text-left">
        <label for="exampleFormControlTextarea1">Que te parecio la noticia</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario">
        <?php $_smarty_tpl->_subTemplateRender("file:addcomentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        </div>
    </div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
