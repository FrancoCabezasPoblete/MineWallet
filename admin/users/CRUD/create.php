<?php

echo "felicidades, llegaste a esto";


$id = $_POST["id"];
$nombre = $_POST["name"];
$apellido = $_POST["surname"];
$correo = $_POST["email"];
$contraseña = $_POST["pdw"];
$pais = $_POST["country"];


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



/* Este archivo debe manejar la lógica para crear un usuario como admin */
?>