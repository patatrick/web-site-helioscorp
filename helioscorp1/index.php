<?php
include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Helioscorp Chile SPA</title>
	<?php
	include 'head.html';
	?>

</head>

<body >
	<nav class="navbar navbar-expand-md navbar-light fixed-top py-0" style="background-color: #E9E9E9;opacity: .95;">
		<a class="navbar-brand" href="#">
			<span style="color: #666;font-weight: bold;">HELIOSCORP</span>
			<img src="assets/multimedia/images/logo-helios3.svg" height="" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#" onclick="location.reload()">Principal <span class="sr-only">(current)</span></a>
				</li>
				<!-- 	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Propiedades
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown"></div>
	      </li> -->
				<li class="nav-item">
					<a class="nav-link" href="#servicios">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">Acerca de Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contacto">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="contenedor parallax p1" data-stellar-background-ratio="3">
		<div class="" id="particles-js" style="min-height:300px;"></div>
		<div class="texto-encima"></div>
		<div id="slogan">
			<h1>CIENCIA Y TECNOLOGÍA</h1>
			<h6>WE ARE THE CHANGE</h6>
		</div>
		<!-- 		<div class="tri"style="position: absolute;bottom:-1px;opacity:1;background-image: url('assets/multimedia/images/back.png'); background-repeat: repeat;width: 50%"></div> -->
		<img src="assets/multimedia/images/ejemplo_3.svg" width="100%" style="position: absolute;bottom:-1px;transform: rotateY(180deg);">
	</div>
	<!-- 	<div class="division mb-5">
		<img src="assets/multimedia/images/watch.gif" class="gif mb-3">
		<h4 class="text-center text-sm-left w-100" style="background-color: #DFE0DF">SERVICIOS</h4>
		<div></div>
	</div> -->
	<div class="container-fluid" style="background-color: white">
		<div class="row" id="servicios">
			<div class="col-12 mt-4">
				<h2 class="w-100 d-block text-center my-3">SERVICIOS</h2>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 col-lg-8 text-center mx-auto">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-12" id="servicios">
				<ul id="hexGrid">
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/tecnologia.jpg" alt="" />
								<h2>TECNOLOGÍA</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/ia.jpg" alt="" />
								<h2>INTELIGENCIA ARTIFICIAL</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/electronica.jpg" alt="" />
								<h2>ELECTRÓNICA AVANZADA</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/software.jpg" alt="" />
								<h2>SOFTWARE</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/redes.jpg" alt="" />
								<h2>REDES SOCIALES</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/HTML5.jpg" alt="" />
								<h2>SITIOS WEB</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
					<li class="hex">
						<div class="hexIn">
							<a class="hexLink" href="#">
								<img src="assets/multimedia/images/app.jpg" alt="" />
								<h2>APLICACIONES</h2>
								<!-- <p>Ver Más</p> -->
							</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- 			<div class="col-12 col-md-6 text-center">
				<img src="assets/multimedia/images/luna.png" style="max-width: 300px; width: 100%;" />
			</div>
			<div class="col-12 col-md-6 text-center">
				<div class="card border-info my-3 ml-auto card_gif" style="max-width: 500px;">
				  <div class="card-header text-info">Header</div>
				  <div class="card-body text-info">
				    <h5 class="card-title">Info card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div> -->
		</div>
	</div>
	<img src="assets/multimedia/images/ejemplo_4.svg" width="100%" style="position: relative;bottom:-5px;">
	<div class="container-fluid pt-5 pt-5 px-0 noticias">
		<div class="row">
			<div class="col-12 mb-5">
				<img id="img_sun" src="./assets/multimedia/images/sun.png" alt="sun">
				<h2 class="text-white w-100 d-block text-center" style="clear: both;float:none;">NOTICIAS</h2>
				<h4 class="text-white w-100 d-block text-center" style="font-weight: 300">Sala de Prensa y Redes Sociales</h4>
				<p class="text-center my-5">
					En esta sección daremos a conocer nuestros boletines informativos.
				</p>
			</div>
		</div>
		<div class="container">
			<!-- <div class="card-deck">
				<div class="card">
					<img src="assets/multimedia/images/imagen.png" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img src="assets/multimedia/images/imagen.png" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
			<div class="card-deck">
				<div class="card">
					<img src="assets/multimedia/images/imagen.png" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img src="assets/multimedia/images/imagen.png" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div> -->
		</div>
		<div style="    background-image: url(assets/multimedia/images/ejemplo_5.svg);
    transform: rotateY(
180deg
) rotateX(
45deg
);
    height: 250px;
    background-repeat: no-repeat;
    position: relative;
    bottom: -37px;"></div>
	</div>
	<div id="about" class="container-fluid py-5" style="background-image: url('assets/multimedia/images/ej1.png');background-repeat: no-repeat;background-position: left top;background-color: #9f9f9f;">
		<div class="row">
			<div class="col-12 mb-5" style="margin-bottom: 100px !important">
				<h2>HELIOSCORP</h2>
				<h3 class="w-100 text-sm-right text-center mt-2">NUESTRA MISIÓN</h3>
				<h6 class="w-100 text-right" style="font-weight: 500">Y RESPONSABILIDAD SOCIAL</h6>
				<div class="row">
					<div class="col-md-6 col-12 ml-auto">
						<div class="card my-3" style="background-color: transparent;">
							<div class="card-body">
								<p class="card-text" style="color: snow;">
									La ciencia y la tecnología es nuestro camino. Nuestro objetivo es
									transformar la sociedad desde nuestro lugar, crear espacios más aptos para la vida
									humana y animal, fortelecer la institución y a las personas en su conjunto, proteger
									los intereses de nuestros clientes, su salud, su vida y sus objetos patrimoniales con
									nuestras aplicaciones y softwares.
								</p>
								<p class="card-text" style="color: snow;">
									Helioscorp nace en Chile el 04/04/2020 en medio de la pandemia del Sars Cov 2 2019, por lo que todos nuestros planes comerciales se vieron interrumpidos por la misma, pero entendemos que este proceso fue necesario para crecer en conocimiento y estructuras, así como objetivos y planes comerciales, la empresa está estructurada como una plataforma central y con alcances gracias a sus asociados regionales los cuales son la representación comercial, local de la misma y responden directamente a la organización que formamos todos los que componemos Helioscorp.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 text-center">
				<img src="assets/multimedia/images/watch.gif" class="gif mb-3">
			</div>
		</div>
	</div>

	<div class="container-fluid" style="background-image:url(assets/multimedia/images/texture.png);">
		<div class="tri"></div>
		<div class="row" id="contacto">
			<div class="col-12 text-center my-5 mx-auto w-100" style="max-width: 630px;">
				<img src="assets/multimedia/images/arrow-left.svg" style="width: 50px;float: left;margin-top: 50px" />
				<img src="assets/multimedia/images/arrow-right.svg" style="width: 50px;float: right;margin-top: 50px" />
				<h2 class="mx-auto" style="color: snow;">CONTÁCTANOS</h2>
			</div>
		</div>
		<div class="container" style="margin-top: 80px">
			<div class="row contact">
				<form class="col-12 col-md-6 form-group">
					<div class="row" id="eclipse">
						<div class="col-5">
							<i id="izq" class="fas fa-sun"></i>
						</div>
						<div class="col-2 text-center">
							<i onclick="Animar()" id="globo" class="fas fa-globe-americas"></i>
						</div>
						<div class="col-5">
							<i class="fas fa-circle" id="der"></i>
						</div>
					</div>
					<label style="display: none;">Nombre completo
						<input type="text" name="nombre" class="form-control" maxlength="50" required />
					</label>
					<label style="display: none;">Email
						<input type="email" name="email" class="form-control" maxlength="50" required />
					</label>
					<label style="display: none;">Motivo
						<textarea name="motivo" class="form-control" maxlength="500" required style="height: 250px;resize: none;"></textarea>
					</label>
					<label style="display: none;" class="col-12 px-0 text-right">
						<input type="submit" class="btn" />
					</label>
				</form>
				<div class="col-12 col-md-6 my-auto ml-md-auto contact2">
					<div class="row mt-5 mt-md-0">
						<div class="col-2"><i class="far fa-envelope"></i></div>
						<label class="col-10">
							<a href="mailto:contacto@helioscorp.org">contacto@helioscorp.org</a>
						</label>
					</div>
					<div class="row social">
						<div class="col-12 mt-4 pt-2">
							<!-- <i class="fab fa-facebook m-1"></i> -->
							<a href="https://instagram.com/helioscorpchilespa" target="_BLANK"><i class="fab fa-instagram m-1"></i></a>
							<a href="https://twitter.com/helioscorpspa" target="_BLANK">
								<i class="fab fa-twitter m-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<small class="col-12 text-center pb-5 pt-3" style="color:#9F9F9F">
				<i class="far fa-copyright"></i> Helioscorp All rights reserved.
			</small>
		</div>
	</div>
	<!-- <section>
		<p>
			EL FIN DEL MIEDO
		</p>
		<p>
			<span id="days"></span> días / <span id="hours"></span> horas / <span id="minutes"></span> minutos / <span id="seconds"></span> segundos
		</p>
	</section> -->
	<script src="assets/js/particles.js"></script>
	<script src="assets/js/particulas.js"></script>
	<script src="assets/js/stellar.js"></script>
	<script src="assets/js/index.js"></script>
</body>

</html>