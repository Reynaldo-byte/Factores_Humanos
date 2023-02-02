<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>OlympusSpa-Paciente</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/principal.css" type="text/css" media=screen>
</head>
<body>
    <script src="../Scripts/Paciente.js"></script>
    <h1>Centro de Estetica Olympus</h1>
    <header><h1> Vista Paciente</h1></header>
    <div class="menu">
        <?php $id=$_GET['id']; ?>
        <div class="dropdown">
            <button class="mainmenubtn">Gestion Paciente</button>
            <div class="dropdown-child">
                <a onclick="cargar_P(<?php echo $id; ?>)" >Consultar Perfil</a>
                <a onclick="cargar_A(<?php echo $id; ?>)">Consultar Agenda</a>
                <a onclick="cargar_S()">Ver servicios</a>

            </div>
        </div>
          <div class="dropdown">
            <a class="button" href="../php/cerrando.php">Cerrar sesión</a>

        </div>
    </div>
          
  <input id="id" name="id" value=<?php echo $id?> type="hidden" />
    <div name="subventana">
        <object type="text/html">
        </object>
    </div>
   
</body>
</html>
