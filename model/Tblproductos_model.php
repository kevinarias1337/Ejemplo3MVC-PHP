<?php
class Tblproductos_model{
    private $bd;
    private $tblproductos;

    public function __construct(){
        $this->bd=Conexion::getConexion();
        $this->tblproductos=array();
    }

    public function insertarProducto($dato){
        $idcategoria=$dato['idcategoria'];
        $nombre=$dato['nombreproducto'];
        $precio=$dato['precioproducto'];
        $consulta="INSERT INTO tblproductos (idcategoria, nombre, precio) VALUES ($idcategoria, '$nombre', $precio)";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar los datos");
    }

    public function consultarProductos(){
        $consulta=$this->bd->query("SELECT p.id, c.nombre AS 'categoria', p.nombre, p.precio FROM tblproductos p INNER JOIN tblcategorias c ON p.idcategoria = c.id");
        while($fila=$consulta->fetch_assoc()){
            $this->tblproductos[]=$fila;
        }
        return $this->tblproductos;
    }
}