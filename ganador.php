<?php include('cabecera.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<center>
	<fieldset class="grupo" style="margin-top: 100px;
									background-color: #E8F0FE;
									border-radius: 20px 0px 20px 0px;
									box-shadow: 2px 2px;
									width:650px;">
		<?php
		include("bd/conexion.php");
		?>
		<table>
			<tr>
				<td>
				<table>
					<tr>
						<td class="label" style="font-size: large;" align="center"><b>PREMIO</b></td>
					</tr>
					
						<?php
						$sql_premio = mysqli_query($cn,"select premio from premio");
						$tp=mysqli_num_rows($sql_premio);
						while ($p = mysqli_fetch_array($sql_premio)) {
						?>
							<tr>
								<td class="label" align="center"><?php echo $p["premio"]; ?></td>
							</tr>
						<?php 
						} 
						?>
				</table>
				</td>
				<td>
				<table align="margin-top">
					<tr>
						<td class="label" style="font-size: large;" align="center"><b>NRO RIFA</b></td>
						<td class="label" style="font-size: large;" align="center"><b>GANADOR</b></td>
					</tr>
						<?php 
						$sql_ganador = mysqli_query($cn,"select * from ganadores limit $tp");
						while ($g = mysqli_fetch_array($sql_ganador)) {
						?>	<tr>
								<td class="label" align="center"><?php echo $g["numrifa"]; ?></td>
								<td class="label" align="center"><?php echo $g["ganador"]; ?></td>
							</tr>
						<?php
						}
						?>
				</table>
				</td>
			</tr>
		</table>
	</fieldset>
	</center>


</body>
</html>