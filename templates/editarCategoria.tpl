{include file="header.tpl"}
<body>
<div class="container">
    <form class="row g-3" action="updateCategory" method="POST"> 
        <div class="col-md-4">
          <label class="form-label text-white">Nombre del producto</label>
          <input type="text" class="form-control" name="categoria" placeholder="" required>
        </div>
        <h1>{$id_categoria}</h1>
        <input class="form-control" hidden type="text" name="id_categoria" value="{$id_categoria}">
        <button type="submit" class="btn btn-primary">Actualizar</button>       

    </form>
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </body>
</html>