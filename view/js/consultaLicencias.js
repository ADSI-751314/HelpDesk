/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
// funcion que se ejecuta cuando la pagina ya termino de cargar.
$(function () {
    // funcion que se ejecuta cuando se hace submit en el form 
    $("form").submit(function (e) {
        //se cancela el evento del click para que no cambie de pagina.
        e.preventDefault();
        var controller = $("form").attr("action");
        var method = $("form").attr("method");
        var name = $("form").attr("name");
        var data = $("form").serialize() + "&petition=" + name;
        ajax(controller,data,method,respuesta);
    });
});
var tblBody = document.createElement("tbody");
function respuesta(data) {
    data = JSON.parse(data);
    var div = document.getElementById("respuesta");
    var tabla = document.getElementById("lic_consulta");
    var hilera = null;
    var celda = null;

    for (var i = 0; i < 1; i++) {

        hilera = document.createElement("tr");

        for (var fila in data) {

            celda = document.createElement("td");
            var textoCelda = document.createTextNode(data[fila]);
            celda.appendChild(textoCelda);
            hilera.appendChild(celda);

        }
        tblBody.appendChild(hilera);
        tabla.appendChild(tblBody);
        div.appendChild(tabla);
    }
}

function limpiarTexto()
{
     tblBody.innerHTML = "";
}

$(function () {
    // funcion que se ejecuta cuando se hace submit en el form 
    $("form").submit(function (e) {
        //se cancela el evento del click para que no cambie de pagina.
        e.preventDefault();
        var controller = $("form").attr("action");
        var method = $("form").attr("method");
        var name = $("form").attr("name");
        var data = $("form").serialize() + "&petition=" + name;
        ajax(controller,data,method,respuesta);
    });
});
var tblBody = document.createElement("tbody");
function respuesta(data) {
    data = JSON.parse(data);
    var div = document.getElementById("respuesta2");
    var tabla = document.getElementById("lic_consultar");
    var hilera = null;
    var celda = null;

    for (var i = 0; i < 1; i++) {

        hilera = document.createElement("tr");

        for (var fila in data) {

            celda = document.createElement("td");
            var textoCelda = document.createTextNode(data[fila]);
            celda.appendChild(textoCelda);
            hilera.appendChild(celda);

        }
        tblBody.appendChild(hilera);
        tabla.appendChild(tblBody);
        div.appendChild(tabla);
    }
}

function limpiarTexto()
{
     tblBody.innerHTML = "";
}

