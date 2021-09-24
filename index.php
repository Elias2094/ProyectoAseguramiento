<?php

$alert = '';
session_start();
if (!empty($_SESSION['active']))
{
    header('location: sistema/');
}else{

if(!empty($_POST))
{
	if (empty($_POST['usuario']) || empty($_POST['clave']))
	{
           $alert = "ingrese su usuario y clave";
    }else{
	
	    require_once "conexion.php";

		$user = mysqli_real_escape_string ($conection,$_POST['usuario']);
		$pass = md5(mysqli_real_escape_string ($conection,$_POST['clave']));

		$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
		 mysqli_close($conection);
	    $result = mysqli_num_rows($query); 

		if($result > 0)
		{
			$data = mysqli_fetch_array ($query);
             $_SESSION['active'] = true;    
              $_SESSION['idUser'] = $data['idusuario'];    
              $_SESSION['nombre'] = $data['nombre'];  
              $_SESSION['email'] = $data['correo'];    
              $_SESSION['user'] = $data['usuario'];
              $_SESSION['rol'] = $data['rol']; 
    
            header('location: sistema/');
        }else {
            $alert = 'el usuario o la clave son incorrectos';
            session_destroy();
            
        }
        
	}

 }
}

?>

<!DOCTYPE html>
<html lang ="es">
<head>	
	
	<meta charset="UTF-8">
	<TITLE>Login  Sistema</TITLE>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<body>
	
	<section id="container">


		<form action ="" method="post"> 

		 
		<h3>Inicio de sesion</h3>
		<img src="img/uno.jpg">
		 

		<input type="text" name="usuario" placeholder="Usuario">
		<input type="password" name="clave" placeholder="contraseña">
		<div class="alert"><?php echo isset($alert) ? $alert: ''; ?></div>
		<input type="submit" value="INGRESO">
		</form>

	</section>
</body>
</html>


