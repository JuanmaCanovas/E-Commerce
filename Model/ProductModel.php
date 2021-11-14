<?php
    class ProductModel {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pcmarket;charset=utf8', 'root', '');
        }

        function getProducts(){
            $sentencia = $this->db->prepare("SELECT * FROM productos");
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $productos;
        } //Obtiene todos los productos de la bbdd

        function getCategoryName($id_product){
            $sentencia = $this->db->prepare("SELECT categoria FROM categorias WHERE id_categoria=?");
            $sentencia->execute(array($id_product));
            $category = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $category['categoria'];
        }
        function get_id_product($name_category){
            $sentencia = $this->db->prepare("SELECT id_categoria FROM categorias where categoria=?");
            $sentencia->execute(array($name_category));
            $category = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $category['id_categoria'];
        }

        function insertProduct($nombre, $marca, $modelo, $id_categoria, $precio){
            $sentencia = $this->db->prepare(
                "INSERT INTO productos(nombre, marca, modelo, id_categoria, precio) VALUES(?, ?, ?, ?, ?)");
            $sentencia->execute(array($nombre, $marca, $modelo, $id_categoria, $precio));
        }//Agrega un producto a la bbdd
    
        function deleteProductDB($id){
            $sentencia = $this->db->prepare("DELETE FROM productos WHERE id_product=?");
            $sentencia->execute(array($id));
        }//Elimina un producto de la bbdd
    
        function getProduct($id){
            $sentencia = $this->db->prepare("SELECT * FROM productos WHERE id_product=?");
            $sentencia->execute(array($id));
            $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $producto;
        }//Obtiene un producto para ver el detalle en otra pagina

        function getProductByCategory($id){
            $sentencia = $this->db->prepare("SELECT * FROM productos WHERE id_categoria=?");
            $sentencia->execute(array($id));
            $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $productos;

        }//Filtra por categoria los productos

        function getIdByName($name_category){
            $sentencia = $this->db->prepare("SELECT id_categoria from categorias where categoria=?");
            $sentencia->execute(array($name_category));
            $id_categoria = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $id_categoria[0]['id_categoria'];
        }

        function updateProduct($nombre, $marca, $modelo, $categoria, $precio,$id){
        $sentencia = $this->db->prepare(
            "UPDATE productos SET id_product='$id', nombre='$nombre', marca='$marca', modelo='$modelo', id_categoria='$categoria', precio='$precio' WHERE id_product=?");
        $sentencia->execute(array($id));
        }

        function getCategory(){
            $sentencia = $this->db->prepare("SELECT * FROM categorias");
            $sentencia->execute();
            $categories = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }

    }