<?php
    require_once "libs/smarty/libs/Smarty.class.php";
    class ProductView {
      
      function home($products, $categories){
        $smarty = new Smarty();
        $smarty->assign('products',$products);
        $smarty->assign('categories',$categories);
        $smarty->display('templates/home.tpl');
     }
     
     function editarProducto($id_product){
         $smarty= new Smarty();
         $smarty->assign('id_product',$id_product);
         $smarty->display('templates/editarProducto.tpl');
     }
     
     function editarCategoria($categoria){
       $smarty = new Smarty();
       $smarty->assign('categoria',$categoria);
       $smarty->display('templates/editarCategoria.tpl');
     }

     function viewDetail($producto){
       $smarty = new Smarty();
       $smarty->assign('producto',$producto);
       $smarty->display('templates/detalle.tpl');
      }
    }

/*
        function showProducts($products){
          $Smarty
        }

        function showHomeLocation(){
            header("location: ".BASE_URL."home");
        }//Redirige al home despues de insertar un producto o eliminarlo

        function viewProduct($producto){
          printHeader();
          $html ='
            <h1>'.$producto->categoria.': '.$producto->nombre.'</h1>
            <h2>Marca: '.$producto->marca.'</h2>
            <h2>Modelo: '.$producto->modelo.'</h2>
            <h2>Precio: '.$producto->precio.'</h2>
            ';
        echo $html;
        printFooter();
        }

        function viewProductByCategory($productos){
            printHeader();
    
           $html='<div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img src="images/publicidad1.jpg" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <div class="container mt-5 bg-dark">
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
                    <div class="col-1 mx-auto">
                      <button class="btn btn-light mb-1 text-dark" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="container">
                <div class="row">
                ';
                    foreach ($productos as $producto){
                      $html.=  '
                            <div class="col-3">
                                <div class="card mt-5" style="width: 18rem;">
                                    <img src="images/default_image.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$producto->marca.' '.$producto->nombre.' '.$producto->modelo.'</h5>
                                        <h5 class="card-title">$'.$producto->precio.'</h5>
                                        <h6 class="card-title text-info">Categoria: '.$producto->categoria.'</h6>
                                        <a href="viewProduct/'.$producto->id_product.'" class="btn btn-primary">Ver Detalle</a>
                                        <a href="deleteProduct/'.$producto->id_product.'" class="btn btn-danger">Borrar</a>
                                        
                                    </div>
                                </div>
                            </div>
                            '
                        
                    ;
                    }
            echo $html;
            printFooter();
        }
    }*/

