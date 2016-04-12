<?php 
if (isset($_SESSION['ESTADO'])){
if(basename(__FILE__)=="Iniciar.php"){echo"<script language='javascript'>window.location='./';</script>";}
if(basename(__FILE__)=="Registrar.php"){echo"<script language='javascript'>window.location='./';</script>";}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Game Maker Devs | Resgistrate</title>
	<link rel="Shortcut Icon" href="./favicon/favicon.ico">
	<meta charset="utf-8"/>
	<meta name="description" content="Desarrolladores De Game Maker - Haz Tu Donación"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="distribution" content="global"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="index"/>
	<link rel="stylesheet" href="./css/bodytemp.css"/>
	<link rel="stylesheet" href="./css/cssRegistrar.css"/>
	<link rel="stylesheet" href="./fonts/style.css"/> 
	<script defer src="https://code.jquery.com/jquery-1.12.3.js"></script>
	<script defer type="text/javascript" src="./js/js_FormuReg.js"></script>
	<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
<!--BODY-->
<div class="body_interior"> 
  <div class="shadow_inside"> 
	<div class="encabezado_"> 
		<a href="./index.php" class="Home"><div class="_Inicio"><span class="icon-home"></span></div> 
		<div class="_Titulo">Game Maker Devs</div></a>
		<a href="./Iniciar.php"><div class="_iniciar"><span class="icon-users"></span> Iniciar</div></a>
		<a href="./Registrar.php"><div class="_registrar"><span class="icon-user"></span> Registrar</div></a>
	</div> 

	<div class="Contenido_"> 
		<div class="margin_00"></div>

	<div class="Contenedor_Encabezado_S83R">

		<div class="Contenedor_relativo_SR">
		<img src="./imagenes/pt0.jpg" class="back_protectR"/>
			<div class="TextoResR">
			<div class="TextoResControlMargenR">
			Registrate
			</div>
			</div>
			<div class="Img_engr_00R"> <img src="./imagenes/reg_ico.png"/></div>
			<div class="Img_engr_01R"> <img src="./imagenes/reg_ico.png"/></div>

				<div class="Img_engr_02KR">
				<div class="Img_engr_02CR">
			<div class="Avatar_img">
			<div class="circles_R"><img src="./imagenes/icon-character.png" class="img-avatare"/></div>
			</div>
				</div>
				</div>
		</div>
	</div>
              
	<form method="POST" id="FORMULARIO-REGISTRO_R"> 

		<div class="Contenedor_flex_S012"><div class="textfezl3321">Nombre de Usuario:</div>
		<input type="text" maxlength="30" name="UserNameRR" id="UserNameRR" class="UserName">
		<div class="MistakeR01"><span class='icon-warning'></span></div>
		</div>

		<div class="Contenedor_flex_S012"><div class="textfezl3321">Contraseña:</div>
		<input type="password" maxlength="25" name="PasswordRR" id="PasswordRR" class="Password">
		<div class="MistakeR02"><span class='icon-warning'></span></div>
		</div>

		<div class="Contenedor_flex_S012"><div class="textfezl3321">Repita su contraseña:</div>
		<input type="password" maxlength="25" name="PasswordRepeatRR" id="PasswordRepeatRR" class="PasswordRepeat">
		<div class="MistakeR03"><span class='icon-warning'></span></div>
		</div>

		<!--<div class="Contenedor_flex_S012"><div id="resultado"></div></div>-->
		<div class="DivStatusPreLoad">
		<div class="BoxAnswer97"><div id="resultado"></div></div>
		<div class="born-load"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
		</div>
		<div class="born-loadPRE"><i class="fa fa-spinner"></i></div><!--precargarICON-->
		<div class="merger_av">Tu cuenta no sera visible hasta que publiques un proyecto.</div>

		<button class="C_buttoneR" id="btn_enviar">Registrarme</button>

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