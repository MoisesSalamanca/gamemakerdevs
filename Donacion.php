<?php 
session_start();
include './php/control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs | Haz Tu Donación</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker - Haz Tu Donación"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="index"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssDonacion.css"/>
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

	<div class="Contenedor_Encabezado_S83d">
		<div class="Contenedor_relativo_Sd">
			<div class="TextoResd">
			<div class="TextoResControlMargend">
			Haz Tu Donación
			</div>
			</div>
			<div class="Img_engr_00d"> <img src="./imagenes/billete_0.png"/></div>
			<div class="Img_engr_01d"> <img src="./imagenes/billete_0.png"/></div>
				<div class="Img_engr_02Kd">
				<div class="Img_engr_02d">
				<div class="Img_engr_02Cd">
			<img src="./imagenes/space-invader.png"/>
				</div>
				</div>
				</div>
		</div>
	</div>

	<div class="text_01">
	Los fondos recaudados en esta seccion se utilizaran para dirversas causas, entre las cuales tenemos los concursos
	el mantenimiento de los servidores establecimiento de dominio .com entre otras cosas, laskjdkljlksad dsnajklndklsa
	dskajldksjalkdjsadjiowdhjkahsdkj danjkdsakj dnakalnslkd ankalsnklda dsnam,zxcnm,zx asnm,dnasm,dsa cnm,zcjklasdjklas
	dsajkdlsjajeiqo weqjlkqej qwjeklqwjelkqw. dsanjkdsa djaskdhkasj dsajkdjaslkdjiwiq qwjkeljqwkl sadnkm,zxcjklas dsjakldqw ejklas
	dsajkdlsajkld qwejkljsalkdiozjxocizjxio sdnam,d mdslkmalk dlsos dmjie juegados dmaloqw eamsdoisajdiemq qjiwodjioasd asjkdl
	sdnsjakhkjd najksld qwueioasd klsda los jugadores no puedes dnjkas.
		</div>
		<!--===paypal==-->
		<div class="box-donacion"> 
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
	<input type="hidden" name="cmd" value="_s-xclick" target="_blank">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Pay-Pal">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		</div>
		<div class="margin_01"></div>
		<!--===end-paypal==-->
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