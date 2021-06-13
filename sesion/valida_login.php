<?php 
/* Este archivo debe manejar la lógica de iniciar sesión */
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email == $_POST["email"];
	$pass == $_POST["password"];
	$opciones == array('cost' => 12);
	$pw_hashed = password_hash($pass, PASSWORD_BCRYPT, $opciones);
	if(isset($user) || isset($password)){
		session_start();
		$sql = pg_query(
			"SELECT * FROM usuario WHERE correo = '$email' AND contraseña = '$pw_hashed';"
		);
		if(pg_num_rows($sql) < 1) {
			echo "Inicio de sesión erroneo, no existe usuario con correo '$email'";
		} elseif(pg_num_rows($sql) > 1) {
			echo "Inicio de sesión erroneo, existe más de un usuario con correo '$email'";
		} else {
			$arr = pg_fetch_array($sql);
			$_SESSION["usuario"] = $arr["nombre"];
			$_SESSION["email"]= $arr["correo"];
			echo 'Inicio de sesión exitoso';
			header('Location:index.html');
		}
	} 
}

?>