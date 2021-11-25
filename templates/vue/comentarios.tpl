{literal}  

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
    {/literal}  
    </article>
    </div>
</div>



    