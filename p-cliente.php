<?php 
include("bd/conexion.php");
//REGISTRAR CLIENTE
$nrifa=$_POST["txtnr"];
$com=$_POST["txtcom"];
$cel=$_POST["txtcel"];
$ven=$_POST["lstembajador"];
$est=1;

$nrifa=ucfirst($nrifa);
$com=strtoupper($com);
$ven=strtoupper($ven);


$sqlregistrar = mysqli_query($cn,"insert into rifa values('$nrifa','$com','$cel','$ven',$est)");

header('location: listar.php');
?>