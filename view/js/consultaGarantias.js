app.consultaGarantias = function () {
    $("#form-container").on('click', '.btn-submit', function (e) {
        e.preventDefault();//se cancela el evento del click para que no cambie de pagina.
        var $form = $('#frmConsultar');
        var controller = $form.attr("action");
        var method = $form.attr("method");
        var name =  null;
        var fn = null;

        if (this.id === 'btnConsultar') {
            name = 'consultar';
            fn = respuesta;
        } else {
            name = 'consultar_todo';
            fn = respuesta2;
        }
        var data = $form.serialize() + "&petition=" + name;

        ajax(controller,data,method,fn);
    });

    function respuesta(data) {
        var tblBody = document.createElement("tbody");

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

    function respuesta2(data) {
        var tblBody = document.createElement("tbody");

        data = JSON.parse(data);
        var div = document.getElementById("respuesta2");
        var tabla = document.getElementById("tabla2");
        var hilera = null;
        var celda = null;

        for (var i = 0; i < data.length; i++) {
            hilera = document.createElement("tr");

            for (var fila in data[i]) {
                celda = document.createElement("td");
                var textoCelda = document.createTextNode(data[i][fila]);
                celda.appendChild(textoCelda);
                hilera.appendChild(celda);
            }

            tblBody.appendChild(hilera);
            tabla.appendChild(tblBody);
            div.appendChild(tabla);
        }
    }
    $("#form-container").on('click', '#btnlimpiar', function (e) {
        $("table").find("tbody").html("");
    });

    
}

