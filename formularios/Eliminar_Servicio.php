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

        $valor =  $fila['Valor'];
    }
    ?>
    <header><h1>Editar Servicio</h1></header>
    <form action="../php/admin/Eliminar_Servicio.php" method="post" class="formulario">
        Nombre <input type="text" name="name" id="name" value=<?php echo $nombre ?> readonly/>
        
        Valor<input type="text" name="value" id="value" value=<?php echo $valor ?> readonly/>
         <input id="id" name="id" value=<?php echo $id?> type="hidden" />
         <input type="submit" value="Eliminar" value="Registrar" name="Registrar" id="Registrar"/>
    </form>
    <?php mysqli_close($con); ?>
    <footer>Desarrollado por Fallen_King</footer>
</body>
</html>