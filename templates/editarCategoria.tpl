{include file="header.tpl"}
<body>
<div class="container">
    <form class="row g-3" action="updateCategory" method="POST"> 
        <div class="col-md-4">
          <label class="form-label text-white">Nombre del producto</label>
          <input type="text" class="form-control" name="categoria" placeholder="" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>           
    </form>
</div>
</body>
</html>