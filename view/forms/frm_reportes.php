<div class="container-fluid">
    <div class="row row-centered">
        <div class="col-md-12 col-centered">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only" for="ejemplo_email_2">Email</label>
                    <input type="email" class="form-control" id="ejemplo_email_2"
                           placeholder="Introduce tu email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="ejemplo_password_2">Contraseña</label>
                    <input type="password" class="form-control" id="ejemplo_password_2" 
                           placeholder="Contraseña">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> No cerrar sesión
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Entrar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="thumbnail">
                <div class="caption">
                    <div id="graficaUsuarios">
                    </div> 
                    <p><a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail">
                <div class="caption">
                    <div id="graficaMarcas">
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="thumbnail">
                <div class="caption">
                    <div id="graficaPartes">
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="thumbnail">
                <div class="caption">
                    <div id="graficaFallasComunes">
                    </div>
                    <p><a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="view/js/highcharts.js"></script>
<script type="text/javascript" src="view/js/reportes.js"></script>
