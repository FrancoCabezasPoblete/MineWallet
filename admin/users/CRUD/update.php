<?php
include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $nombre = $_POST["name"];
    $apellido = $_POST["surname"];
    $correo = $_POST["email"];
    $contraseña = $_POST["pwd"];
    $pais = $_POST["country"];
    echo "felicidades shinji, esto es un error :D";

    $jota = "UPDATE usuario SET nombre =$1";
    $data = pg_query_params($dbconn,$jota,array($nombre)); 
    echo $data;

   
    



    /*
    $actualizar = "UPDATE usuario SET nombre = $1, apellido = $2, contraseña = $3, pais = $4";
    $result = pg_query_params($dbconn, $actualizar, array($name, $apellido, $pwd_hashed, $country, $admin, $id));
    pg_close();
    */

}




/* Este archivo debe manejar la lógica de actualizar los datos de un usuario como admin */
?>