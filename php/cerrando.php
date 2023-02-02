
<?php
session_start();
if(session_destroy()) // Destruye todas las sesiones
{
header("Location: ../formularios/frm_Inicio_de_Sesion.php"); // Redireccionando a la pagina index.php
}
?>