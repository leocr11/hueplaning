<?php 
	require_once 'controller/LProveedorController.php';
	require_once 'controller/LRazaGallinaController.php';
	require_once 'controller/LoteController.php';
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
										<h3>Registro:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="index.php?page=lote&funcion=registro&step=2" method="POST">
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="nombre" placeholder="nombre" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="cantidadGallinas" placeholder="cantidadGallinas" required>
											</div>
											<div class="form-group valid-form">
												<input type="date" class="form-control" name="fechaCreacion" placeholder="fechaCreacion" required>
											</div>
											<div class="form-group">
												<select name="razaGallina" class="form-control1">
													<?php  
														$stmt = $lRazaGallina->listarLRazaGallinas();
														while ($row1 = $stmt->fetch()) {
															echo "<option value='".$row1[0]."'>".$row1[1]."</option>";
														}
													?>
												</select>
											</div>
											<div class="form-group">
												<select name="proveedor" class="form-control1">
													<?php  
														$stmt = $lProveedor->listarLProveedores();
														while ($row2 = $stmt->fetch()) {
															echo "<option value='".$row2[0]."'>".$row2[1]."</option>";
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