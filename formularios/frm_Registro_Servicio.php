<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>OlympusSpa-Servicio</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>Crear Nuevo Servicio</h1></header>
    <form action="../php/admin/Agregar_Servicio.php" method="post" class="formulario">
        Nombre <input type="text" name="name" id="name" required/>
        Descripción <input type="text" name="description" id="description" />
        Valor<input type="number" name="value" id="value" required/>
        <input type="button" value="agregar"  id="agregar" name="agregar"/>
    </form>
    <footer>Desarrollado por Fallen_King</footer>
</body>
</html>