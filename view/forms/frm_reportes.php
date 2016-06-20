<link rel="stylesheet" type="text/css" href="view/css/reportes.css">
<div class="row well">
    <div class="col-lg-4 col-md-5 col-sm-12 col-lg-offset-1">
        <div class="input-group has-feedback">
            <span class="input-group-addon">Fecha Inicial</span>
            <input type="text" class="form-control datepicker" id="fechaInicio" readonly>
            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        </div>
    </div>
    <div class="col-lg-4 col-md-5 col-sm-12">
        <div class="input-group has-feedback">
            <span class="input-group-addon">Fecha Final</span>
            <input type="text" class="form-control datepicker" id="fechaFin" readonly>
            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        </div>
    </div>
    <div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12">
        <button type="submit" class="btn btn-block btn-custom-primary"><i class="fa fa-filter fa-fw" aria-hidden="true"></i>&nbsp;Filtrar</button>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div id="graficaUsuarios" class="chart-box"></div>
        <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
    </div>
    <div class="col-md-6 col-xs-12">
        <div id="graficaMarcas" class="chart-box"></div>
        <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div id="graficaPartes" class="chart-box"></div>
        <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
    </div>
    <div class="col-md-6 col-xs-12">
        <div id="graficaFallasComunes" class="chart-box"></div>
        <a href="#" class="btn btn-primary" role="button">Mostrar Tabla</a>
    </div>
</div>