<link rel="stylesheet" type="text/css" href="view/css/reportes.css">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 alineacionDiv">
            <form class="form-inline" role="form">
                <div class="form-group has-feedback">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Fecha Inicial</span>
                        <input type="datetime" class="form-control form_datetime" id="fechaInicio">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>    
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Fecha Final</span>
                        <input type="datetime" class="form-control form_datetime" id="fechaFin">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
                    <button type="submit" class="btn btn-default">Filtrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <div id="graficaUsuarios" class="chart-box"></div> 
            <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
        </div>
        <div class="col-md-6">
            <div id="graficaMarcas" class="chart-box"></div>
            <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <div id="graficaPartes" class="chart-box"></div>
            <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
        </div>
        <div class="col-md-6"> 
            <div id="graficaFallasComunes" class="chart-box"></div>
            <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
        </div>
    </div>
</div>
<script type="text/javascript" src="view/js/highcharts.js"></script>
<script type="text/javascript" src="view/js/reportes.js"></script>