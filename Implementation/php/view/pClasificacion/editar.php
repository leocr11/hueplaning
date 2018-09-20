<?php 
	require_once 'controller/TipoHuevoController.php';
	require_once 'controller/PClasificacionController.php';
	$tipoHuevo = new TipoHuevoController();
	$pClasificacion = new PClasificacionController();
	$row = $pClasificacion->buscarPClasificacion($_REQUEST['id'])->fetch(PDO::FETCH_BOTH);
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
										<h3>Actualizar:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="<?php echo 'index.php?page=pClasificacion&funcion=editar&step=2&id='.$row[0]; ?>" method="POST">
											<div class="form-group valid-form">
												<input type="date" class="form-control" name="fecha" value="<?php echo $row[2]; ?>" required>
											</div>
											<div class="form-group">
													<select class="form-control1" name="tipoHuevo">
														<?php  
															$stmt = $tipoHuevo->listarHuevos();
															while ($row2 = $stmt->fetch()) {
																if($row[3] == $row2[0]){
																	echo "<option value=".$row2[0]." selected>".$row2[1]."</option>";
																}else{
																	echo "<option value=".$row2[0].">".$row2[1]."</option>";
																}
															}
														?>
													</select>
												</div>
											<div class="form-group valid-form">
												<input type="number" class="form-control" name="cantidadHuevos" value="<?php echo $row[1]; ?>" required>
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