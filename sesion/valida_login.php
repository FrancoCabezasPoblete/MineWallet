<?php 
/* Este archivo debe manejar la lógica de iniciar sesión */
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';
	$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	$pass = $_POST["password"];
	$opciones = array('cost' => 12);
	$pw_hashed = password_hash($pass, PASSWORD_BCRYPT, $opciones);
	if(isset($user) || isset($pass)){
		$sql = pg_query(
			"SELECT * FROM usuario WHERE correo = '".$email."' AND contraseña = '".$pw_hashed."';"
		);
		if(pg_num_rows($sql) < 1) {
			echo 'Inicio de sesión erroneo, no existe usuario con correo '.$email;
		} elseif(pg_num_rows($sql) > 1) {
			echo 'Inicio de sesión erroneo, existe más de un usuario con correo '.$email;
		} else {
			$arr = pg_fetch_array($sql);
			if($arr["admin"]){ // TRUE: es admin
				$_SESSION["admin"] = TRUE;
			} else { // FALSE: es usuario
				$_SESSION["usuario"] = TRUE;
			}
			$_SESSION["nombre"] = $arr["nombre"];
			$_SESSION["apellido"] = $arr["apellido"];
			$_SESSION["correo"] = $arr["correo"];
			$_SESSION["pais"] = $arr["pais"];
			$_SESSION["fecha_registro"] = $arr["fecha_registro"];
			echo 'Inicio de sesión exitoso';
			header('Location:/index.html');
		}
	} 
}

?>