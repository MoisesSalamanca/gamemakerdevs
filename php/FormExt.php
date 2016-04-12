<?php 
$con=mysqli_connect("mysql.hostinger.es","u312370715_6666","Pokemontheme666","u312370715_6666");
$resultado=""; //Avisos de abajo de texto
$control_=false;
/* Si no existe la tabla crearla */
$db_selected = mysqli_select_db($con,'Usuarios_Registrados');
if (!$db_selected) {//Crear la tabla porque no existe

mysqli_query($con,"CREATE TABLE `Usuarios_Registrados` (
`id` int(100) NOT NULL AUTO_INCREMENT,
`user_name` varchar(20) NOT NULL,
`password` varchar(20) NOT NULL,
`strikes` varchar(20) NOT NULL,
`blocked` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
}
/* Filtrar los datos */
$username=addslashes(htmlspecialchars($_POST["UserNameRR"]));//datos obtenidos del formulario
$password=addslashes(htmlspecialchars($_POST["PasswordRR"]));//datos obtenidos del formulario
$password_repeat=addslashes(htmlspecialchars($_POST["PasswordRepeatRR"]));//datos obtenidos del formulario
//formatear para eliminar caracteres no deseados 
$username = trim($username);

$user_carpetap=$username; 
$user_carpetar = str_replace(" ", "-", $user_carpetap);
$search  = array('à', 'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý');
$replace = array('a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y');
$user_carpeta = str_replace($search,$replace, $user_carpetar);
$user_carpeta_=$user_carpeta;


$password = trim($password);
$password_repeat = trim($password_repeat);
 
$username_count=strlen($username);
$password_count=strlen($password);
//---------------------------------------------------------------------------------------------------------------
if (empty($username) and empty($password) and empty($password_repeat) ) //Si todos los campos estan vacios
{
	 $resultado ="<a>Llene los campos vacíos!</a>";
	 echo "<script>document.getElementById('UserNameRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	 echo "<script>$('.MistakeR03').css('display','inline-block');</script>";
}

if (($username) and empty($password) and empty($password_repeat) ) //Si hay un nombre de usuario y las otras estan vacias
{
	if ($username_count>=7)
	{
	 $resultado ="<a>Ingrese una contraseña!</a>";
	 echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	}
	else
	{
	 $resultado ="<a>Su nombre de usuario debe contener más de 6 caracteres!</a>";
	 echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	}
}

if (empty($username) and ($password) and empty($password_repeat) ) //Si hay una contraseña y las otras estan vacias
{
	if ($password_count>=5){
	 $resultado ="<a>Repita su contraseña!</a>";
	 echo "<script>document.getElementById('UserNameRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR03').css('display','inline-block');</script>";
	}
	else
	{
     $resultado ="<a>Su contraseña debe contener más de 4 caracteres!</a>";
	 echo "<script>document.getElementById('UserNameRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	}
}

if (empty($username) and empty($password) and ($password_repeat) ) //Si hay una Repeat contraseña y las otras estan vacias
{
	 $resultado ="<a>Llene los campos vacíos!</a>";
	 echo "<script>document.getElementById('UserNameRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	 echo "<script>$('.MistakeR03').css('display','inline-block');</script>";
}

if (($username) and ($password) and empty($password_repeat) ) //Si esta vacia la casilla passwordRepeat
{	
	 if ($username_count>=7 && $password_count>=5)
	 {
	 $resultado ="<a>Repita su contraseña!</a>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR03').css('display','inline-block');</script>";
	 }

	 if ($username_count<7)
	 {
	 $resultado ="<a>Su nombre de usuario debe contener más de 6 caracteres!</a>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	 }

	  if ($password_count<5)
	 {
	 $resultado ="<a>Su contraseña debe contener más de 4 caracteres!</a>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	 }
}

if (empty($username) and ($password) and ($password_repeat) ) //Si esta vacia la casilla username
{
	 if ($password_count>=5)
	 {
	 	if ($password==$password_repeat)
	 		 {//Si las contraseñas SI coinciden
			 $resultado ="<a>Ingrese un nombre de usuario!</a>";
	 		 echo "<script>document.getElementById('UserNameRR').value = '';</script>";
	 		 echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	 		 }
	 		 else
	 		 {
	 		 $resultado ="<a>Las contraseñas no coinciden!</a>";
	 		 echo "<script>document.getElementById('UserNameRR').value = '';</script>";
	 		 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 		 echo "<script>$('.MistakeR03').css('display','inline-block');</script>";
	 		 }
	 }

	 if ($password_count<5)
	 {
	 $resultado ="<a>Su contraseña debe contener más de 4 caracteres!</a>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	 }
}

if (($username) and empty($password) and ($password_repeat) ) //Si esta vacio la casilla password
{
	 if ($username_count>=7)
	 {
	 $resultado ="<a>Ingrese una contraseña!</a>";
	 echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	 }
	 else 
	 {
	 $resultado ="<a>Su nombre de usuario debe contener más de 6 caracteres!</a>";
	 echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	 echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	 echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	}

}

if (($username) and ($password) and ($password_repeat) ) //Si estan llenos todos los campos
{	 
	if ($username_count>=7)
	{
	//
	}
	else
	{
	$resultado ="<a>Su nombre de usuario debe contener más de 6 caracteres!</a>";
	echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
	}
	//--
	if ($password_count>=5)
	{
	//
	}
	else
	{
	$resultado ="<a>Su contraseña debe contener más de 4 caracteres!</a>";
	echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
	echo "<script>$('.MistakeR02').css('display','inline-block');</script>";
	}
	//---
	if (($password_count>=5) && ($username_count>=7))//si el passowrd y el usuario tienen lo necesario 
	{
		if ($password==$password_repeat) //si las contraseñas coinciden
		{//todo salio con exito
			$user_q  = mysqli_query($con,"SELECT * FROM Usuarios_Registrados WHERE user_name = '$username'");
			$tab     = mysqli_fetch_row($user_q); //almazeno en la variable $tab  los datos de username

			if ($tab)
			{//si el nombre de ususario existe entonces
			$resultado ="<a>Este nombre de usuario ya está en uso!</a>";
			echo "<script>$('.MistakeR01').css('display','inline-block');</script>";
		    }
			else
			{//Si el nombre de usuario está Disponible entonces seguir con el proceso!
			$control_=true;
			}
		}
		else
		{
		$resultado ="<a>Las contraseñas no coinciden!</a>";
		echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";
		echo "<script>$('.MistakeR03').css('display','inline-block');</script>";
		}
	}
}

if ($control_==true)//registrar usuario!
{
	mysqli_query($con,"INSERT into Usuarios_Registrados (user_name,password,strikes,blocked) values ('$username','$password','0','No')");

	echo "<script>document.getElementById('UserNameRR').value = '' ;</script>";
	echo "<script>document.getElementById('PasswordRR').value = '';</script>";
	echo "<script>document.getElementById('PasswordRepeatRR').value = '';</script>";

	$resultado ="<a>Registrado con éxito!</a>";
	//CREAR DIRECTORIO
	$user_q  = mysqli_query($con,"SELECT * FROM Usuarios_Registrados WHERE user_name = '$username'");
	$tab     = mysqli_fetch_row($user_q); //almazeno en la variable $tab  los datos de username

	if ($tab){
	$identificador 	= $tab[0];//leer mi id Ùnico
	$usuario 	= $tab[1];//leer username
	$My_DB="$user_carpeta_";
	mkdir("../Profile/$My_DB",0777,true);//creo una carpeta una base de datos virtual independiente
	
	//Escribir el archivo index.php para el perfil del usuario
	$Body0= "<?php";
	$Body1=  "";
	$Body2= "?>";

	$fp = fopen("../Profile/$My_DB/index.php", "w");

	fwrite($fp,$Body0);
	$write = fputs($fp, $c."\n");
	fwrite($fp,$Body1);
	$write = fputs($fp, $c."\n");
	fwrite($fp,$Body2);

	fclose($fp);

	session_start();
	$_SESSION['TEMP_USER']=$My_DB;//nombre de la carpeta de perfil
	$_SESSION['user']= $usuario ;
	$_SESSION['ESTADO']='yes';
				
	echo "<script> window.location='./' ;</script>";
		}
}
//---------------------------------------------------------------------------------------------------------------
echo $resultado;
//---------
mysqli_close($con);//ternimar coneccion
?>