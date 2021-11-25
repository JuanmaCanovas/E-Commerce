<?php
/* Smarty version 3.1.40, created on 2021-11-25 06:13:37
  from 'C:\xampp\htdocs\TpeEspecialWeb2\TpEspecialWeb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619f1b81741191_68649146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b5410c3aa1918d6fb8cd97e13e33d82bf32e88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeEspecialWeb2\\TpEspecialWeb2\\templates\\vue\\comentarios.tpl',
      1 => 1637817179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619f1b81741191_68649146 (Smarty_Internal_Template $_smarty_tpl) {
?>  

<div id="template-vue-comentarios">
      <div >
          <h5>Promedio: F </h5>
          <article v-for="comentario in comentarios" class="text-left">
            <div>
              <div class="bg-comentario p-2">
                <p>Nombre: {{comentario.nombre}}</p>
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
