<?php
/* Smarty version 3.1.40, created on 2021-11-27 03:33:39
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61a19903c61a34_21658652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea2e5b9ee77a6d8002b118d1ffa5438c620d5ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\vue\\comentarios.tpl',
      1 => 1637978637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a19903c61a34_21658652 (Smarty_Internal_Template $_smarty_tpl) {
?>
  

<div id="template-vue-comentarios">
      <div >
          <article v-for="comentario in comentarios" class="text-left">
            <div v-if="comentario.descripcion">
              <div class="card" style="width: 18rem;">
                  <div class="card-body">
                  <h5 class="card-title">Puntaje: {{comentario.puntuacion}}</h5>
                  <p class="card-text">{{comentario.descripcion}}</p>
                  <hr class="my-3">
                  <p class="card-title">Nombre:{{comentario.id_usuario}}</p>  
                  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?><i class="bi bi-x-circle-fill text-danger fs-5" title="Eliminar comentario" v-on:click="eliminarComentario(comentario.id)"></i><?php }?>
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
