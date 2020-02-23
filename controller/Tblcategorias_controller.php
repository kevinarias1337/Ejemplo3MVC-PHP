<?php
require_once "model/Tblcategorias_model.php";
class Tblcategorias_controller{
    private $model_categorias;

    public function __construct(){
        $this->model_categorias= new Tblcategorias_model();
    }

    public function menuCategorias(){
        $consulta=$this->model_categorias->consultarCategorias();
        require_once "view/menuCategorias.php";
    }
    public function guardarCategorias(){
        $dato['nombre'] = $_POST['txtnombre'];
        $this->model_categorias->insertarCategoria($dato);
        $this->menuCategorias();
    }
}
?>