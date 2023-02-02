<?php
include ("../Conexion.php");
$sql="select Id_Servicio,Nombre,Valor from servicio ";
$result=mysqli_query($con,$sql);
echo '<link rel=StyleSheet HREF="../../css/Agregar.css" type="text/css" media=screen>';

echo "<table>";
echo "<td><b>Id</b></td><td><b>Nombre</b></td><td><b>Valor</b></td><td><b>Gestionar</b></td>";
while($fila =mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>";
	$id=$fila["Id_Servicio"];
	echo $fila["Id_Servicio"];
	echo"</td>";
	echo "<td>";
	echo $fila["Nombre"];
	echo"</td>";
	echo "<td>";
	echo $fila["Valor"];
	echo"</td>";
	echo"<td><a HREF=\"../../formularios/Editar_Servicio.php?id=$id\" id=\"$id\" name=\"$id\">Editar</a></td>";



}
echo "</table>";
mysqli_close($con);
?>