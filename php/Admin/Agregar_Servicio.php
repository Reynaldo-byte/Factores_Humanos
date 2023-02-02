<?php
 include("../Conexion.php");
	if(isset($_POST['agregar'])){
	//Obtener Valores del formulario
		$nombre = $_POST['name'];
		$descripcion = $_POST['description'];
		$valor = $_POST['value'];


		//Insertar en Tabla servicio
		$ejecutar = mysqli_query($con,"INSERT INTO servicio(Nombre,Descripcion,Valor) VALUES('$nombre','$descripcion','$valor')")  or die (mysqli_error($con)); 
		
		//Se comprueba la inserción 
		if($ejecutar){
			echo '<h3>Insertado con exito</h3>';
		}
		mysqli_close($con);
	}