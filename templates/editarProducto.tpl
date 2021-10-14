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
            <option value="cpu">CPU</option>
            <option value="gpu">GPU</option>
            <option value="motherboard">Motherboards</option>
            <option value="ram">Memorias RAM</option>
            <option value="fuente">Fuentes</option>
            <option value="gabinete">Gabinetes</option>
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