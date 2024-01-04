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
	<form action="p-cliente.php" method="post" style="margin-top: 150px;">
				<fieldset style="width: 400px;">
							<legend>Registrar Cliente</legend>
							<table align="center">
							<tr>
								<td class="label">Nº Rifa :</td>
								<td>
									<input type="text" name="txtnr"  class="cajalg" autofocus autocomplete="off">
								</td>
							</tr>
							<tr>
								<td class="label">Comprador :</td>
								<td>
									<input type="text" name="txtcom" class="cajalg" autocomplete="off">
								</td>
							</tr>
							<tr>
								<td class="label">Celular :</td>
								<td>
									<input type="text" name="txtcel" class="cajalg" autocomplete="off">
								</td>
							</tr>
							<tr>
								<td class="label">Embajador :</td>
								<td>
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
						</table>
						<br>
						<center>
						<input type="submit" name="" value="Registrar" name="btnacceder" id="botonlg" style="height: 30px; width: 90px;">
						</center>
				</fieldset>
			</form>
		</center>
	</body>
	</html>
