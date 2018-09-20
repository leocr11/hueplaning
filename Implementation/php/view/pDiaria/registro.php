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
						<h2>Produccion Diaria</h2>
					</div>
					<div class="forms-grids">
							<div class="panel panel-widget">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Registro:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="index.php?page=pDiaria&funcion=registro&step=2" method="POST">
											<div class="form-group valid-form">
												<input type="number" class="form-control" name="cantidadHuevos" placeholder="Cantidad Huevos" required>
											</div>
											<div class="form-group valid-form">
												<input type="date" class="form-control" name="fecha" placeholder="Fecha" required>
											</div>
											<div class="form-group valid-form">
												<select class="form-control1" name="jornada">
													<option value='MAÑANA' selected>MAÑANA</option>
													<option value='TARDE'>TARDE</option>
												</select>
											</div>
											<div class="form-group">
												<select name="lote" class="form-control1">
													<?php  
														$stmt = $lote->listarLotes();
														while ($row = $stmt->fetch()) {
															echo "<option value='".$row[0]."'>".$row[1]."</option>";
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