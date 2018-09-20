<?php 
	require_once 'controller/LoteController.php';
	require_once 'controller/LProveedorController.php';
	require_once 'controller/LRazaGallinaController.php';
	$lProveedor = new LProveedorController();
	$lRazaGallina = new LRazaGallinaController();
	$lote = new LoteController();
 ?>
<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Lote</h2>
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
										      <th scope="col">Nombre</th>
										      <th scope="col">Cantidad Gallinas</th>
										      <th scope="col">Fecha Creacion</th>
										      <th scope="col">Raza Gallina</th>
										      <th scope="col">Proveedor</th>
										      <th scope="col">Accion</th>

										    </tr>
										  </thead>
										  <tbody>
										  	<?php  
										  		$stmt = $lote->listarLotes();
												while ($row = $stmt->fetch()) { ?>
										    <tr>
										      <th scope="row"><?php echo $row[1]?></th>
										      <td><?php echo $row[2] ?></td>
										      <td><?php echo $row[3] ?></td>
										      <td>
										      	<?php 
										      		$result = $lRazaGallina->buscarLRazaGallina($row[4])->fetch(PDO::FETCH_BOTH);
										      		echo $result[1];
										      	?>
										      </td>
										      <td>
										      	<?php 
										      		$result = $lProveedor->buscarLProveedor($row[5])->fetch(PDO::FETCH_BOTH);
										      		echo $result[1];
										      	?>
										      </td>
										      <td>
												   <input type="button" class="btn btn-danger" value="Editar" onclick="location.href = 'index.php?page=lote&funcion=editar&step=1&id=<?php echo $row[0]?>';">
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