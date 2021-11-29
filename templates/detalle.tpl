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
    <form method="GET">
        <!--<select name="orderby" id="orderby">
            <option value="puntuacion">puntuacion</option>
            <option value="antiguedad">antiguedad</option>
        </select>
        <select name="asc" id="asc">
            <option value="ascendente">ascendente</option>
            <option value="descendente">descendente</option>
        </select> -->
        <input type="text" name="orderby" placeholder="id/puntuacion">
        <!--<input type="text" name="asc" placeholder="ascendente/descendente">-->
        <input type="submit" value="ordenar">
    </form>
    <input type="text" value="{$producto['id_product']}" name="id-producto" hidden>
        
        {include file="addcomentario.tpl"}
        
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="js/main.js"></script>
{include file="footer.tpl"}
