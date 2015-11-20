<!-- esta accion envia los datos del formulario a la clase controladora. -->
<div class="container">
    <h3>Reporte de usuarios que mas fallan!</h4>
        <form action="controller/reportes_controller.php" method="POST"  name="reporteUsuario" role="form">
            <div class="form-group">
                <label for="ejemplo_email_1">Fecha Inicio</label>
                <input type="date" name="FechaInicio" class="form-control" id="ejemplo_email_1">
            </div>
            <div class="form-group">
                <label for="ejemplo_password_1">Fecha Final</label>
                <input type="date" name="FechaFinal" class="form-control" id="ejemplo_password_1">
            </div>
            <button type="submit" name="btnConsultar" value="Consultar" class="btn btn-primary btn-lg">Consultar</button>
        </form>

        <tr>   
            <td>DEPENDENCIA </td>
            <td><select name="LISTA">
                    <option disabled="disabled" selected="selected">SELECCIONE---></option>
                    <option>Dependencia1</option>
                    <option>Dependencia2</option>
                    <option>Dependencia3</option>
                    <option>Dependencia4</option>
                </select></td>
        </tr>
        <div id="respuesta">
            <table id="tabla" class="table table-hover">
                <thead>
                    <tr>
                        <td>Primer Nombre</td>
                        <td>Segundo Nombre</td>
                        <td>Primer Apellido</td>
                        <td>Segundo Apellido</td>
                        <td>Dependencia</td>
                        <td>Fecha Reporte</td>                     
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