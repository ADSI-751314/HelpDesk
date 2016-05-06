
app.consultaGarantias = function () {
    // funcion que se ejecuta cuando se hace submit en el form 
    $("form").submit(function (e) {
        //se cancela el evento del click para que no cambie de pagina.
        e.preventDefault();
        var controller = $(this).attr("action");
        var method = $(this).attr("method");
        var name = $(this).attr("name");
        var data = $(this).serialize() + "&petition=" + name;
        ajax(controller,data,method,respuesta);
    });
    
    $("#consultarT").on("click",function(){
        var formulario = $("#frmConsultar");
        var controller = formulario.attr("action");
        var method = formulario.attr("method");
        var name = "consultar_todo";
        var data = formulario.serialize() + "&petition=" + name;
        ajax(controller,data,method,respuesta2);
    })
};

var tblBody = document.createElement("tbody");
function respuesta(data) {

    data = JSON.parse(data);
    var div = document.getElementById("respuesta");
    var tabla = document.getElementById("tabla");
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

var tblBody = document.createElement("tbody");
function respuesta2(data) {

    data = JSON.parse(data);
    var div = document.getElementById("respuesta2");
    var tabla = document.getElementById("tabla2");
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



