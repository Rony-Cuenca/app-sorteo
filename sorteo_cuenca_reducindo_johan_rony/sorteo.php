<?php include('cabecera.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

	<table style="margin-top: 150px;" align="center">
		<tr>
			<td class="label" style="padding-left:40px;padding-right: 40px"><center>Numero de Rifa</center><br></td>
			
			<td rowspan="2"><center>GANADOR DEL SORTEO</center><br>
				<textarea name="txtsorteo" class="cajalg" placeholder="GANADOR DE LA RIFA..." style="width: 350px;
						height: 100px;background-color: #E8F0FE;font-family: Consolas;font-size: 15px;margin: auto;"></textarea>
				<br>
				<br>
				<br>
				<center>
					<form action="p-sorteo.php" method="get">
						<input type="submit" value="Sortear" id="botonlg">
					</form>
				</center>
			</td>
		</tr>
		<tr>
			<td align="center">
				<textarea name="txtmostrar" placeholder="" style="background-color: #E8F0FE;
																font-family: Consolas;
																font-size: 15px;
																margin: auto;
																width: 80px;
																height: 300px;"><?php 
										include("bd/conexion.php");
										$query = mysqli_query($cn,"select numrifa from rifa where idestado='1' order by numrifa asc");
										mysqli_close($cn);
										$re = mysqli_num_rows($query);
										if($re > 0){
										while ($r = mysqli_fetch_array($query)){

										echo $r["numrifa"]."\n";
										echo "\n";
										}
										}
									?></textarea>
				<br>
				<h4 class="label">Cantidad de tickets : <?php echo $re ?></h4>
			</td>
		</tr>
	</table>
</body>
</html>

