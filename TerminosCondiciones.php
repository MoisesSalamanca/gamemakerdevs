<?php 
session_start();
include './php/control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs | Términos y Condiciones</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker - Haz Tu Donación"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="index"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssTerminosCondiciones.css"/>
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

	<div class="Contenedor_Encabezado_S83t">
		<div class="Contenedor_relativo_St">
			<div class="TextoRest">
			<div class="TextoResControlMargent">
			Términos y Condiciones
			</div>
			</div>
			<div class="Img_engr_00t"> <img src="./imagenes/hoja_papel.png"/></div>
			<div class="Img_engr_01t"> <img src="./imagenes/hoja_papel.png"/></div>
				<div class="Img_engr_02Kt">
				<div class="Img_engr_02t">
				<div class="Img_engr_02Ct">
			<img src="./imagenes/Sergio_Logo.jpg"/>
				</div>
				</div>
				</div>
		</div>
	</div>

		<div class="text_01_B">
		-Todo aquel usuario que reporte a los demas usuario sin motivo coherente sera multado con una llamada de atención, a las
		3 llamadas de atención la cuenta se le suspenderá por 30 días y a la 4 su cuenta, datos y proyectos seran
		eliminados.<br><br>
		-Solamente las personas con proyectos podrán aparecer en la pagina principal de desarrolladores.<br><br>
		-La mecánica de los puestos es la siguiente: entre mas "Reputación" tenga un usuario su puesto irá subiendo.<br><br>
		-Si se nota alguna anomalía con respecto a la "Reputación" de un proyecto, este será exonerado de toda la Reputación del mismo.<br><br>
		-Los premios solamente podrán ser obtenido por parte de los administradores, ellos se encargarán de analizar
		tu juego y ver si merece tener algún reconocimiento en cualquier aspecto.<br><br>
		-Cualquier comentario u reseña "No constructivo" ó "Insultante" podrá ser reportado y si se verifica que ese es el caso, se le pondrá una llamada de atención al usuario agresor.<br><br>
		-Si quieres eliminar tu cuenta puedes ir a tu perfil y hasta abajo abrá una opción llamada "Eliminar mi cuenta".<br><br>
		-Cualquier imagen obscena, pornográfica ó racista tendrá que ser reportada.<br><br>
		-Si quieres añadir algun otro "Término u Condición" ve a la sección de Soporte, y escribenos.<br><br>
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