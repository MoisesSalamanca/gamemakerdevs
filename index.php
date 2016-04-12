<?php 
session_start();
include './php/control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="index"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/index.css"/>
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
		<img src="./imagenes/pt0.jpg" class="back_pr"/>
		<div class="_NumUsers"><span class="icon-globe"></span>&nbsp;Total De Usuarios:&nbsp;27</div> 
		<div class="_NumGames"><span class="icon-rocket"></span>&nbsp;Total De Proyectos:&nbsp;13</div> 
		<!--=====-->
			<div class="boletin_infe">De la Comunidad Gamemaker Para uso de la comunidad gamemaker El funcionamiento del sisitema es tal tal ta de la reputacion dependera el puesto al que 
			se someta la persona, los premios recibidos solamente podran ser asignados de parte de los administradores
			solamente las personas con proyectos publicados podran aparecer visibles junto con los demas desarrolladores,
			si notas alguna anomalía por favor haznolos saber reportando al usuario o proyecto sospechoso ghgkhgjgkjftftyjftftft.</div>

		<div class="_TOP_3"> 
			<span class="icon-star"></span>
		TOP 3
			<span class="icon-star"></span>
		</div>
			<div class="_Tumbl_Box">

		
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k2.jpg" class="backg"/> 
				<div id="boxe"> <div class="superST"><span class="icon-star"></span></div> </div>
				<div class="circles"><img src="./imagenes/pl.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Marco Antonio Velazques</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>

		<div class="box_space_c"></div>
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k3.png" class="backg"/>  
				<div id="boxe"> <div class="superST"><span class="icon-star"></span></div> </div>
				<div class="circles"><img src="./imagenes/ph.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Moisés Alx</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>
		
		<div class="box_space_c"></div>
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k2.jpg" class="backg"/> 
				<div id="boxe"> <div class="superST"><span class="icon-star"></span></div> </div>
				<div class="circles"><img src="./imagenes/po.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Santiago Etcheverri</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>

		</div><!--==Tumbl_Box===-->

		<div class="Sep09"> </div> 
			
			<div class="_Tumbl_Box_2">

		
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k2.jpg" class="backg"/>
				<div class="circles"><img src="./imagenes/pl.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Marco Antonio Velazques</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>

		<div class="box_space_c"></div>
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k3.png" class="backg"/>
				<div class="circles"><img src="./imagenes/ph.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Moisés Alx</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>
		
		<div class="box_space_c"></div>
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k2.jpg" class="backg"/>
				<div class="circles"><img src="./imagenes/po.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Santiago Etcheverri</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>
			
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k2.jpg" class="backg"/>
				<div class="circles"><img src="./imagenes/pl.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Marco Antonio Velazques</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>

		<div class="box_space_c"></div>
			<a href="#">
			<div class="_Tumbl">
			<img src="./imagenes/pt0.jpg" class="back_protect"/>
			<img src="./imagenes/k3.png" class="backg"/>
				<div class="circles"><img src="./imagenes/ph.jpg" class="image_circular" /></div>
			   <div class="_insade">
				<div class="box_name"><div class="inf_name">Moisés Alx</div></div>
				<div class="box_info"><div class="inf_gm"><span class="icon-star"></span> 22 Reputación</div>
				<div class="inf_rep"><span class="icon-game-controller"></span> 3 Proyectos</div>
				<div class="inf_pre"><span class="icon-trophy"></span> 2 Premios</div></div>
			   </div>
			</div>
			</a>

		</div>
	</div>
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