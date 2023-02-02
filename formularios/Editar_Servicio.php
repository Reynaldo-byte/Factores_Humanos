<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>OlympusSpa-Servicio</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
	    <?php
    include ("../php/Conexion.php");
    $id=$_GET['id'];
    $sql="select * from servicio where Id_Servicio=".$id;
    $result=mysqli_query($con,$sql);
    while($fila = mysqli_fetch_array($result)){
       //Obtener Valores del formulario
    	$Id_Servicio=$fila['Id_Servicio'];
        $nombre =  $fila['Nombre'];
        $descripcion =  $fila['Descripcion'];
        $valor =  $fila['Valor'];
    }
    ?>
    <header><h1>Editar Servicio</h1></header>
    <form action="../php/admin/Editar_Servicio.php" method="get" class="formulario">
        Nombre <input type="text" name="name" id="name" value=<?php echo $nombre ?> readonly/>
        Descripción <input type="text" name="description" id="description" value=<?php echo $descripcion ?> />
        Valor<input type="number" name="value" id="value" value=<?php echo $valor ?> />
         <input id="id" name="id" value=<?php echo $id?> type="hidden" />
         <input type="submit" value="Registrar" value="Registrar" name="Registrar" id="Registrar"/>
    </form>
    <?php mysqli_close($con); ?>
    <footer>Desarrollado por Fallen_King</footer>
</body>
</html>