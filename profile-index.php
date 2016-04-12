<?php 
session_start();
include './php/control.php';
?>

<!DOCTYPE html>
<html lang="es">
<head> 
	<title>Game Maker Devs | Perfil</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="index"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssPerfil.css"/>
	<link rel="stylesheet" href="./fonts/style.css"/> 
	<script defer type="text/javascript" src="./js/log-out.js"></script>
	<script defer src="https://code.jquery.com/jquery-1.12.3.js"></script>
	<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
		<div class="margin_00LS"></div>

		<div class="boxProfile">

			<!--Circulo&Demas-->
		 	<div class="CircleProfile">
				<div class="CP_Link1"> <span class="icon-youtube"></span> </div>
				<div class="CP_Link2"> <span class="icon-twitter"></span> </div>
				<div class="CP_Link3"> <span class="icon-link"></span> </div>
				<div class="CP_gener"></div>
			</div>
			<!---->

			<!--Informacion-->
		 	<div class="InfProfileFolio">
				<div class="IPF_inf">Nombre:&nbsp;</div><div class="sobremi">Moisés Salamanca</div>
				<div class="IPF_margen"></div>
				<div class="IPF_inf">Edad:&nbsp;</div><div class="sobremi">18 Años</div>
				<div class="IPF_margen"></div>
				<div class="IPF_inf">País:&nbsp;</div><div class="sobremi">Guatemala</div>
				<div class="IPF_margen"></div>
				<div class="IPF_inf">GM:&nbsp;</div><div class="sobremi">Gamemaker 8/Gamemaker 8.1/GMS</div>
				<div class="IPF_margen"></div>
				<div class="IPF_inf">Plataforma:&nbsp;</div><div class="sobremi">Windows/Andorid/Mac/Xbox/Linux</div>
				<div class="IPF_margen"></div>
				<div class="IPF_inf">Sobre Mí:&nbsp;</div> 
				<div class="sobremi">Dejar solo para 240 letras como estasn dksdjk asjkdsa hoy les vengo a trer
				as dklaskl dkl hola muchahos hola muchahchas como estan no te quiero ver jamas jajajaj 
				ndm,sanm, ndsajkla djkslad dsakjlk dsjakljdlkas</div>
			</div>
			<!---->
			<!--Notificaciones-->
			<div class="NP_Merger">
				<div class="NP_Msg"> <span class="icon-mail"></span> </div>
				<div class="NP_Web"> <span class="icon-globe"></span> </div>
				<div class="NP_Report"> <span class="icon-warning"></span> </div>
			</div>
			<!---->
		</div><!--Fin de los elementos delacaja usuario-->

		<div class="ProyectBox"><!--proyecto-->
				<div class="PBTxt">
				Proyectos
				</div>

				<div class="PBpublicP">
					<div class="PBPcss">
					<span class="icon-upload-to-cloud"></span>
					&nbsp;Publicar un proyecto
					</div>
				</div>
		</div><!---->

		<div class="ProyectoContenido"><!--proyecto-->

			<div class="FolioVacio">
			<div class="FV">No hay proyectos que mostrar</div>
			</div>

		</div><!---->

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