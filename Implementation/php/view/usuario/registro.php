<?php 
	require_once 'controller/RolController.php';
	$rol = new RolController();
 ?>
<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Usuario</h2>
					</div>
					<div class="forms-grids">
							<div class="panel panel-widget">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Registro:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="index.php?page=usuario&funcion=registro&step=2" method="POST">
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="cedula" placeholder="Cedula" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="direccion" placeholder="Direccion" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="correo" placeholder="Correo" data-error="Bruh, that email address is invalid" required>
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" name="password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
												<select name="rol" class="form-control1">
													<?php  
														$stmt = $rol->listarRoles();
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