//Funciones de carga Paciente
function cargar_Agregar_P() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../formularios/frm_Registro_Paciente.php');
}
function cargar_Editar_P() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Admin/Consultar_Editar_Paciente.php?rol=Paciente');
}
function cargar_Eliminar_P() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Admin/Consultar_Eliminar_Paciente.php');
}
//Funciones carga Agenda
function cargar_Agregar_A() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../formularios/frm_Registro_Agenda.php');
}
function cargar_Editar_A() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Admin/Consultar_Editar_Agenda.php');
}
function cargar_Eliminar_A() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Admin/Consultar_Eliminar_Agenda.php');
}
//Funciones de carga Servicio

function cargar_Agregar_S() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../formularios/frm_Registro_Servicio.php');
}
function cargar_Editar_S() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Admin/Consultar_Editar_Servicio.php');
}
function cargar_Eliminar_S() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Admin/Consultar_Eliminar_Servicio.php');
}