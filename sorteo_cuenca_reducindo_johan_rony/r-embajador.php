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
	<form action="p-embajador.php" method="post" style="margin-top: 150px;">
				<fieldset style="width: 400px;">
							<legend>Registrar Embajador</legend>
							<table align="center">
							<tr>
								<td class="label">Nombre :</td>
								<td>
									<input type="text" name="txtne"  class="cajalg" autofocus autocomplete="off">
								</td>
							</tr>
						</table>
						<br>
						<center>
						<input type="submit" name="" value="Registrar" name="btnacceder" id="botonlg" style="height: 30px; width: 90px;">
						</center>
				</fieldset>
	</form>
	<br>
	<br>
	<center>
		<fieldset style="width: 20%;background: #E6E6E9">
		<legend>Embajadores</legend>
		<table>
				<?php 
				include("bd/conexion.php");
				$query = mysqli_query($cn,"select * from embajador");

				mysqli_close($cn);

				$result = mysqli_num_rows($query);

				while ($r = mysqli_fetch_array($query)) {
					
				?>
						<tr>
							<td>- <?php echo $r["embajador"]; ?></td>
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