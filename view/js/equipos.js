
function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {

        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
function a() {
    alert('hola');

}

function Registrar(accion) {
    codigo = document.getElementById('codigo').value;
    nombres = document.getElementById('nombres').value;
    precio = document.getElementById('precio').value;
    dependencia = document.getElementById('Tipo_Dependencia').value;
    tipoEquipo = document.getElementById('Tipo_Equipo').value;
    //alert("datos"+codigo+" "+nombres+" "+precio+" "+dependencia+""+tipoEquipo);
    ajax = objetoAjax();

    if (accion == 'n') {
        ajax.open("POST", "model/equiposCrud_class.php?op=1", true);

    } else if (accion == 'a') {

        ajax.open("POST", "model/equiposCrud_class.php?op=2", true);
    }

    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            alert('Dato insertado');
            window.location.reload(true);
        }
    }
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("codigo=" + codigo + "&nombres=" + nombres + "&precio=" + precio + "&dependencia=" + dependencia + "&tipoEquipo=" + tipoEquipo);
}

/*function Registrar(){
 codigo = document.getElementById('codigo').value;
 nombres= document.getElementById('nombres').value;
 precio= document.getElementById('precio').value;
 dependencia= document.getElementById('Tipo_Dependencia').value;
 tipoEquipo= document.getElementById('Tipo_Equipo').value;
 ajax = objetoAjax();
 ajax.open("POST", "model/Insertar_equipos.php", true);
 ajax.onreadystatechange= function() {
 if (ajax.readyState == 4 ) {
 
 alert('Registro exitoso pana');
 //    $('#Respuesta').innerHTML = ajax.responseText;
 //    window.location.href="view/forms/frm_registrar_historialCambios.php";
 window.location.reload();
 }
 
 
 }
 ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 ajax.send("codigo="+codigo+"&nombres="+nombres+"&precio="+precio+"&dependencia="+dependencia+"&tipoEquipo="+tipoEquipo);
 }
 */

var accion;
function Nuevo() {
    accion = 'n';
    document.frmEquipos.codigo.value = "";
    document.frmEquipos.nombres.value = "";
    document.frmEquipos.precio.value = "";
    document.frmEquipos.Tipo_Dependencia.value = "";
    document.frmEquipos.Tipo_Equipo.value = "";
    $('#modal').modal('show');

}

function Actualizar(codigo, nombre, precio, dependencia, tipo_Equipo) {
    accion = 'a';
    document.frmEquipos.codigo.value = codigo;
    document.frmEquipos.nombres.value = nombre;
    document.frmEquipos.precio.value = precio;
    document.frmEquipos.Tipo_Dependencia.value = dependencia;
    document.frmEquipos.Tipo_Equipo.value = tipo_Equipo;
    $('#modal').modal('show');

}

function eliminar(codigo) {

    

        $.confirm({
            title: 'CONFIRMAR ELIMINACION!',
            text: 'Esta Seguro que Desea Eliminar este Registro',
            confirm: function() {
                ajax = objetoAjax();
                ajax.open("POST", "model/equiposCrud_class.php?op=0", true);
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) {
                        alert('Dato Eliminado');
                        window.location.reload();
                    }
                }
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.send("codigo=" + codigo);

            },
            cancel: function() {
                //sin Aciones
            }
        });


    }






