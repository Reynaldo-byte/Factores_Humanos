<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title>OlympusSpa-Crear Paciente</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>Registrar Paciente</h1></header>
    <form action="../php/Admin/Agregar.php" method="post" class="formulario">
        Nombre <input type="text" name="name" id="name"  required/>
        Apellido <input type="text" name="lastname" id="lastname" required/>
        Dirección <input type="text" name="adress" id="adress" required/>
        Telefono Celular <input type="number" name="phone_number" id="phone_number" required/>
        Telefono Fijo <input type="number" name="fixed_number" id="fixed_number" />
        Ciudad <input type="text" name="city" id="city" required/>
        Email <input type="email" name="email" id="email" required/>
        Tipo de Id <select name="type_D">
            <option value="CC">Cedula de Ciudadania</option>
            <option value="CE">Cedula de Extranjeria</option>
            <option value="TI">Tarjeta de Identidad</option>
        </select>
        Numero del Id <input type="number" name="Id_Number" required/>
        Fecha de Nacimiento<input type="date" name="birth_date" id="birth_date" required/>
        Contraseña<input type="password" name="password" id="password"required/>
        <input id="usuario" name="usuario" value="Paciente" type="hidden" />

                <input type="submit" value="Registrar" value="Registrar" name="Registrar" id="Registrar"/>
    </form>
    <footer>Desarrollado por Fallen_King</footer>

</body>
</html>