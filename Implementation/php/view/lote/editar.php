<?php 
	require_once 'controller/LProveedorController.php';
	require_once 'controller/LRazaGallinaController.php';
	require_once 'controller/LoteController.php';
	$lProveedor = new LProveedorController();
	$lRazaGallina = new LRazaGallinaController();
	$lote = new LoteController();
	$row = $lote->buscarLote($_REQUEST['id'])->fetch(PDO::FETCH_BOTH);
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
										<h3>Actualizar:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="<?php echo 'index.php?page=lote&funcion=editar&step=2&id='.$row[0]; ?>" method="POST">
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="nombre" value="<?php echo $row[1]; ?>" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="cantidadGallinas" value="<?php echo $row[2]; ?>" required>
											</div>
											<div class="form-group valid-form">
												<input type="date" class="form-control" name="fechaCreacion" value="<?php echo $row[3]; ?>" required>
											</div>
												<div class="form-group">
													<select class="form-control1" name="razaGallina">
														<?php  
															$stmt = $lRazaGallina->listarLRazaGallinas();
															while ($row2 = $stmt->fetch()) {
																if($row[4] == $row2[0]){
																	echo "<option value=".$row2[0]." selected>".$row2[1]."</option>";
																}else{
																	echo "<option value=".$row2[0].">".$row2[1]."</option>";
																}
															}
														?>
													</select>
												</div>
												<div class="form-group">
													<select class="form-control1" name="proveedor">
														<?php  
															$stmt = $lProveedor->listarLProveedores();
															while ($row3 = $stmt->fetch()) {
																if($row[5] == $row3[0]){
																	echo "<option value=".$row3[0]." selected>".$row3[1]."</option>";
																}else{
																	echo "<option value=".$row3[0].">".$row3[1]."</option>";
																}
															}
														?>
													</select>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary">Submit</button>
												</div>
											</form>
									</div>
								</div>
							</div>
						<div class="clearfix"> </div>
					</div>
				</div>
</div>
</div>