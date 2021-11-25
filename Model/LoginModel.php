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

        function getUsers(){
            $sentencia = $this->db->prepare("SELECT * FROM usuarios");
            $sentencia->execute();
            $users = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $users;

        }

        function getUserId($email){
            $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
            $sentencia->execute(array($email));
            $usuario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;

        }

        function updateUser($admin, $id_usuario){

            $sentencia = $this->db->prepare(
                "UPDATE usuarios SET admin='$admin' WHERE id_usuario=?"
            );
            $sentencia->execute(array($id_usuario));
        }
        
        function deleteUserDB($id_usuario){

            $sentencia = $this->db->prepare(
                "DELETE FROM usuarios WHERE id_usuario=?"
            );
            $sentencia->execute(array($id_usuario));

        }

        function signupUser($email, $password){

            $query = $this->db->prepare('INSERT INTO usuarios(email, password) VALUES(?,?)');
            $query->execute(array($email,$password));

        }

    }