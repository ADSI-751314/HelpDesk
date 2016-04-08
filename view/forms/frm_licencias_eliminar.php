<h1>FORMULARIO LICENCIAS<h1> 
        <h2> ELIMINAR LICENCIA</h2>
<form action="controller/licencias_controller.php" method="POST"  name="eliminar">
   
    <table colspan="3"align="center">
        <tr>
            <td>Codigo Licencia</td> 
            <td><input type="text" name="txtCodigo_Licencia" id="txtCodigo_Licencia" value="" size="50" maxlength="80"></td>
        </tr>

        <tr>
            <td>Nombre Licencia</td> 
            <td><input type="text" name="txtNombre_Licencia"  id="txtNombre_Licencia" value="" size="50" maxlength="80"></td>
        </tr>
        
        <table colspan="3"align="center">
            <tr align="center">
                <td><input type="submit" name="btnEliminar" size="35" value="Eliminar" class="textos btn btn-lg btn-success"> </td>
            </tr>
        </table>
    </table>
</form>
<script type="text/javascript" src="view/js/licencias.js"/>
