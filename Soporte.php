<?php 
session_start();
include './php/control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs | Soporte</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker - Haz Tu Donación"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="index"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssSoporte.css"/>
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

	<div class="Contenedor_Encabezado_S83">
		<div class="Contenedor_relativo_S">
			<div class="TextoRes">
			<div class="TextoResControlMargen">
			Soporte
			</div>
			</div>
			<div class="Img_engr_00"> <img src="./imagenes/fafa.png"/></div>
			<div class="Img_engr_01"> <img src="./imagenes/fafa.png"/></div>
				<div class="Img_engr_02K">
				<div class="Img_engr_02">
				<div class="Img_engr_02C">
				<img src="./imagenes/gear.png"/>
				</div>
				</div>
				</div>
		</div>
	</div>

	<?= $_SESSION['support_enlock'] ?>

	<div class="Referenfs">
	  <div class="Ref_Admins">Administradores:<div class="s870"><br>
	 	<a href="#" class="M02">Marckus Antonio</a><br>
	 	<a href="#" class="M02">Sergio Salazar</a><br>
	 	<a href="#" class="M02">Byron Padilla</a><br>
	 	<a href="#" class="M02">Arturo Marquez</a>
	 	</div>
	  </div>

	 <div class="Ref_Moders">Moderadores:<div class="s870"><br>
	 <a href="#" class="M02">Lind L. Taylor</a><br>
	 <a href="#" class="M02">Ramiro Jucarave</a><br>
	 <a href="#" class="M02">Ramiro Jucarave</a><br>
	 <a href="#" class="M02">Ramiro Jucarave</a><br>
	 <a href="#" class="M02">Santiago Etcheverry</a><br>
	 <a href="#" class="M02">Victor Antonio</a>
	 </div>
	 </div>

	 <div class="Ref_Creador">Creador Del Sitio:<div class="s870"><br>
	 <a href="#" class="M02">Moisés Salamanca</a></div>
	 </div>
	 </div>


		<div class="margin_01"></div>
	</div><!--===Contenido==-->
  </div><!--===Shadow==-->
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
    
</div><!--===Body_Interior==-->
    <!--=====-->
</body>
</html>