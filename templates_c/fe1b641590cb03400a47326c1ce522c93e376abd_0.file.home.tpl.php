<?php
/* Smarty version 3.1.40, created on 2021-10-14 07:28:30
  from 'C:\xampp\htdocs\pcmarket SMARTY\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6167bffed2a806_41456815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1b641590cb03400a47326c1ce522c93e376abd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcmarket SMARTY\\templates\\home.tpl',
      1 => 1634189302,
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
function content_6167bffed2a806_41456815 (Smarty_Internal_Template $_smarty_tpl) {
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
