
{literal}  
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
                  {/literal}  
                  {if $isAdmin}<i class="bi bi-x-circle-fill text-danger fs-5" title="Eliminar comentario" v-on:click="eliminarComentario(comentario.id)"></i>{/if}
                  {foreach from=$comentarios item=comentario}
                    {foreach from=$usuarios item=usuario}
                      {if $usuario['id_usuario'] eq $comentario['id_usuario']}                    
                        <p class="card-title">Nombre: {$usuario['email']} </p>
                      {/if}
                    {/foreach}
                  {/foreach}
              </div>
            </div>
          </article>
      </div>
    </article>
    </div>
</div>



    
</div>
