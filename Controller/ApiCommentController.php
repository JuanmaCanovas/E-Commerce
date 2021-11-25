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

        function getComments($params = []){
            $idProduct = $params[":ID"];
            $comments = $this->model->getCommentsDB($idProduct);
            if ($comments){
                return $this->view->response($comments, 200);
            }else{
                return $this->view->response("No existen comentarios", 404);
            }
        }
    
    }

?>