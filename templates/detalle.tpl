{include file="header.tpl"}

    <div class="container-fluid">
        <div class="card text-center w-50 shadow position-absolute top-50 start-50 translate-middle">
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

{include file="footer.tpl"}