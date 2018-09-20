	
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
					<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
									 <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
									 <li id="menu-academico" ><a href="#"><i class="fa fa-user"></i> <span>Cuenta</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul id="menu-academico-sub" >
									   <li id="menu-academico-avaliacoes" >
									   		<a href="<?php echo 'index.php?page=usuario&funcion=perfil&step=1&id='.$_SESSION["id"] ?>" >Perfil</a>
									   </li>
										<li id="menu-academico-avaliacoes" ><a href="index.php?page=usuario&funcion=logout&step=2">Log Out</a></li>
									  </ul>
									</li>
									  <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Usuarios</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul id="menu-academico-sub" >
									   <li id="menu-academico-avaliacoes" ><a href="index.php?page=usuario&funcion=listar&step=1">Lista Usuarios</a></li>
										<li id="menu-academico-avaliacoes" ><a href="index.php?page=usuario&funcion=registro&step=1">Registrar Usuario</a></li>
									  </ul>
									</li>
									<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Producción</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul id="menu-academico-sub" >
									   <li id="menu-academico-avaliacoes" ><a href="index.php?page=pDiaria&funcion=listar&step=1">Diaria</a></li>
										<li id="menu-academico-avaliacoes" ><a href="index.php?page=pClasificacion&funcion=listar&step=1">Clasificacion</a></li>
										<li id="menu-academico-avaliacoes" ><a href="index.php?page=pRegistro&funcion=listar&step=1">Registro</a></li>
									  </ul>
									</li>
									 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Lotes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul id="menu-academico-sub" >
									   <li id="menu-academico-avaliacoes" ><a href="index.php?page=lote&funcion=listar&step=1">Lista Lote</a></li>
										<li id="menu-academico-avaliacoes" ><a href="index.php?page=lote&funcion=registro&step=1">Registrar Lote</a></li>
									  </ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<!-- /real-time -->
		   <script src="assets/js/menu_jquery.js"></script>
		   <!--js -->
			<script src="assets/js/jquery.nicescroll.js"></script>
			<script src="assets/js/scripts.js"></script>
			<!-- Bootstrap Core JavaScript -->
			   <script src="assets/js/bootstrap.min.js"></script>
			   <!-- /Bootstrap Core JavaScript -->
			   <!-- real-time -->
			<script language="javascript" type="text/javascript" src="assets/js/jquery.flot.js"></script>
</body>
</html>