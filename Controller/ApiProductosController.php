<?php

require_once "Model/ProductModel.php";
require_once "View/ApiCommentView.php";

class ApiProductosController{

private $model;
private $view;

function __construct(){

    $this->view = new ApiCommentView();
    $this->model = new ProductModel();
}

    private $attrs = [
        "id" => "id",
        "puntuacion" => "puntuacion",
    ];

    function getAttr($params){
        $idProduct = $params[":ID"];
        $attr = $params[":ATTR"];
        if(isset($attrs[$attr]) && $this->model->getProduct($idProduct)){
            $attr = $attrs[$attr];
            $value = $this->model->getAttr($idProduct, $attr);
            $this->view->response($value, 200);
        }
        else{
            $this->view->response(null, 404);
        }
    }
}