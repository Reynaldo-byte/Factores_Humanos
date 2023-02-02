<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>OlympusSpa-Crear Agenda</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>Crear Agenda</h1></header>

    <form action="../php/Admin/Agregar_Agenda.php" method="post" class="formulario">
        Servicio <select name="service">
                    <?php
		include ("../php/Conexion.php");
		$sql="select Id_Servicio,Nombre from servicio";
		$result=mysqli_query($con,$sql);
		while($fila = mysqli_fetch_array($result)){
        $name=$fila['Nombre'];
        $ids=$fila['Id_Servicio'];
		echo "<option value=\"$ids\">$name</option>";
		}
		
?>

 </select>
        Paciente<select name="Paciente" id="Paciente">
        <?php 
        
        $sql="select Num_Id,Nombre from Paciente";
		$result=mysqli_query($con,$sql);
		while($fila = mysqli_fetch_array($result)){
        $name=$fila['Nombre'];
        $id=$fila['Num_Id'];
		echo "<option value=\"$id\">$name</option>";
		}
		?>
        </select>
        Trabajador<select name="Trabajador" id="Trabajador">
        <?php 
        
        $sql="select Nombre,Num_Id from Trabajador";
		$result=mysqli_query($con,$sql);
		while($fila = mysqli_fetch_array($result)){
        $name=$fila['Nombre'];
        $id=$fila['Num_Id'];
		echo "<option value=\"$id\">$name</option>";
		}
		?>
        </select>
        Hora inicio <input type="time" name="hour_b" id="hour_b" required/>
        Hora fin <input type="time" name="hour_e" id="hour_e" required/>
        Fecha <input type="date" name="date" id="date" required/>
        Estado <select name="state">
            <option value="Pendiente">Pendiente</option>
            <option value="Cancelado">Cancelado</option>
            <option value="Pagado">Realizado</option>
        </select>
        Pagado <select name="sell">
            <option value="SI">Si</option>
            <option value="NO">No</option>
        </select>
        <input type="submit" value="Registrar" name="Registrar" id="Registrar" />
    </form>
    <?php mysqli_close($con); ?>
    <footer>Desarrollado por Fallen_King</footer>

</body>
</html>