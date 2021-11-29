<?php
/* Smarty version 3.1.40, created on 2021-11-29 21:49:30
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a53cda11a168_84294193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea2e5b9ee77a6d8002b118d1ffa5438c620d5ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\vue\\comentarios.tpl',
      1 => 1638218967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a53cda11a168_84294193 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div id="template-vue-comentarios">
      <input type="text" value="{$producto['id_product']}" name="id-producto" hidden>
      <button v-on:click="ordenarAscendente()">Ascendente</button>
      <button v-on:click="ordenarDescendente()">Descendente</button>
      <div >
          <article v-for="comentario in comentarios" class="text-left">
            <div v-if="comentario.descripcion">
              <div class="card" style="width: 18rem;">
              
                  <div class="card-body">
                  <h5 class="card-title">Puntaje: {{comentario.puntuacion}}</h5>
                  <p class="card-text">{{comentario.descripcion}}</p>
                  <hr class="my-3">
                    
                  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?><i class="bi bi-x-circle-fill text-danger fs-5" title="Eliminar comentario" v-on:click="eliminarComentario(comentario.id)"></i><?php }?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value['id_usuario'] == $_smarty_tpl->tpl_vars['comentario']->value['id_usuario']) {?>                    
                        <p class="card-title">Nombre: <?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
 </p>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </article>
      </div>
    </article>
    </div>
</div>



    
</div>
<?php }
}
