<?php 
include("bd/conexion.php");
//REGISTRAR CLIENTE
$em=$_POST["txtne"];


$embajador=strtoupper($em);


$sqlregistrar = mysqli_query($cn,"insert into embajador(embajador) values ('$embajador')");

header('location: r-embajador.php');
?>