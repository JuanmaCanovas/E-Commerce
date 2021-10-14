<?php
    class ProductModel {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=prueba;charset=utf8', 'root', '');
        }

        function getProducts(){
            $sentencia = $this->db->prepare("SELECT * FROM productos");
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $productos;
        } //Obtiene todos los productos de la bbdd
    
        function insertProduct($nombre, $marca, $modelo, $categoria, $precio){
            $sentencia = $this->db->prepare(
                "INSERT INTO productos(nombre, marca, modelo, categoria, precio) VALUES(?, ?, ?, ?, ?)");
            $sentencia->execute(array($nombre, $marca, $modelo, $categoria, $precio));
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
            $sentencia = $this->db->prepare("SELECT * FROM productos WHERE categoria=?");
            $sentencia->execute(array($id));
            $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $productos;

        }//Filtra por categoria los productos

        function updateProduct($nombre, $marca, $modelo, $categoria, $precio,$id){
        $sentencia = $this->db->prepare(
            "UPDATE productos SET id_product='$id', nombre='$nombre', marca='$marca', modelo='$modelo', categoria='$categoria', precio='$precio' WHERE id_product=?");
        $sentencia->execute(array($id));
        }

        function getCategory(){
            $sentencia = $this->db->prepare("SELECT * FROM categoria");
            $sentencia->execute();
            $categories = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }

        function insertCategory($categoria){
            $sentencia = $this->db->prepare(
                "INSERT INTO categoria(categoria) VALUES(?)");
            $sentencia->execute(array($categoria));
        }

        function deleteCategoryDB($id){
            $sentencia = $this->db->prepare("DELETE FROM categoria WHERE categoria=?");
            $sentencia->execute(array($id));
        }
        function updateCategory($categoria){
            $sentencia = $this->db->prepare(
                "UPDATE categoria SET categoria='$categoria' WHERE categoria=?");
            $sentencia->execute(array($categoria));
            }
    }