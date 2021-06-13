<?php 
/* Este archivo debe manejar la lógica de iniciar sesión */
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';
	$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	$pass = $_POST["password"];
	if(isset($email) && isset($pass)){
		$sql = pg_query(
			"SELECT * FROM usuario WHERE correo = '".$email."';"
		);
		include '../include/header.html';
		if(pg_num_rows($sql) < 1) {
			echo '<div class="container-fluid mt-3">
					<div class="row justify-content-md-center">
						<div class="col-4">
							<div class="alert alert-danger" role="alert">
								<h4 class="alert-heading">Error al iniciar sesión</h4>
								<p> Inicio de sesión erroneo, no existe usuario con correo '.$email.' </p>
								<hr>
								<p class="mb-0"> Será redireccionado en 5 segundos </p>
							</div>
						</div>
					</div>
				</div>';
		} elseif(pg_num_rows($sql) > 1) {
			echo '<div class="container-fluid mt-3">
					<div class="row justify-content-md-center">
						<div class="col-4">
							<div class="alert alert-danger" role="alert">
								<h4 class="alert-heading">Error al iniciar sesión</h4>
								<p> Inicio de sesión erroneo, existe más de un usuario con correo '.$email.' </p>
								<hr>
								<p class="mb-0"> Será redireccionado en 5 segundos </p>
							</div>
						</div>
					</div>
				</div>';
		} else {
			$arr = pg_fetch_array($sql);
			if(password_verify($pass, $arr["contraseña"])){
				session_start();
				if($arr["admin"] == 1){ // TRUE: es admin
					$_SESSION["admin"] = TRUE;
				} else { // FALSE: es usuario
					$_SESSION["usuario"] = TRUE;
				}
				$_SESSION["nombre"] = $arr["nombre"];
				$_SESSION["apellido"] = $arr["apellido"];
				$_SESSION["correo"] = $arr["correo"];
				$_SESSION["pais"] = $arr["pais"];
				$_SESSION["fecha_registro"] = $arr["fecha_registro"];
				echo '<div class="container-fluid mt-3">
						<div class="row justify-content-md-center">
							<div class="col-4">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Inicio de sesión exitoso</h4>
									<p> Será redireccionado en 3 segundos </p>
								</div>
							</div>
						</div>
					</div>';
				header("refresh:3; url=/index.html");
			} else {

			}
		}
	} 
}

?>