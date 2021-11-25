{foreach from=$products item=product}
    <div class="col-3">
        <div class="card mt-5" style="width: 18rem;">
            <img src="images/default_image.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$product['marca']} {$product['nombre']} {$product['modelo']}</h5>
                    <h5 class="card-title">${$product['precio']}</h5>
                    <h6 class="card-title text-info">Categoria: {$product['id_categoria']}</h6>
                    <h6 class="card-title text-info">Puntuación: {$product['id_categoria']}</h6>
                    <a href="showProduct/{$product['id_product']}" class="btn btn-primary">Ver Detalle</a>
                    {if $isAdmin}
                    <a href="deleteProduct/{$product['id_product']}" class="btn btn-danger">Borrar</a>         
                    <a href="editProduct/{$product['id_product']}" class="btn btn-warning text-white">Editar</a>    
                    {/if}
                </div>
        </div>
    </div>
{/foreach}

                        

                      