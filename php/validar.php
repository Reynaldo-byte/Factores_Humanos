<?php
 include("Conexion.php");
 session_start();
	if(isset($_POST['iniciar'])){
	//Obtener Valores del formulario
		$user = $_POST['user'];
		$pass = $_POST['password'];
		
		$sql="select Clave from usuarios where Email='$user'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		$aux=$row['Clave'];
		
		if($aux == $pass){
		
		$sql="select Rol from usuarios where Email='$user'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		$aux=$row['Rol'];
		if($aux == 'Administrador'){
			$_SESSION['login_user_sys']=$user;
		  Header("Location: ../principales/principal_admin.php");
		}	
		if($aux =='Paciente'){
		$sql="select Id_Usuario from usuarios where Email='$user'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
			 Header("Location: ../principales/principal_Paciente.php?id=".$row['Id_Usuario']);

		}	
		
		if($aux == 'Trabajador'){
			$_SESSION['login_user_sys']=$user;
			 Header("Location: ../principales/principal_Trabajador.php");
			
		}
		}
		else{
			$_SESSION['login_user_sys']=$user;
			Header("Location: ../formularios/frm_Inicio_de_Sesion.php");
		}
		
		
	}
	?>