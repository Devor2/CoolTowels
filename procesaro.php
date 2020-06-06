<?php

include("conexion.php");

$nombre = $_POST ['nombre'];
$correo = $_POST ['correo'];
$direccion = $_POST ['direccion'];

$query="INSERT INTO compradores(nombre,domicilio,correo_electronico) VALUES('$nombre','$direccion','$correo')";
$resultado=$conexion->query($query);

if($resultado){
    echo "los datos se han agregado correctamente";

}
else{
    echo "no se han podido agregar los datos";
}
?>