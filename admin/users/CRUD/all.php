<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST["id"];
    $nombre = $_POST["name"];
    $apellido = $_POST["last name"];
    $correo = $_POST["email"];
    $contraseña = $_POST["password"];
    $pais = $_POST["country"];
    $fecha = $_POST["date"];
    $sql = "INSERT INTO usuario (id,nombre,apellido,correo,contraseña) VALUES($1,$2,$3,$4,$5,$6,$7)";
    if(pg_query_params($dbconn,$sql,array($id,$nombre,$apellido,$correo,$contraseña,$pais,$fecha)) != FALSE){
        echo "Ingreso de dato correcto <br>";
        echo '<a href="create.php">Creacion del usuario</a><br>';
        echo '<a href="update.php">Modificacion del usuario</a><br>';
        pg_close($dbconn);
    } else {
        echo "Ocurrio un error al ingresar el dato";
        pg_close($dbconn);
    }

}


/* Este archivo debe manejar la lógica de obtener los datos de todos los usuarios */
?>