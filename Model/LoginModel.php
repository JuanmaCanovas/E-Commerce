<?php
    class LoginModel{
        private $db;
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pcmarket;charset=utf8', 'root', '');
        }

        function getUsuario($usuario){
            $sentencia = $this->db->prepare("select * from usuarios where email=? limit 1");
            $sentencia->execute(array($usuario));
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }


    }