<?php
/* Smarty version 3.1.40, created on 2021-11-25 06:14:08
  from 'C:\xampp\htdocs\TpeEspecialWeb2\TpEspecialWeb2\templates\adminpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619f1ba0873649_75367109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f227de12e83299cfde9ab6b34a4c5a95f8be08f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeEspecialWeb2\\TpEspecialWeb2\\templates\\adminpanel.tpl',
      1 => 1637817179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619f1ba0873649_75367109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        

        <ul class="container list-group">
        
            <li class="list-group-item">
                <?php if ($_smarty_tpl->tpl_vars['user']->value['admin'] == 1) {?><span class="text-success">ADMIN</span><?php }?>  Email:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
<a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
"><i class="bi bi-x-circle-fill text-danger fs-5" title="Eliminar usuario"></i></a><?php if ($_smarty_tpl->tpl_vars['user']->value['admin'] == 0) {?><a href="promoteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
"><i class="bi bi-shield-fill-plus text-success fs-3" title="Dar derechos de administración"></i></a><?php }
if ($_smarty_tpl->tpl_vars['user']->value['admin'] == 1) {?><a href="demoteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
"><i class="bi bi-shield-fill-minus text-danger fs-3" title="Revocar derechos de administración"></i></a><?php }?>
            </li>
  
        </ul>


    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
