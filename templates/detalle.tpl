{include file="header.tpl"}
<div id="producto">
    <div class="container p-5">
        <div class="card text-center d-flex shadow mt-5">
            <div class="card-header">
                Detalle del producto
            </div>
            <div class="card-body">
            <div class="container">
            <img src="images/default_image.jpg" class="card-img-top w-50" alt="...">
            </div>
            <h5 class="card-title">{$producto['id_categoria']} {$producto['nombre']}</h5>
            <p class="card-text">Marca: {$producto['marca']}</p>
            <p class="card-text">Modelo: {$producto['modelo']}</p>
            <p class="card-text">Precio: ${$producto['precio']}</p>
            <a href="home" class="btn btn-primary">Volver a Home</a>
            </div>
        </div>
    </div>
</div>
    <div class="container_form container">
        <div class="form-group text-left">
        <label for="exampleFormControlTextarea1">Que te parecio la noticia</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario">
        {include file="addcomentario.tpl"}
        
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

{include file="footer.tpl"}
