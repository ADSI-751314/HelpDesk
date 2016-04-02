<html lang="en">
<head>
    <title>HelpDesk | Ingresar Equipo</title>
    <!-- Custom CSS -->
    <style>
    body {
        /*padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    th, td{
        text-align: center;
    }
    </style>
</head>
<body onload="cargarOpciones();">
            <div class="col-lg-12 text-center">
                <h1>HelpDesk | Ingresar Equipo</h1>
                <p class="lead">Ingrese un tipo para crear una ficha técnica </p>
            </div>     
        <div class="row col-md-12 well">
            <form role="form" onsubmit="AgregarEquipo(); return false">
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="nombre">Nombre</label>
                        <div class="col-lg-4"><input type="text" class="form-control col-lg-4" id="nombre" placeholder="PC Escritorio | Laptod | Impresora | etc.."></div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="precio">Precio</label>
                        <div class="col-lg-4">  <input type="text" class="form-control" id="precio" placeholder="12'650.000 | 650.000 | etc..."></div>
                    </div>
                </div>
                <div class="row">
                    <div id="cargarOps"></div>
                </div>
                <div class="row">
                    <br>
                    <div class="form-group">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-default">Agregar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="row col-md-12">
            <div class="col-md-4"></div>
            <div id="respuesta" class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div id="mostrar" class="col-md-12"></div>
        </div>
    <script>
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

    function AgregarEquipo() {
        divResultado = document.getElementById('respuesta');
        nombre = document.getElementById("nombre").value;
        precio = document.getElementById("precio").value;
        dep = document.getElementById("dep").value;
        tipo = document.getElementById("tipo").value;
        ajax = objetoAjax();
        ajax.open("POST", "controller/equipo_controller.php?op=4", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                document.getElementById("nombre").value = "";
                document.getElementById("precio").value = "";
                mostrarEquipo();
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("nombre=" + nombre+"&precio=" + precio+"&dep=" + dep+"&tipo=" + tipo);
    }
    function mostrarEquipo() {
        divResultado = document.getElementById('mostrar');
        ajax = objetoAjax();
        ajax.open("POST", "controller/equipo_controller.php?op=5", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(null);
    }
    function cargarOpciones() {
        divResultado = document.getElementById('cargarOps');
        ajax = objetoAjax();
        ajax.open("POST", "controller/equipo_controller.php?op=3", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                mostrarEquipo();
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(null);
    }
    
    cargarOpciones();
    </script>
</body>
</html>
