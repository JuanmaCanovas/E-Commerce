<?php

    class CommentModel {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pcmarket;charset=utf8', 'root', '');
        }

        function getCommentsDB($id){
            $sentencia=$this->db->prepare("SELECT * from comentarios WHERE id_producto=?");
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>