<?php
include("../Conexion.php");

if(isset($_POST['Registrar'])){
	//Obtener Valores del formulario
	$nombre = $_POST['name'];
	$apellido = $_POST['lastname'];
	$direccion = $_POST['adress'];
	$celular = $_POST['phone_number'];
	$fijo = $_POST['fixed_number'];
	$ciudad = $_POST['city'];
	$email = $_POST['email'];
	$tipo_id = $_POST['type_D'];
	$num_id = $_POST['Id_Number'];
	$fecha = $_POST['birth_date'];
	$pass = $_POST['password'];
	$user=$_POST['usuario'];
	$Fecha=date("Y-m-d",strtotime($fecha));
		
	$nuevo_Id=mysqli_query($con,"select Num_Id from $user where Num_Id='$num_id'");
	if(mysqli_num_rows($nuevo_Id)>0)
	{
		echo "
		<p class='avisos'>El usuario ya esta registrado</p>
		<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
		";
	}else{
		//Insertar en Tabla Usuarios
		$ejecutar = mysqli_query($con,"INSERT INTO usuarios(email,clave,rol) VALUES('$email','$pass','$user')") or die (mysqli_error($con));

		//Obtener valor del Id_Usuario
		$sql="select Id_Usuario from usuarios where email='$email'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		$id=$row['Id_Usuario'];

		//Insertar en Tabla Paciente
		$ejecutar = mysqli_query($con,"INSERT INTO $user (Nombre,Apellido,Direccion,Telefono_Celular,Telefono_Fijo,Ciudad,Email,Tipo_Id,Num_id,Fecha_Nacimiento,Id_Usuario) VALUES('$nombre','$apellido','$direccion','$celular','$fijo','$ciudad','$email','$tipo_id','$num_id','$Fecha','$id')")  or die (mysqli_error($con)); 
		
		//Se comprueba la inserción de ambos registros
		if($ejecutar){
			echo "
			<p class='avisos'>El  $user fue registrado exitosamente</p>
			<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
			";
	mail("espinelreynaldo@gmail.com","asuntillo","Este es el cuerpo del mensaje");
		}
		
	}}
	mysqli_close($con);
	?>