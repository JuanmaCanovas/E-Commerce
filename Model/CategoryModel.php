<?php
    class CategoryModel {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pcmarket;charset=utf8', 'root', '');
        }

        function insertCategory($categoria){
            $sentencia = $this->db->prepare(
                "INSERT INTO categorias(categoria) VALUES(?)");
            $sentencia->execute(array($categoria));
        }
        function updateCategoryDB($categoria,$id_categoria){
            $sentencia = $this->db->prepare(
                "UPDATE categorias SET categoria='$categoria' WHERE id_categoria=?");
            $sentencia->execute(array($id_categoria));
            }
        function getCategory(){
            $sentencia = $this->db->prepare("SELECT * FROM categorias");
            $sentencia->execute();
            $categories = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }
        
        function deleteCategoryDB($id){
            $sentencia = $this->db->prepare("DELETE FROM categorias WHERE categoria=?");
            $sentencia->execute(array($id));
        }
    }
    
?>
