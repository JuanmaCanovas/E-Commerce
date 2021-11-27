<?php
/* Smarty version 3.1.40, created on 2021-11-27 03:33:39
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\addcomentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a19903c58ae0_50504415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58203526f518b4c4570e77fbd0d925c049a7ac00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\addcomentario.tpl',
      1 => 1637967454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vue/comentarios.tpl' => 1,
  ),
),false)) {
function content_61a19903c58ae0_50504415 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12">

    <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php if ((($_smarty_tpl->tpl_vars['isLogged']->value == true) || ($_smarty_tpl->tpl_vars['isAdmin']->value == true))) {?>

    <form action="form-action"id="form-comentario" class="container">
        <div class="form-group text-left">
            <label for="exampleFormControlSelect1">Puntuación</label>
            <select class="form-control" id="exampleFormControlSelect1" name="puntos">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group text-left">
        <label for="exampleFormControlTextarea1">Que te parece el producto</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario">
        </div>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['idUsuario']->value;?>
" name="id-usuario" hidden>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" name="nombre"  hidden>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_product'];?>
" name="id-producto" hidden>
            <button type="submit" class="btn mt-2 btnCrear text-white bg-dark" id="btn-comment">Comentar</button>
    </form>
    <?php }?>

</div>
<?php }
}
