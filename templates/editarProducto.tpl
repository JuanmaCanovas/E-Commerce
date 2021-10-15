{include file="header.tpl"}
<body>
<div class="container">
    <form class="row g-3" action="updateProduct" method="POST"> 
        <div class="col-md-4">
          <label class="form-label text-white">Nombre del producto</label>
          <input type="text" class="form-control" name="nombre" placeholder="Ryzen 5" required>
        </div>
        <div class="col-md-4">
          <label class="form-label text-white">Marca</label>
          <input type="text" class="form-control" name="marca" placeholder="AMD" required>
        </div>
        <div class="col-md-4">
          <label  class="form-label text-white">Modelo</label>
          <input type="text" class="form-control" name="modelo" placeholder="3600" required>
        </div>
        <div class="col-md-6">
          <label  class="form-label text-white">Categoria</label>
          <select class="form-select" name="categoria" required>
          {foreach from=$categories item=category}
            <option value="{$category['categoria']}">{$category['categoria']}</option>
          {/foreach}
            
            
          </select>
        </div>
        <div class="col-md-6">
          <label  class="form-label text-white">Precio</label>
          <input type="number" class="form-control" name="precio" placeholder="20000" required>
        </div>
        <input class="form-control" hidden type="text" name="id_product" value="{$id_product}">
        <button type="submit" class="btn btn-primary">Actualizar</button>           
    </form>
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </body>
</html>