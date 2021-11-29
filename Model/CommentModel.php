<?php

    class CommentModel {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pcmarket;charset=utf8', 'root', '');
        }

        function getCommentsDB($id, $orderby){
            $sentencias=[
                "id" => "ORDER BY id",
                "puntuacion" => "ORDER BY puntuacion",
            ];
            if(isset($sentencias[$orderby])){   
                $orderQuery = $sentencias[$orderby];
                /*if($asc){
                    $orderQuery += "ASC";
                }
                else{
                    $orderQuery += "DESC";
                    }*/
                }
            else{   
                $orderQuery = "";
            }

            $sentencia=$this->db->prepare("SELECT * from comentarios WHERE id_producto=? $orderQuery");
            //var_dump($sentencia);
            $sentencia->execute(array($id));
            return $sentencia->fetchAll();
        }

        function getCommentDB($id){
            $sentencia=$this->db->prepare("SELECT * from comentarios WHERE id=?");
            $sentencia->execute(array($id));
            $comment = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $comment;
        }

        function deleteCommentDB($id){
            $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id=?");
            $sentencia->execute(array($id));
        }

        function insertCommentDB($descripcion,$puntuacion,$id_producto,$id_usuario){
            $sentencia = $this->db->prepare("INSERT INTO comentarios (descripcion, puntuacion, id_producto, id_usuario) VALUES(?,?,?,?)");
            $sentencia->execute(array($descripcion,$puntuacion,$id_producto,$id_usuario));
        }

    }

?>