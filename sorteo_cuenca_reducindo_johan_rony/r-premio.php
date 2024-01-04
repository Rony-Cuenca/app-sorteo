<?php include('cabecera.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<center>
	<form action="p-premio.php" method="post" style="margin-top: 150px;">
		<fieldset  style="width:400px;">
			<legend>Registrar Premio</legend>
			<table align="center">
				<tr>
					<td>
						<br>
						<textarea name="txtpremio" class="cajalg" placeholder="Escriba premio..." style="width: 300px;
						height: 100px;" required=""></textarea>
						<br>
						<center>
							<input type="submit" value="Registrar" id="botonlg">
						</center>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br>
	<br>
	<center>
		<fieldset style="width: 20%;background: #E6E6E9">
		<legend>Premios</legend>
		<table>
				<?php 
				include("bd/conexion.php");
				$query = mysqli_query($cn,"select * from premio");

				mysqli_close($cn);

				$result = mysqli_num_rows($query);

				while ($r = mysqli_fetch_array($query)) {
					
				?>
						<tr>
							<td>- <?php echo $r["premio"]; ?></td>
						</tr>
				<?php 
				}
				?>
		</table>
		</fieldset>
	</center>
</center>
	</body>
	</html>