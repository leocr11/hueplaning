<?php 
	require_once 'model/PRegistroPersistencia.php';
	require_once 'controller/PClasificacionController.php';
	require_once 'controller/PDiariaController.php';
	require_once 'controller/UsuarioController.php';
	$usuario = new UsuarioController();
	$pRegistro = new PRegistroPersistencia();
	$pClasificacion = new PClasificacionController();
	$pDiaria = new PDiariaController();
 ?>
<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Registro Producción</h2>
					</div>
					<div class="forms-grids">
							<div class="panel panel-widget">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Listar:</h3>
									</div>
									<div class="table-responsive">
										<table class="table">
										  <thead class="thead-dark">
										    <tr>
										      <th scope="col">#</th>
										      <th scope="col">Fecha Recoleccion</th>
										      <th scope="col">Fecha Clasificacion</th>
										      <th scope="col">Encargado</th>
										    </tr>
										  </thead>
										  <tbody>
										  	<?php  
										  		$stmt = $pRegistro->listarPRegistros();
												while ($row = $stmt->fetch()) { ?>
										    <tr>
										      <th scope="row"><?php echo $row[0]?></th>
										      <td>
										      	<?php 
										      		$result1 = $pDiaria->buscarPDiaria($row[1])->fetch(PDO::FETCH_BOTH);
										      		echo $result1[2];
										      	?>
										      </td>
										      <td>
										      	<?php 
										      		$result2 = $pClasificacion->buscarPClasificacion($row[2])->fetch(PDO::FETCH_BOTH);
										      		echo $result2[2];
										      	?>
										      </td>
										      <td>
										      	<?php 
										      		$result3 = $usuario->buscarUsuario($row[3])->fetch(PDO::FETCH_BOTH);
										      		echo $result3[2];
										      	?>
										      </td>
										    </tr>
											<?php } ?>
										  </tbody>
										</table>
									</div>
								</div>
							</div>
						<div class="clearfix"> </div>
					</div>
				</div>
</div>
</div>