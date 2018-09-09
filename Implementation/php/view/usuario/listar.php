<?php 
	require_once 'controller/RolController.php';
	require_once 'controller/UsuarioController.php';
	$rol = new RolController();
	$usuario = new UsuarioController();
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
										<h3>Listar:</h3>
									</div>
									<div class="table-responsive">
										<table class="table">
										  <thead class="thead-dark">
										    <tr>
										      <th scope="col">Cedula</th>
										      <th scope="col">Nombre</th>
										      <th scope="col">Apellido</th>
										      <th scope="col">Direccion</th>
										      <th scope="col">Telefono</th>
										      <th scope="col">Correo</th>
										      <th scope="col">Password</th>
										      <th scope="col">Rol</th>
										      <th scope="col">Estado</th>
										      <th scope="col">Accion</th>
										    </tr>
										  </thead>
										  <tbody>
										  	<?php  
										  		$stmt = $usuario->listarUsuarios();
												while ($row = $stmt->fetch()) { ?>
										    <tr>
										      <th scope="row"><?php echo $row[1]?></th>
										      <td><?php echo $row[2] ?></td>
										      <td><?php echo $row[3] ?></td>
										      <td><?php echo $row[4] ?></td>
										      <td><?php echo $row[5] ?></td>
										      <td><?php echo $row[6] ?></td>
										      <td><?php echo $row[7] ?></td>
										      <td>
										      	<?php 
										      		$result = $rol->buscarRol($row[9])->fetch(PDO::FETCH_BOTH);
										      		echo $result[1];
										      	?>
										      </td>
										      <td><?php echo $row[8] ?></td>
										      <td>
												   <input type="button" class="btn btn-danger" value="Editar" onclick="location.href = 'index.php?page=usuario&funcion=editar&step=1&id=<?php echo $row[0]?>';">
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