<?php
 include("../Conexion.php");

	if(isset($_POST['Registrar']))
	{
	//Obtener Valores del formulario
		$paciente = $_POST['Paciente'];
		$trabajador = $_POST['Trabajador'];
		$hora1 = $_POST['hour_b'];
		$hora2 = $_POST['hour_e'];
		$fecha = $_POST['date'];
		$estado = $_POST['state'];
		$servicio = $_POST['service'];
		$pagado = $_POST['sell'];
		$Fecha=date("Y-m-d",strtotime($fecha));
		$horaI=$Fecha." ".date("H:i:s",(int)$hora1);
		$horaF=$Fecha." ".date("H:i:s",(int)$hora2);

		$sql="select Valor from servicio where Id_Servicio=$servicio";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		$valor=$row['Valor'];
		
		$sql="INSERT INTO agenda(Id_Servicio,Id_Paciente,Id_Trabajador,Hora_Inicio,Hora_Fin,Valor,Fecha,Pagado,Estado) VALUES($servicio,$paciente,$trabajador,'$horaI','$horaF',$valor,'$Fecha','$pagado','$estado')";
		
		$ejecutar = mysqli_query($con,$sql)  or die (mysqli_error($con)); 
		if($ejecutar){
		echo "
<p class='avisos'>La agenda fue registrada con exito</p>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
";
		}

}		
	mysqli_close($con);
?>