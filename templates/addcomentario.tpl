<div class="col-lg-12">

    {include file="vue/comentarios.tpl"}
    
    {if (($isLogged==true)||($isAdmin==true))}

    <form action="form-action"id="form-comentario" class="container">
        <div class="form-group text-left">
            <label for="exampleFormControlSelect1">Puntuación</label>
            <select class="form-control" id="exampleFormControlSelect1" name="puntos">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group text-left">
        <label for="exampleFormControlTextarea1">Que te parece el producto</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario">
        </div>
            <input type="text" value="{$idUsuario}" name="id-usuario" hidden>
            <input type="text" value="{$usuario}" name="nombre"  hidden>
            <input type="text" value="{$producto['id_product']}" name="id-producto" hidden>
            <button type="submit" class="btn mt-2 btnCrear text-white bg-dark" id="btn-comment">Comentar</button>
    </form>
    {/if}

</div>
