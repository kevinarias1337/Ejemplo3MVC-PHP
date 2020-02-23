<?php
class Conexion{
    public function getConexion(){
        $conexion = new mysqli("localhost", "root", "111", "bdsupermercado");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>