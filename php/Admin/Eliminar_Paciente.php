<?php
include("../Conexion.php");

if(isset($_POST['Registrar'])){
	//Obtener Valores del formulario

	$num_id = $_POST['Id_Number'];

	$id=$_POST['id'];
	
	$ejecutar = mysqli_query($con,"DELETE FROM Paciente  where Num_Id=$num_id")  or die (mysqli_error($con)); 
		//Insertar en Tabla Usuarios
	$ejecutar = mysqli_query($con,"DELETE FROM usuarios where Id_Usuario=$id ") or die (mysqli_error($con));

		//Insertar en Tabla Paciente
	
	
		//Se comprueba la inserción de ambos registros
	if($ejecutar){
		echo "
		<p class='avisos'>El  paciente fue eliminado exitosamente</p>
		<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
		";
	}
	
}mysqli_close($con);
?>