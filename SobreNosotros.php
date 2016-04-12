<?php 
session_start();
include './php/control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs | Sobre Nosotros</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker - Haz Tu Donación"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="index"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssSobreNosotros.css"/>
	<link rel="stylesheet" href="./fonts/style.css"/> 
	<script defer type="text/javascript" src="./js/log-out.js"></script>
	<script defer src="https://code.jquery.com/jquery-1.12.3.js"></script>
</head>
<body>
<!--BODY-->
<div class="body_interior"> 
  <div class="shadow_inside"> 
	<div class="encabezado_"> 
		<a href="./index.php" class="Home"><div class="_Inicio"><span class="icon-home"></span></div> 
		<div class="_Titulo">Game Maker Devs</div></a>
		<a <?= $_SESSION['href_1'] ?> ><div <?= $_SESSION['claseV_0'] ?> ><span <?= $_SESSION['icon_0'] ?> ></span><?= $_SESSION['user'] ?></div></a>
		<a <?= $_SESSION['href_2'] ?> ><div <?= $_SESSION['claseV_1'] ?> ><span <?= $_SESSION['icon_1'] ?> ></span><?= $_SESSION['status'] ?></div></a>
	</div> 

	<div class="Contenido_"> 
		<div class="margin_00"></div>

	<div class="Contenedor_Encabezado_S83a">

		<div class="Contenedor_relativo_Sa">
		<img src="./imagenes/pt0.jpg" class="back_protectP"/>
			<div class="TextoResa">
			<div class="TextoResControlMargena">
			Sobre Nosotros
			</div>
			</div>
			<div class="Img_engr_00a"> <img src="./imagenes/facebook-42.png"/></div>
			<div class="Img_engr_01a"> <img src="./imagenes/facebook-42.png"/></div>
				<div class="Img_engr_02Ka">
				<div class="Img_engr_02a">
				<div class="Img_engr_02Ca">
			<img src="./imagenes/may-pokemon.jpg"/>
				</div>
				</div>
				</div>
		</div>
	</div>

	<div class="text_01_A">
	La Comunidad Gamemaker Latino America se creo en 2011 con un proposito no muy nulo, ya que nunca se penso que se
	llegaria a tantas personas llegarian a unirse con el tiempo, ahora el grupo cuenta con mas de 3,000 usuarios
	motivo por el cual esta pagina fue creada, para que las personas puedan subir sus proyectos, ya que al postearlos
	en el grupo de facebook algunos juegos muy buenos se van desapareciendo con tantas publicaciones que hacen en un dia
	aqui en la pagina tu podrás crear tu perfil de desarrollador y podras tener tus juegos subidos en la pagina para que
	las demas personas puedan ver tu contenido en orden, Se agradece que cualquier cosa extraña sea reportada con los botones 
	de "Reportar" que estarán ya sea en la parte del perfil de un usuario ó ya sea en la pagina de un juego en si.<br><br>
	Gracias a todos por su apoyo ya que sin ustedes la comunidad nunca huviera llegado a tantas personas!<br><br>
	Apoyemonos entre nosotros haciendo Feedback de los proyectos de otros desarrolladores!
		</div>
			<div class="foort493">
			<div class="dksja">Siguenos en nuestro grupo de Facebook:</div>
			<div class="newVect">
			<a href="#" class="contenct00192">
			<div class="triangle-left"></div>
			<div class="icofacebs87"><img src="./imagenes/icofac3.png"/></div>
			<div class="text8392">Game Maker Comunidad Latino Americana</div>
			<div class="triangle-right"></div>
			</a>
			</div>
			</div>
		<div class="margin_01"></div>
	</div><!--===Shadow==-->
	</div><!--===contenido==-->
 	<!--===PIE==-->
 	<div class="pre_footer_">

 	<a class="footer_links" href="./SobreNosotros.php"><div class="TK_0"><span class="icon-info"></span>&nbsp;Sobre Nosotros</div></a>
 		<div class="TK_P">|</div>
 	<a class="footer_links" href="./TerminosCondiciones.php"><div class="TK_1"><span class="icon-documents"></span>&nbsp;Términos y Condiciones</div></a>
 		<div class="TK_P">|</div>
 	<a class="footer_links" href="./Donacion.php"><div class="TK_2"><span class="icon-credit"></span>&nbsp;Haz Tu Donación</div></a>
 		<div class="TK_P">|</div>
 	<a class="footer_links" href="./Soporte.php"><div class="TK_3"><span class="icon-cog"></span>&nbsp;Soporte</div></a>
  </div> 

	<footer class="footer_">
	<img src="./imagenes/pt0.jpg" class="back_protectF"/>
	<script>
 	var f = new Date(); document.write("Game Maker Devs "+f.getFullYear()+""); 
    </script>
    </footer>
    
    </div>
    <!--=====-->
</body>
</html>