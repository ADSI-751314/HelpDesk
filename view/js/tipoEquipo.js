mostrarTipo();
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

function AgregarTipo() {
    divResultado = document.getElementById('respuesta');
    tipo = document.getElementById("tipo").value;
    ajax = objetoAjax();
    ajax.open("POST", "controller/equipo_controller.php?op=1", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            divResultado.innerHTML = ajax.responseText;
            document.getElementById("tipo").value = "";
            mostrarTipo();
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores a registro.php para que inserte los datos
    ajax.send("tipo=" + tipo);
}
function mostrarTipo() {
    divResultado = document.getElementById('mostrar');
    tipo = document.getElementById("tipo").value;
    ajax = objetoAjax();
    ajax.open("POST", "controller/equipo_controller.php?op=2", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores a registro.php para que inserte los datos
    ajax.send(null);
}

function modificar(id) {
    $("#normal").hide();
    $.post("controller/equipo_controller.php?op=9", {id: id})
            .success(function (data) {
                $("#modi").html(data);
            });
}

function modTipo() {
    var nombre = $("#tipoE").val();
    var id = $("#idTipoE").val();
    $.post("controller/equipo_controller.php?op=10", {id: id, nombre: nombre})
            .success(function (data) {
                $("#modi").html(data);
                mostrarTipo();
                $("#normal").show();
            });
}

function deleteT(id) {
    $.post("controller/equipo_controller.php?op=11", {id: id})
            .success(function (data) {
                $("#modi").html(data);
                mostrarTipo();
            });
}