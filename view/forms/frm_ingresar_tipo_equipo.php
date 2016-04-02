<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>HelpDesk | Ingresar Tipo de equipo</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <style>
            body {
                padding-top: 70px;
                /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
            }
            th, td{
                text-align: center;
            }
        </style>
    </head>

    <body onload="mostrarTipo();">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>HelpDesk | Ingresar Tipo de equipo</h1>
                    <p class="lead">Ingrese un Equipo para asociar a un próximo equipo. </p>
                </div>     
            </div>
            <div class="row well">
                <form class="form-horizontal col-lg-12" role="form" onsubmit="AgregarTipo(); return false">
                    <div class="form-group">
                        <label for="tipo" class="col-lg-2 control-label">Tipo de Equipo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tipo"
                                   placeholder="Computo | Electrónico | Oficina | etc...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-default">Agregar</button>
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

        </div>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
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

                    function AgregarTipo() {
                        divResultado = document.getElementById('respuesta');
                        tipo = document.getElementById("tipo").value;
                        ajax = objetoAjax();
                        ajax.open("POST", "../../controller/equipo_controller.php?op=1", true);
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
                        ajax.open("POST", "../../controller/equipo_controller.php?op=2", true);
                        ajax.onreadystatechange = function () {
                            if (ajax.readyState == 4) {
                                divResultado.innerHTML = ajax.responseText
                            }
                        }
                        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        //enviando los valores a registro.php para que inserte los datos
                        ajax.send(null);
                    }
        </script>
    </body>

</html>
