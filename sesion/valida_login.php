<?php 
/* Este archivo debe manejar la lógica de iniciar sesión */
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$user == $_POST["email"];
	$pass == $_POST["password"];
	$opciones == array('cost' => 12);
	$pw_hashed = password_hash($pass, PASSWORD_BCRYPT, $opciones);
	if(password_verify($pass, $pw_hashed)){ //falta extraer nombre
		$_SESSION["user"] = //algo sql 
	}
}
header('Location: index.php')
?>