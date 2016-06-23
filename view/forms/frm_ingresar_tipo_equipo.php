<html lang="en">
    <head>
        <title>HelpDesk | Ingresar Tipo de equipo</title>
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
    <body>
        <div id="modi">

        </div>
        <div id="normal">
            <div class="col-lg-12 text-center">
                <h1>HelpDesk | Ingresar Tipo de equipo</h1>
                <p class="lead">Ingrese un Equipo para asociar a un próximo equipo. </p>
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

    </body>
</html>
