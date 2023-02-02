<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <title>OlympusSpa</title>
        <link type="icon" href="Img/logo.png"/>
        <link rel=StyleSheet HREF="../css/agregar.css" type="text/css" media=screen>
        
    </head>
    <body>
        <header><h1>Inicio de Sesi�n</h1></header>
        <form action="../php/validar.php" method="post" name="Inicio_Sesion" class="formulario">


            Usuario
            <input type="text" name="user" id="user" /><br>

            Contrase�a:
            <input type="password" name="password" id="password" />

            <input type="submit" value="Iniciar Sesi�n" name="iniciar" id="iniciar" />
            <a href="frm_Registro_Paciente.php">Registrarse</a>
        </form>

        <footer>Desarrollado por Fallen_King</footer>

    </body>
</html>