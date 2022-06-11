<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "gym";

$conexion = mysqli_connect($servidor,$usuario,$clave,$basededatos);

if(!$conexion){
    echo "Error en la conexion";
}
?>