<?php include('cabecera.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/estilo.css">
	<meta charset="utf-8">
</head>
<body>
	
	<form action="buscar.php" method="get" class="form_search" style="margin-top: 100px;">
			Embajador&nbsp;&nbsp;<select name="lstembajador" id="botonlg" style="width: 150px;" >
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
			<input type="submit" value="Buscar" class="btn_search">
	</form>
	

	<table align="center" style="width:100%;">
		   	<tr bgcolor="#E8F0FE" style="border:1px; ">
		   		<td>Nº Rifa</td>
                <td>Cliente</td>
                <td>Celular</td>
                <td>Embajador</td>
                <td>Estado</td>
            </tr>
            <?php 
			//Paginador
			include("bd/conexion.php");
			$sql_registe = mysqli_query($cn,"select count(*) as total_registro from rifa");
			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 40;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($cn,"select r.*,e.estado,em.embajador
										from rifa r, estado e, embajador em
										where r.idestado=e.idestado
										and r.idembajador = em.idembajador
										order by r.numrifa asc limit $desde,$por_pagina");

			mysqli_close($cn);

			$result = mysqli_num_rows($query);
			if($result > 0){

			while ($r = mysqli_fetch_array($query)) {
					
			?>
						<tr>
							<td><?php echo $r["numrifa"]; ?></td>
							<td><?php echo $r["nombcomprador"]; ?></td>
							<td><?php echo $r["celular"]; ?></td>
							<td><?php echo $r["embajador"]; ?></td>
							<td><?php echo $r["estado"]; ?></td>
						</tr>
			<?php 
				}
			}
			?>
           </table>
           <div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
</body>
</html>