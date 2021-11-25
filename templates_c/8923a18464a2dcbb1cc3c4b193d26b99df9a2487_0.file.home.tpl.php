<?php
/* Smarty version 3.1.40, created on 2021-11-25 06:13:11
  from 'C:\xampp\htdocs\TpeEspecialWeb2\TpEspecialWeb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619f1b6760f1e3_64136444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8923a18464a2dcbb1cc3c4b193d26b99df9a2487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeEspecialWeb2\\TpEspecialWeb2\\templates\\home.tpl',
      1 => 1637817179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:producto.tpl' => 1,
    'file:form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619f1b6760f1e3_64136444 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <body>
            <div class="container">
                <div class="row">
                <?php $_smarty_tpl->_subTemplateRender("file:producto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
            
            <div class="container mt-5">
              <?php $_smarty_tpl->_subTemplateRender('file:form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }
}
