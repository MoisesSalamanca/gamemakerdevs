<?php 
if (isset($_SESSION['ESTADO'])){
if(basename(__FILE__)=="Iniciar.php"){echo"<script language='javascript'>window.location='./';</script>";}
if(basename(__FILE__)=="Registrar.php"){echo"<script language='javascript'>window.location='./';</script>";}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs | Inicia Sesión</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="index"/>
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssIniciar.css"/>
	<link rel="stylesheet" href="./fonts/style.css"/> 
	<script defer src="https://code.jquery.com/jquery-1.12.3.js"></script>
	<script defer type="text/javascript" src="./js/formin.js"></script>
	<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<!--BODY-->
<div class="body_interior"> 
  <div class="shadow_inside"> 
	<div class="encabezado_"> 
		<a href="./index.php" class="Home"><div class="_Inicio"><span class="icon-home"></span></div> 
		<div class="_Titulo">Game Maker Devs</div></a>
		<a href="./Iniciar.php"><div class="_iniciar"><span class="icon-users"></span>&nbsp;Iniciar</div></a>
		<a href="./Registrar.php"><div class="_registrar"><span class="icon-user"></span>&nbsp;Registrar</div></a>
	</div> 

	<div class="Contenido_"> 
		<div class="margin_00"></div>

	<div class="Contenedor_Encabezado_S83I">

		<div class="Contenedor_relativo_SI">
		<img src="./imagenes/pt0.jpg" class="back_protectI"/>
			<div class="TextoResI">
			<div class="TextoResControlMargenI">
			Iniciar
			</div>
			</div>
			<div class="Img_engr_00I"> <img src="./imagenes/icon-usero.png"/></div>
			<div class="Img_engr_01I"> <img src="./imagenes/icon-usero.png"/></div>
		</div>
	</div>

<form method="post" id="log-pash"> 
	<div class="Contenedor_flex_S012I">

	<div class="textfezl383">Nombre de Usuario:</div>
	<input type="text" maxlength="30" name="myUserN" id="myUserN" class="classNameI">
	<div class="MistakI1"><span class='icon-warning'></span></div>

		<div class="irvinMargin"></div>

	<div class="textfezl383">Contraseña:</div>
	<input type="password" maxlength="25" name="myPassN" id="myPassN" class="classpssw">
	<div class="MistakI2"><span class='icon-warning'></span></div>

	<div class="check7" id="cheto33" name="cheto33">
		<input type="checkbox" class="chekte3" name="checkpe9" id="checkpe9" value="">&nbsp;Recordarme<br>
	</div>

	<div class="DivStatusPreLoadI">
		<div class="BoxAnswer97I"><div id="resultado"></div></div>
		<div class="born-loadI"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
	</div>

	<button class="C_buttoneI" id="log-hast">Registrarme</button>
<div class="born-loadPREI"><i class="fa fa-spinner"></i></div><!--precargarICON-->
	</div>
</form>

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