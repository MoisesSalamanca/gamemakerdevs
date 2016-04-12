<?php 
$con=mysqli_connect("mysql.hostinger.es","u312370715_6666","Pokemontheme666","u312370715_6666");
$resultado="";
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
$username=addslashes(htmlspecialchars($_POST["myUserN"]));//datos obtenidos del formulario
$password=addslashes(htmlspecialchars($_POST["myPassN"]));//datos obtenidos del formulario
//formatear para eliminar caracteres no deseados
$username = trim($username);
$password = trim($password);
//proceso
if (empty($username) and empty($password)){
											$resultado ="<a>Llene los campos vacíos!</a>";
											echo "<script>document.getElementById('myUserN').value = '';</script>";
											echo "<script>document.getElementById('myPassN').value = '';</script>";
											echo "<script>$('.MistakI1').css('display','inline-block');</script>";
											echo "<script>$('.MistakI2').css('display','inline-block');</script>";
										  }
if (empty($username) and ($password)){
											$resultado ="<a>Ingrese su nombre de usuario!</a>";
											echo "<script>document.getElementById('myUserN').value = '';</script>";
											echo "<script>$('.MistakI1').css('display','inline-block');</script>";
										  }
if (($username) and empty($password)){
											$resultado ="<a>Ingrese su contraseña!</a>";
											echo "<script>document.getElementById('myPassN').value = '';</script>";
											echo "<script>$('.MistakI2').css('display','inline-block');</script>";
										  }
if (($username) and ($password)){
											$control_=true;
										  }

if($control_==true){
$user_q  = mysqli_query($con,"SELECT * FROM Usuarios_Registrados WHERE user_name = '$username'");
$tab     = mysqli_fetch_row($user_q); //almazeno en la variable $tab  los datos de username

if ($tab){//si el nombre de ususario existe entonces

			$identificador 	= "".$tab[0]."";//save id
			$usuario 		= "".$tab[1]."";//save user
			$respuesta 		= "".$tab[2]."";//save password 
			$blocked 		= "".$tab[4]."";//locked
			if ($password==$respuesta){//si mi password es correcto

				if ($blocked=="yes")//Si la cuenta a sido suspendida
					{
					echo "<script>document.getElementById('myUserN').value = '';</script>";//borrar campos
				    echo "<script>document.getElementById('myPassN').value = '';</script>";//borrar campos
					$resultado="$usuario, Su cuenta a sido suspendida 30 días por mal uso.";//mensaje
					}
					else
					{//Si la cuenta esta en buen estado
				$resultado ="<a>Bienvenido! $username</a>";
				echo "<script>document.getElementById('myUserN').value = '';</script>";
				echo "<script>document.getElementById('myPassN').value = '';</script>";
				session_start();
				$_SESSION['user']= $usuario ;
				$_SESSION['ESTADO']='yes';

				if(!isset($_POST['checkpe9'])){//CHECK BOX
					//NO esta seleccionado


				}else{
					//SI esta seleciondato


				}
				/*if ($checked)///si esta activado el checqyesito
				{
					echo "<script>alert('No Mames Zorra');</script>";
				}*/

$user_carpetap=$usuario;
$user_carpetar = str_replace(" ", "-", $user_carpetap);
$search  = array('à', 'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý');
$replace = array('a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y');
$user_carpeta = str_replace($search,$replace, $user_carpetar);
$user_carpeta_=$user_carpeta;

			$My_DB=$user_carpeta_;

           	$_SESSION['TEMP_USER']=$My_DB;//usuario en la carpeta profile url amigable es 

			echo "<script language='javascript'> window.location='./';</script>";
					}
			}	

			if (!($password==$respuesta)){//si mi password es incorrecto
				$resultado ="<a>La contraseña es incorrecta!</a>";
				echo "<script>document.getElementById('myPassN').value = '';</script>";
				echo "<script>$('.MistakI2').css('display','inline-block');</script>";
										 }
		}

			if (!$tab){
		  $resultado ="<a>Este usuario no existe!</a>";
		  echo "<script>document.getElementById('myUserN').value = '';</script>";
   		  echo "<script>document.getElementById('myPassN').value = '';</script>";
		  }

}

// echo "<script>alert('No Mames');</script>";
echo $resultado;
mysqli_close($con);//ternimar coneccion
?>