<?php 
	require_once 'controller/TipoHuevoController.php';
	$tipoHuevo = new TipoHuevoController();
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
										<h3>Registro:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="<?php echo 'index.php?page=pClasificacion&funcion=registro&step=2&pDiaria='.$_REQUEST['id'] ?>" method="POST">
											<div class="form-group valid-form">
												<input type="date" class="form-control" name="fecha" placeholder="fecha" required>
											</div>
											<div class="form-group">
												<select name="tipoHuevo" class="form-control1">
													<?php  
														$stmt = $tipoHuevo->listarTipoHuevos();
														while ($row = $stmt->fetch()) {
															echo "<option value='".$row[0]."'>".$row[1]."</option>";
														}
													?>
												</select>
											</div>
											<div class="form-group valid-form">
												<input type="number" class="form-control" name="cantidadHuevos" placeholder="cantidadHuevos" required>
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