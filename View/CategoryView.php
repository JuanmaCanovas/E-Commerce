<?php
    require_once "libs/smarty/libs/Smarty.class.php";
    class CategoryView {

        function home($products, $categories,$isLogged=false){
            $smarty = new Smarty();
            $smarty->assign('products',$products);
            $smarty->assign('isLogged',$isLogged);
            $smarty->assign('categories',$categories);
            $smarty->display('templates/home.tpl');
         }

         function editarCategoria($id_categoria,$categories,$isLogged=false){
            $smarty = new Smarty();
            $smarty->assign('categories',$categories);
            $smarty->assign('id_categoria',$id_categoria);
            $smarty->assign('isLogged',$isLogged);
            $smarty->display('templates/editarCategoria.tpl');
          }

    }

?>
