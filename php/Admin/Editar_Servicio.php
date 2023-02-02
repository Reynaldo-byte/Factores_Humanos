<?php
include("../Conexion.php");
if(isset($_POST['agregar'])){
	//Obtener Valores del formulario
	$nombre = $_POST['name'];
	$descripcion = $_POST['description'];
	$valor = $_POST['value'];
	$id=$_POST['id'];


		//Insertar en Tabla servicio
	$ejecutar = mysqli_query($con,"UPDATE servicio set Nombre='$nombre',Descripcion='$descripcion',Valor='$valor' where Id_Servicio=$id")  or die (mysqli_error($con)); 
	
		//Se comprueba la inserción 
	if($ejecutar){
		echo '<h3>Insertado con exito</h3>';
	}
	
}
mysqli_close($con);
?>