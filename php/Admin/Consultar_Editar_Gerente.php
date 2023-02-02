<?php
include ("../Conexion.php");
$sql="select Id_Usuario,Email from usuarios where Rol= 'Administrador'";
$result=mysqli_query($con,$sql);
echo '<link rel=StyleSheet HREF="../../css/Agregar.css" type="text/css" media=screen>';

echo "<table>";
echo "<td><b>Id</b></td><td><b>Email</b></td><td><b>Acciónes</b></td>";
while($fila =mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>";
	$id=$fila["Id_Usuario"];
	echo $fila["Id_Usuario"];
	echo"</td>";
	echo "<td>";
	echo $fila["Email"];
	echo"</td>";
	echo"<td><a HREF=\"../../formularios/Editar_Gerente.php?id=$id\" id=\"$id\" name=\"$id\">Editar</a></td>";



}
echo "</table>";
mysqli_close($con);
?>