<?php
include("../Conexion.php");
if(isset($_POST['Registrar'])){
	//Obtener Valores del formulario
	$nombre = $_POST['name'];

	$valor = $_POST['value'];
	$id=$_POST['id'];


		//Insertar en Tabla servicio
	$ejecutar = mysqli_query($con,"DELETE quick from servicio where Id_Servicio=$id")  or die (mysqli_error($con)); 
	
		//Se comprueba la inserción 
	if($ejecutar){
		echo "<h3>Eliminado con exito</h3> <p class='avisos'><a href='javascript:history.go(-1) class='clase1'>Volver atrás</a></p>";
	}
	
}
mysqli_close($con);
?>