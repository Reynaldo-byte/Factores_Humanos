<?php
 include("../Conexion.php");

	if(isset($_POST['Registrar']))
	{
	//Obtener Valores del formulario
		$id=$_POST['Id'];

		
		$sql="DELETE from agenda WHERE Id_Agenda=$id";
		
		$ejecutar = mysqli_query($con,$sql)  or die (mysqli_error($con)); 
		if($ejecutar){
		echo "<p class='avisos'>La agenda fue eliminada con exito</p>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
";
		}

}		
	mysqli_close($con);
?>