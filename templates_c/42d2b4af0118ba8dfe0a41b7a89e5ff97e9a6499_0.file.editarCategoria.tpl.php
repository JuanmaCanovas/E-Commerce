<?php
/* Smarty version 3.1.40, created on 2021-10-15 03:42:00
  from 'C:\xampp\htdocs\Repo\TpEspecialWeb2\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6168dc68acec17_77405272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42d2b4af0118ba8dfe0a41b7a89e5ff97e9a6499' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Repo\\TpEspecialWeb2\\templates\\editarCategoria.tpl',
      1 => 1634262120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6168dc68acec17_77405272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<div class="container">
    <form class="row g-3" action="updateCategory" method="POST"> 
        <div class="col-md-4">
          <label class="form-label text-white">Nombre del producto</label>
          <input type="text" class="form-control" name="categoria" placeholder="" required>
        </div>
        <h1><?php echo $_smarty_tpl->tpl_vars['id_categoria']->value;?>
</h1>
        <input class="form-control" hidden type="text" name="id_categoria" value="<?php echo $_smarty_tpl->tpl_vars['id_categoria']->value;?>
">
        <button type="submit" class="btn btn-primary">Actualizar</button>       

    </form>
</div>
</body>
</html>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
