<?php 	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'sorteodb';

	$cn = @mysqli_connect($host,$user,$password,$db);

	if(!$cn){
		echo "Error en la conexión";
	}


 ?>