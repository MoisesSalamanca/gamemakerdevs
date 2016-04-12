<?php 
session_start();
if (isset($_SESSION['ESTADO']))
{
	$TmpUser=$_SESSION['TEMP_USER'];
	
	$_SESSION['user']=" Mi Perfil";
	$_SESSION['status']=" Salir";
	$_SESSION['icon_0']="class='icon-game-controller'";
	$_SESSION['icon_1']="class='icon-log-out'";	
	$_SESSION['href_1']='href="./Profile/'.$TmpUser.'/"';
	$_SESSION['href_2']='href="javascript:void(0)" onclick="JsLogOut();"';
	$_SESSION['claseV_0']='class="_iniciarP"';
	$_SESSION['claseV_1']='class="_registrarP"';
$_SESSION['support_enlock']='
	<div class="Contenedor_flex_S023">
		<input type="text" name="Asunt" placeholder="Asunto"/></div>
	<div class="Contenedor_flex_S023">
		<textarea name="Mensaje_Supp"  placeholder="Mensaje"></textarea></div>

  	<div class="Contenedor_abajo_S023">
	<input type="checkbox" value="None" name="check" />
	<div class="Acepttermscond_0">
	Al enviar este mensaje acepto que el uso indevido de este servicio puede ocacionar la suspension termporal de la cuenta, acepto que este sericio solo sera usado para una duda skladjsklajdjklaklsklzxncn asndjskaleuiqwiewq.
	</div>
  	</div>

	 <a href="#" class="C_buttone">
	 <div class="sendtexts8">Enviar</div>
	 </a>
';

	if ($_SESSION['user']=="Moisès Alx")//Access Admin
		{

		}
		else
		{
		$_SESSION['Admin_Panel']='';
		}
		
}
else
{
	$_SESSION['user']=" Iniciar";//
	$_SESSION['status']=" Registrar";//
	$_SESSION['icon_0']="class='icon-users'";//
	$_SESSION['icon_1']="class='icon-add-user'";//
	$_SESSION['href_1']='href="./Iniciar.php" ';//
	$_SESSION['href_2']='href="./Registrar.php"';//
	$_SESSION['claseV_0']='class="_iniciar"';
	$_SESSION['claseV_1']='class="_registrar"';
$_SESSION['support_enlock']='
	<div class="SUPP-BLOCK">
	Servicio disponible solo para usuarios
	</div>'
;
	$_SESSION['Admin_Panel']='';
	session_destroy();
}
?>