<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title>OlympusSpa-Crear Paciente</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>Paciente</h1></header>
    <?php
    include ("../php/Conexion.php");
    $id=$_GET['id'];
    $sql="select * from Paciente where Id_Usuario=".$id;
    $result=mysqli_query($con,$sql);
    while($fila = mysqli_fetch_array($result)){
       //Obtener Valores del formulario
        $nombre = $fila['Nombre'];
        $apellido =  $fila['Apellido'];
        $direccion =  $fila['Direccion'];
        $celular =  $fila['Telefono_Celular'];
        $fijo =  $fila['Telefono_Fijo'];
        $ciudad =  $fila['Ciudad'];
        $email =  $fila['Email'];
        $tipo_id =  $fila['Tipo_Id'];
        $num_id =  $fila['Num_id'];
        $fecha =  $fila['Fecha_Nacimiento'];
    }
    ?>
    <form  method="POST" class="formulario">
        Nombre <input type="text" name="name" id="name" value= <?php echo $nombre; ?> readonly/>
        Apellido <input type="text" name="lastname" id="lastname" value= <?php echo $apellido; ?> readonly/>
        Dirección <input type="text" name="adress" id="adress" value= <?php echo $direccion; ?> readonly/>
        Telefono Celular <input type="number" name="phone_number" id="phone_number" value= <?php echo $celular; ?> readonly/>
        Telefono Fijo <input type="number" name="fixed_number" id="fixed_number" value= <?php echo $fijo; ?> readonly/>
        Ciudad <input type="text" name="city" id="city" value= <?php echo $ciudad; ?> readonly/>
        Email <input type="email" name="email" id="email" value= <?php echo $email; ?> readonly/>
        Tipo de Id <input id="type_D" name="type_D" value=<?php echo  $tipo_id; ?> readonly/>
        Numero del Id<input id="Id_Number" name="Id_Number" value=<?php echo $num_id; ?> readonly/>
        Fecha de Nacimiento<input type="date" name="birth_date" id="birth_date" value= <?php echo $fecha; ?> readonly/>
        <input id="id" name="id" value=<?php echo $id?> type="hidden" />

    </form>
    <?php mysqli_close($con); ?>
    <footer>Desarrollado por Fallen_King</footer>

</body>
</html>