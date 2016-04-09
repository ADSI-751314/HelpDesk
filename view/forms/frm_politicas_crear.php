<form action="controller/politicas_controller.php?petition=guardar" method="POST" name="frm_politicas_consultar">
    
 
    
    <h1>POLITICAS</h1>
    <table border="1" >
        <tr>
            <td colspan="4" class="titulos" align="center"> POLITICAS </td>					
        </tr>
        <tr>
            <td> CODIGO POLITICAS: </td>
            <td> <input type="text" name="txtCodigo" size="8" maxlength="6"> </td>
        </tr>
        <tr>
            <td> DESCRIPCION mm: </td>
            <td> <textarea name="txtDescripcion" rows ="5" cols="25"> </textarea> </td>

        </tr>
        <tr>
            <td colspan="4" align="center">
                <input type="submit" name="btnGuardar" value="Guardar">
            </td>

        </tr>

    </table>

</form>
<script type="text/javascript" src="view/js/politicas.js"/>