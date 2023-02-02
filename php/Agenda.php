<?php
include ("Conexion.php");
$id=$_GET['id'];
$sql="select * from agenda where Id_Paciente=$id";
$result=mysqli_query($con,$sql);
echo '<link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>';

echo "<table>";
echo "<td><b>Id de la agenda</b></td><td><b>Nombre del paciente</b></td><td><b>Trabajador Asignado</b></td><td><b>Servicio</b></td><td><b>Fecha</b></td><td><b>Estado</b></td><td><b>Valor</b></td>";
while($fila =mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>";
	$id=$fila["Id_Agenda"];
	echo $fila["Id_Agenda"];
	echo"</td>";
	echo "<td>";
	$sql1="select Nombre,Apellido from paciente where Num_id=".$fila["Id_Paciente"];
	$result1=mysqli_query($con,$sql1);
	
	
	if(mysqli_num_rows($result1)>0){
		$fila1=mysqli_fetch_array($result1);
		echo $fila1["Nombre"]." ".$fila1["Apellido"];
	echo"</td>";}
	else{
		echo "No disponible";
	echo"</td>";
	}echo "<td>";
	$sql1="select Nombre,Apellido from trabajador where Num_id=".$fila["Id_Trabajador"];
	$result1=mysqli_query($con,$sql1);
	
	
	if(mysqli_num_rows($result1)>0){
		$fila1=mysqli_fetch_array($result1);
		echo $fila1["Nombre"]." ".$fila1["Apellido"];
	echo"</td>";}
	else{
		echo "No disponible";
	echo"</td>";
	}
	echo "<td>";
	$sql1="select Nombre from servicio where Id_Servicio=".$fila["Id_Servicio"];
	$result1=mysqli_query($con,$sql1);
	
	
	if(mysqli_num_rows($result1)>0){
		$fila1=mysqli_fetch_array($result1);
		echo $fila1["Nombre"];
	echo"</td>";}
	else{
		echo "No disponible";
	echo"</td>";
	}
		echo "<td>";
	
	echo $fila["Fecha"];
	echo"</td>";
			echo "<td>";
	
	echo $fila["Estado"];
	echo"</td>";
			echo "<td>";
	
	echo $fila["Valor"];
	echo"</td>";


}
echo "</table>";
mysqli_close($con);
?>