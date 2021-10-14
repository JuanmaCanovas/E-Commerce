<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar producto</button>
<button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Agregar categoria</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="createProduct" method="POST"> 
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
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="createCategory" method="POST"> 
                <div class="col-md-4">
                  <label class="form-label">Nombre de la categoria</label>
                  <input type="text" class="form-control" name="categoria" placeholder="cpu" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>
      </div>
      
    </div>
  </div>
</div>


