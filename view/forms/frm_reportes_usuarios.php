<!-- esta accion envia los datos del formulario a la clase controladora. -->
<div class="container">
    <div class="jumbotron">
        <h3>Reporte de usuarios que mas fallan!</h4>
        <form action="controller/reportes_controller.php" method="POST"  name="reporteUsuario" class="navbar-form">
            <table>
                <tr >                   
                    <td colspan="4"  >USUARIOS QUE MAS FALLAN  </td><br>             
                </tr>
                <tr>  
                    <td>FECHA INICIO </td>
                    <td><input type="date" name="FechaInicio"> </td>
                    <td>FECHA FIN </td>
                    <td><input type="date" name="FechaFin"> </td>
                </tr>
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
                <tr>    
                    <td><input type="submit" name="btnConsultar" value="Consultar" class="btn btn-primary btn-lg"></td>   
                </tr>
            </table>            
        </form>
        <div id="respuesta"></div>
        <script type="text/javascript" src="view/js/reportes.js"></script>
    </div>
</div>