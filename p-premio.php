<?php 
include("bd/conexion.php");
//REGISTRAR PREMIO
$prem=$_POST["txtpremio"];

$premio=strtoupper($prem);

$sql = mysqli_query($cn,"insert into premio(premio) values ('$premio')");

header('location: r-premio.php');

 ?>