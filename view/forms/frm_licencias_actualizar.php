<form action="controller/licencias_controller.php" method="POST"  name="actualizar">
    <table colspan="3"align="center">
        <tr>
            <td> 
                FORMULARIO LICENCIAS <br> ACTUALIZAR LICENCIA
            </td>
        </tr>
    </table>
    <table colspan="3"align="center">
        <tr>
            <td>Codigo Licencia</td> 
            <td><input type="text" name="txtCodigo_Licencia" id="txtCodigo_Licencia" value="" size="50" maxlength="80"></td>
        </tr>

        <tr>
            <td>Nombre Licencia</td> 
            <td><input type="text" name="txtNombre_Licencia"  id="txtNombre_Licencia" value="" size="50" maxlength="80"></td>
        </tr>
        <tr>
            <td>Fecha Compra </td> 
            <td>  <input type="date" name="Fecha_Compra"> </td>
        </tr>
        <tr>
            <td>Fecha Inicio </td> 
            <td>  <input type="date" name="Fecha_Inicio"> </td>

        </tr>
        <tr>
            <td>Fecha Caducidad</td>
            <td> <input type="date" name="Fecha_Caducidad"> </td>

        </tr>
        <tr>
            <td>Precio </td> 
            <td><input type="text" name="txtPrecio"  id="txtPrecio" value="" size="50" maxlength="80"></td>
        </tr>
        <tr>
            <td>Cobertura </td> 
            <td><input type="text" name="txtCobertura"  id="txtCobertura" value="" size="50" maxlength="80"></td>
        </tr>

        <table colspan="3"align="center">
            <tr align="center">
                <td><input type="submit" name="btnActualizar" size="35" value="Actualizar" class="textos"> </td>
            </tr>
        </table>
    </table>
</form>
<script type="text/javascript" src="view/js/licencias.js"/>
