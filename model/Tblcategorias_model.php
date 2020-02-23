<?php
class Tblcategorias_model{
    private $bd;
    private $tblcategorias;

    public function __construct(){
        $this->bd=Conexion::getConexion();
        $this->tblcategorias=array();
    }
    public function insertarCategoria($dato){
        $nombre=$dato['nombre'];
        $consulta="INSERT INTO tblcategorias (nombre) VALUES ('$nombre')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoria");
    }
    public function consultarCategorias(){
        $consulta=$this->bd->query("SELECT * FROM tblcategorias");
        while($fila=$consulta->fetch_assoc()){
            $this->tblcategorias[]=$fila;
        }
        return $this->tblcategorias;
    }
}
?>