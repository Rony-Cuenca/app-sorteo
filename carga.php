<?php include('cabecera.php'); ?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/estilo.css">


</head>
<body>

<form action="p-carga.php" method="post" enctype="multipart/form-data" style="margin-top: 200px">
	<table align="center">
		<tr>
			<td class="label">
				<center>Buscar Archivo</center><br>
				<input type="file" name="archivo">
			</td>
			<td style="padding-left:80px;"></td>
			<td class="label">
				<center>Embajador</center><br>
				<select name="lstembajador" id="botonlg" style="width: 150px;" >
				<?php 

				include("bd/conexion.php");
				$query = mysqli_query($cn,"select * from embajador");
			
				while ($r = mysqli_fetch_array($query)) {
						
				?>
				<center>
					<option value="<?php echo $r["idembajador"] ?>"><?php echo $r["embajador"] ?>
				</center>
				<?php 	
				}
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3"><br><br><br><br></td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				
				<input type="submit" value="Procesar" id="botonlg" style="width: 200px;">
			</td>
		</tr>
	</table>
</form>
</body>
</html>

