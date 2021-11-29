<?php
    require_once 'Model/CommentModel.php';
    require_once 'View/ApiCommentView.php';

    class ApiCommentController {

        private $model;
        private $view;
        
        function __construct(){

            $this->model=new CommentModel();
            $this->view= new ApiCommentView();
        }


        function getComments($params = null){
            $idProduct = $params[":ID"];
            //$comments = $this->model->getCommentsDB($idProduct);
            if ($idProduct){
                $orderby = "puntuacion";
                if(isset($_GET["orderby"])){
                    $orderby = $_GET["orderby"];
                }
                $comments = $this->model->getCommentsDB($idProduct, $orderby);

                return $this->view->response($comments, 200);
            }else{
                return $this->view->response("No existen comentarios", 404);
            }
        }

        function deleteComment($params = null){
            $idComment = $params[':ID'];
            $comment = $this->model->getCommentDB($idComment);
            if ($comment) {
                $this->model->deleteCommentDB($idComment);
                return $this->view->response("El comentario con el id=$idComment fue borrado",200);
            }else{
                return $this->view->response("El comentario con el id=$idComment no existe", 404);
            }
        }
        
        function addComment($params = null){
            $body = $this->getBody();
            $comment= $this->model->insertCommentDB($body->descripcion,$body->puntuacion,$body->id_producto,$body->id_usuario);
            if ($comment){
                $this->view->response("El comentario se inserto con exito",200);
            }else{
                $this->view->response("El comentario no se pudo insertar",404);
            }
        }

        private function getBody(){
            $bodyString = file_get_contents("php://input");
            return json_decode($bodyString);
        }
    }

?>