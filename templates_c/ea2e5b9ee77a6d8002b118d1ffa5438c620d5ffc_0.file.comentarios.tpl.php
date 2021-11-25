<?php
/* Smarty version 3.1.40, created on 2021-11-25 21:46:47
  from 'C:\xampp\htdocs\TPespecial\TpEspecialWeb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619ff637a17aa4_97133503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea2e5b9ee77a6d8002b118d1ffa5438c620d5ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPespecial\\TpEspecialWeb2\\templates\\vue\\comentarios.tpl',
      1 => 1637873205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ff637a17aa4_97133503 (Smarty_Internal_Template $_smarty_tpl) {
?>  

<div id="template-vue-comentarios">
      <div >
          <h5>Promedio: F </h5>
          <article v-for="comentario in comentarios" class="text-left">
            <div>
              <div class="bg-comentario p-2">
                <p>Nombre:{{comentario.id_usuario}}</p>
                <p>Puntaje: {{comentario.puntuacion}}</p>
                <p>{{comentario.descripcion}}</p>
              </div>
              <hr class="my-3">
            </div>
          </article>
      </div>
      
    </article>
    </div>
</div>



    <?php }
}
