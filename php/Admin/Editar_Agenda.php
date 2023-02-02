<?php
 include("../Conexion.php");

	if(isset($_POST['Registrar']))
	{
	//Obtener Valores del formulario
		$
		$trabajador = $_POST['Trabajador'];
		$hora1 = $_POST['hour_b'];
		$hora2 = $_POST['hour_e'];
		$fecha = $_POST['date'];
		$estado = $_POST['state'];
		$pagado = $_POST['sell'];
		$Fecha=date("Y-m-d",strtotime($fecha));
		$horaI=$Fecha." ".date("H:i:s",(int)$hora1);
		$horaF=$Fecha." ".date("H:i:s",(int)$hora2);
		
		$sql="UPDATE agenda SET Id_Trabajador=$servicio,Hora_Inicio=$horaI,Hora_Fin=$hora2,Fecha=$Fecha,Pagado=$pagado,Estado=$estado WHERE Id_Agenda=$id";
		
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