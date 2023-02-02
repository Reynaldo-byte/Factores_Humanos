function cargar_S() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/servicios.php');
}
function cargar_P(id) {

    var x = document.querySelector('object');
    x.setAttribute('data', '../formularios/Perfil.php?id='+id);
}
function cargar_A(id) {
    
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/Agenda.php?id='+id);
}