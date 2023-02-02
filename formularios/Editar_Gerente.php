<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title>OlympusSpa-Editar Paciente</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>Editar Gerente</h1></header>
    <?php
    include ("../php/Conexion.php");
    $id=$_GET['id'];
    $sql="select Tipo_Id,Num_id,Fecha_Nacimiento from Administrador where Id_Usuario=".$id;
    $result=mysqli_query($con,$sql);
    while($fila = mysqli_fetch_array($result)){
       //Obtener Valores del formulario

        $tipo_id =  $fila['Tipo_Id'];
        $num_id =  $fila['Num_id'];
        $fecha =  $fila['Fecha_Nacimiento'];
    }
    ?>
    <form action="../php/Admin/Editar_Gerente.php" method="post" class="formulario">
        Nombre <input type="text" name="name" id="name" required/>
        Apellido <input type="text" name="lastname" id="lastname" required/>
        Dirección <input type="text" name="adress" id="adress" />
        Telefono Celular <input type="number" name="phone_number" id="phone_number" required/>
        Telefono Fijo <input type="number" name="fixed_number" id="fixed_number" />
        Ciudad <input type="text" name="city" id="city" required/>
        Email <input type="email" name="email" id="email" required/>
        Tipo de Id <input id="type_D" name="type_D" value=<?php echo  $tipo_id; ?> readonly/>
        Numero del Id <input id="Id_Number" name="Id_Number" value=<?php echo $num_id; ?> readonly/>
        Fecha de Nacimiento <input id="birth_date" name="birth_date" value=<?php echo $fecha; ?> readonly/>
        <input id="id" name="id" value=<?php echo $id?> type="hidden" />
        <?php mysqli_close($con); ?>
        <input type="submit" value="Registrar" value="Registrar" name="Registrar" id="Registrar"/>
    </form>
    <footer>Desarrollado por Fallen_King</footer>

</body>
</html>