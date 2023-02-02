<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>OliympusSpa-Admin</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/principal.css" type="text/css" media=screen>
</head>
<body>
    <script src="../Scripts/Admin.js"></script>
    <h1>Centro de Estetica Olympus</h1>
    <header><h1> Vista Administrador</h1></header>
    <div class=" menu">
        <div class="dropdown">
            <button class="mainmenubtn">Gestion Paciente</button>
            <div class="dropdown-child">
                <a onclick="cargar_Agregar_P()">Agregar Paciente</a>
                <a onclick="cargar_Editar_P()">Editar Paciente</a>
                <a onclick="cargar_Eliminar_P()">Eliminar Paciente</a>

            </div>
        </div>
        <div class="dropdown">
            <button class="mainmenubtn">Gestion Trabajador</button>
            <div class="dropdown-child">
                <a onclick="cargar_Agregar_T()">Agregar Trabajador</a>
                <a onclick="cargar_Editar_T()">Editar Trabajador</a>
                <a onclick="cargar_Eliminar_T()">Eliminar Trabajador</a>

            </div>
        </div>
        <div class="dropdown">
            <button class="mainmenubtn">Gestion Servicio</button>
            <div class="dropdown-child">
                <a onclick="cargar_Agregar_S()">Agregar Servicio</a>
                <a onclick="cargar_Editar_S()">Editar Servicio</a>
                <a onclick="cargar_Eliminar_S()">Eliminar Servicio</a>

            </div>
        </div>
        <div class="dropdown">
            <button class="mainmenubtn">Gestion Agendas</button>
            <div class="dropdown-child">
                <a onclick="cargar_Agregar_A()">Agregar Agenda</a>
                <a onclick="cargar_Editar_A()">Editar Agenda</a>
                <a onclick="cargar_Eliminar_A()">Eliminar Agenda</a>
            </div>

        </div>
        <div class="dropdown">
            <button class="mainmenubtn">Gestion Gerente</button>
            <div class="dropdown-child">
                <a onclick="cargar_Agregar_G()">Agregar Gerente</a>
                <a onclick="cargar_Editar_G()">Editar Gerente</a>
                <a onclick="cargar_Eliminar_G()">Eliminar Gerente</a>

            </div>
        </div>
        <div class="dropdown">
            <a class="button" href="../php/cerrando.php">Cerrar sesión</a>

        </div>
    </div>

        <div name="subventana">
            <object type="text/html">
            </object>
        </div>
        


    </body>
    </html>