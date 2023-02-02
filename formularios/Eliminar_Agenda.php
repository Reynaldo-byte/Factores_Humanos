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
<?php
    include ("../php/Conexion.php");
    $id=$_GET['id'];
    $sql="select * from agenda where Id_Agenda=".$id;
  
    $result=mysqli_query($con,$sql);
    $fila = mysqli_fetch_array($result);
       
    $sql1="select Nombre from servicio where Id_Servicio=".$fila["Id_Servicio"];
    $result1=mysqli_query($con,$sql1);
    
    

        ?>
    <form action="../php/Admin/Eliminar_Agenda.php" method="post" class="formulario">
        Servicio <input name="service" value=<?php     if(mysqli_num_rows($result1)>0){
        $fila1=mysqli_fetch_array($result1);
        echo $fila1["Nombre"];
 }
    else{
        echo "No_disponible";
    } ?> readonly/>


 </select>
        Paciente<input name="Paciente" id="Paciente" value=<?php $sql1="select Nombre,Apellido from Paciente where Num_id=".$fila["Id_Paciente"];
    $result1=mysqli_query($con,$sql1);
    
    
    if(mysqli_num_rows($result1)>0){
        $fila1=mysqli_fetch_array($result1);
        echo $fila1["Nombre"]." ".$fila1["Apellido"];
    }
    else{
        echo "No_disponible";
   
    } ?> readonly/>
       Trabajador<select name="Trabajador" id="Trabajador"  >
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
        Hora inicio <input type="time" name="hour_b" id="hour_b" />
        Hora fin <input type="time" name="hour_e" id="hour_e" />
        Fecha <input type="date" name="date" id="date" />
        Estado <select name="state">
            <option value="Pendiente">Pendiente</option>
            <option value="Cancelado">Cancelado</option>
            <option value="Pagado">Realizado</option>
        </select>
        Pagado <select name="sell">
            <option value="SI">Si</option>
            <option value="NO">No</option>
        </select>
        <input id="Id" name="Id" value=<?php echo $id?> type="hidden" />
        <input type="submit" value="Registrar" name="Registrar" id="Registrar" />

    </form>
     
    <?php mysqli_close($con); ?>
    <footer>Desarrollado por Fallen_King</footer>

</body>
</html>