<!-- esta accion envia los datos del formulario a la clase controladora. -->
<div class="container-fluid">
    <h3>Reporte de usuarios que mas fallan!</h3>
    <form action="controller/reportes_controller.php" method="POST"  name="reporteUsuario" role="form">
        <div class="form-group">
            <label for="ejemplo_email_1">Fecha Inicio</label>
            <input type="date" name="FechaInicio" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="ejemplo_password_1">Fecha Final</label>
            <input type="date" name="FechaFinal" class="form-control" required>
        </div>
        
        <div class="form_group">
            <label for="sel1">Seleccione una dependencia:</label>
            <select class="form-control" name="Lista" required>
                <option disabled="disabled" selected="selected">Seleccione---></option>
                <option>Dependencia1</option>
                <option>Dependencia2</option>
                <option>Dependencia3</option>
                <option>Dependencia4</option>
            </select>
        </div>
        
        <br>
        
        <div class="form_group">
            <button type="submit" name="btnConsultar" value="Consultar" class="btn btn-primary btn-md">Consultar</button>
        </div>
    </form>
    
    <div class="container-fluid">
        <div id="respuesta">
        <h2>Resultado</h2>           
        <table class="table table-hover" id="tabla">
            <thead>
                <tr>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Dependencia</th>
                    <th>Fecha Reporte</th>  
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="view/js/reportes.js"></script>