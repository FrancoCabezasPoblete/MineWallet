<?php
/* Este archivo debe usarse para comprobar si existe una sesión válida 
   Considerar qué pasa cuando la sesión es válida/inválida para cada página:
   - Página principal
   - Mi perfil
   - Mi billetera
   - Administración de usuarios y todo el CRUD
   - Iniciar Sesión
   - Registrarse
*/
$page = basename($_SERVER['PHP_SELF']);
if(isset($_SESSION["usuario"])){
   if($page == "log-in.html" || $page == "sign-up.html"){
      header('Location: /index.html');
   }
} elseif(isset($_SESSION["admin"])){
   if($page == "log-in.html" || $page == "sign-up.html"){
      header('Location: /index.html');
   }
} else {
   if(!($page == "log-in.html" || $page == "sign-up.html" || $page == "index.html")){
      //header('Location: /index.html');
   }
}

?>
