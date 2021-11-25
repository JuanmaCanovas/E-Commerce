<?php
/* Smarty version 3.1.40, created on 2021-11-25 03:04:57
  from 'C:\xampp\htdocs\Repo\TpEspecialWeb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619eef49e027a7_61816703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7c59f0eddaa32aa53b1921934867a4115e8bace' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Repo\\TpEspecialWeb2\\templates\\vue\\comentarios.tpl',
      1 => 1637805889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eef49e027a7_61816703 (Smarty_Internal_Template $_smarty_tpl) {
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
