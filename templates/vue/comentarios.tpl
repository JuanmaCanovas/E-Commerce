
{literal}  
<div id="template-vue-comentarios">
      <div >
          <article v-for="comentario in comentarios" class="text-left">
            <div v-if="comentario.descripcion">
              <div class="card" style="width: 18rem;">
              
                  <div class="card-body">
                  <h5 class="card-title">Puntaje: {{comentario.puntuacion}}</h5>
                  <p class="card-text">{{comentario.descripcion}}</p>
                  <hr class="my-3">
                  <p class="card-title">Nombre:{{comentario.id_usuario}}</p>{/literal}  
                  {if $isAdmin}<i class="bi bi-x-circle-fill text-danger fs-5" title="Eliminar comentario" v-on:click="eliminarComentario(comentario.id)"></i>{/if}
              </div>
            </div>
          </article>
      </div>
    </article>
    </div>
</div>



    
</div>
