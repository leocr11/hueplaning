<?php 
	require_once 'controller/LoteController.php';
	require_once 'controller/PDiariaController.php';
	$lote = new LoteController();
	$pDiaria = new PDiariaController();
 ?>
<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Clasificacion</h2>
					</div>
					<div class="forms-grids">
							<div class="panel panel-widget">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Listar:</h3>
										<div class="float-md-left">
									</div>
									<div class="table-responsive">
										<table class="table">
										  <thead class="thead-dark">
										    <tr>
										      <th scope="col">Cantidad Huevos</th>
										      <th scope="col">Fecha</th>
										      <th scope="col">Jornada</th>
										      <th scope="col">Lote</th>
										      <th scope="col">Accion</th>
										    </tr>
										  </thead>
										  <tbody>
										  	<?php  
										  		$stmt = $pDiaria->listarPDiarias();
												while ($row = $stmt->fetch()) { ?>
										    <tr>
										      <th scope="row"><?php echo $row[1]?></th>
										      <td><?php echo $row[2] ?></td>
										      <td><?php echo $row[3] ?></td>
										      <td>
										      	<?php 
										      		$result = $lote->buscarLote($row[4])->fetch(PDO::FETCH_BOTH);
										      		echo $result[1];
										      	?>
										      </td>
										      <td>
												   <input type="button" class="btn btn-danger" value="Clasificar" onclick="location.href = 'index.php?page=pClasificacion&funcion=registro&step=1&id=<?php echo $row[0]?>';">
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