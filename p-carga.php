<?php 
include("bd/conexion.php");

$idembaj=$_POST["lstembajador"];

//CARGAR ARCHIVO
$archivo=$_FILES["archivo"]["tmp_name"];

$fila=file($archivo);
for ($i=0; $i <count($fila) ; $i++) { 
							list($numrifa,$compr,$celular)=explode(";",$fila[$i]);

$numrifa=ucfirst($numrifa);
$compr=strtoupper($compr);
$vendedor=strtoupper($vendedor);

$sqlcargar = mysqli_query($cn,"insert into rifa values('$numrifa','$compr','$celular',$idembaj,1)");

}

header('location: listar.php');
?>