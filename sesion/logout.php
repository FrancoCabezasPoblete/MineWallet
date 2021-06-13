<?php
/* Este archivo debe manejar la lógica de cerrar una sesión */
if(session_status() !== 2) session_start();
session_unset();
session_destroy();
header('Location:/index.html');
exit();
?>