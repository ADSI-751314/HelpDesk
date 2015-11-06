<!-- esta accion envia los datos del formulario a la clase controladora. -->
<form action="../../controller/reportes_controller.php?petition=reporteUsuario" method="POST"  name="frm_reportes_usuarios">

    <table border="1px">
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
            <td><input type="submit" name="btnConsultar" value="Consultar"  class="boton"></td>   
        </tr>
    </table>            
</form>