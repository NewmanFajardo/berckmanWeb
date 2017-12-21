<!-- footer -->
<footer style="margin-top: -10px;">
	<div class="w3ls-footer-grids">
		<div class="container">
			<div class="col-md-3 w3l-footer one">
                <?php foreach ($empresa as $empresas): ?>
					<h2><?= h($empresas->nombre) ?></h2>
                    <p><?= h($empresas->descripcion) ?></p>
                <?php endforeach; ?>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 w3l-footer agileinfo_footer_grid">
				<h3>Link y navegaci&oacute;n</h3>					
				<div class="nav-w3-l">
					<ul>
						<li><a href="index.html" >Inicio</a></li>
						<li><a href="#about" class="scroll" >Nosotros</a></li>
						<li><a href="#gallery" class="scroll" >Productos y servicios</a></li>
						<li><a href="#news" class="scroll" >Noticias</a></li>
						<li><a href="#contact" class="scroll" >Contactanos</a></li>
						<li><a href="#" class="scroll" >Descargas</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 w3l-footer two">
				<h3>Redes Sociales</h3>
				<ul>
					<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Dale me gusta Facebook</a></li>
					<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Siguenos en Twitter</a></li>
					<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Agreganos en Google Plus</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3l-footer three">
				<h3>Direcci&oacute;n</h3>
				<ul>
					<li><i class="fa fa-map-marker"></i>
	                <?php foreach ($empresa as $empresas): ?>
	                    <p><?= h($empresas->direccion) ?></p>
	                <?php endforeach; ?>
                <div class="clearfix"></div> </li>
					<li><i class="fa fa-phone"></i>
	                <?php foreach ($empresa as $empresas): ?>
	                    <p><?= h($empresas->telefono1." - ".$empresas->telefono2) ?></p>
	                <?php endforeach; ?>
					<div class="clearfix"></div> </li>
					<li><i class="fa fa-envelope-o"></i><a href="mailto:contacto@berckman.com">contacto@berckman.com</a> <div class="clearfix"></div></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="copy-right-grids">
		<div class="container">
			<div class="copy-left">
				<p class="footer-gd">© 2017 www.berckman.com todos los derechos reservados | diseñado por <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</footer>
<!-- //footer -->