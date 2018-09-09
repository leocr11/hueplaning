<?php 
	require_once 'controller/RolController.php';
	require_once 'controller/UsuarioController.php';
	$rol = new RolController();
	$usuario = new UsuarioController();
	$row = $usuario->buscarUsuario($_REQUEST['id'])->fetch(PDO::FETCH_BOTH);
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
										<h3>Perfil:</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="<?php echo 'index.php?page=usuario&funcion=editar&step=2&id='.$row[0]; ?>" method="POST">
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="cedula" value="<?php echo $row[1]; ?>" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="nombre" value="<?php echo $row[2]; ?>" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="apellido" value="<?php echo $row[3]; ?>" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="direccion" value="<?php echo $row[4]; ?>" required>
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" name="telefono" value="<?php echo $row[5]; ?>" required>
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="correo" value="<?php echo $row[6]; ?>" data-error="Bruh, that email address is invalid" required>
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											<div class="form-group">
											  <input type="password" value="<?php echo $row[7]; ?>" data-toggle="validator" data-minlength="6" class="form-control" name="password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
												<div class="form-group">
													<select class="form-control1" name="rol">
														<?php  
															$stmt = $rol->listarRoles();
															while ($row2 = $stmt->fetch()) {
																if($row[9] == $row2[0]){
																	echo "<option value=".$row2[0]." selected>".$row2[1]."</option>";
																}else{
																	echo "<option value=".$row2[0].">".$row2[1]."</option>";
																}
															}
														?>
													</select>
												</div>
												<div class="form-group">
													<select class="form-control1" name="estado">
														<?php 
															if ($row[8]=="ACTIVO") {
																echo "<option value='ACTIVO' selected>ACTIVO</option>";
																echo "<option value='INACTIVO'>INACTIVO</option>";
															}else{
																echo "<option value='INACTIVO' selected>INACTIVO</option>";
																echo "<option value='ACTIVO' >ACTIVO</option>";
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