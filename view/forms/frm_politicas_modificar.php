<form action="HelpDesk/controller/politicas_controller.php?petition=actualizar" method="POST" name="frm_politicas_modificar">
    <table>
        <tr>
            <td colspan="2"><h1> Actualizar Politicas <h1></td>
                        </tr>
                        <tr> 
                            <td><label for="txtCodigo">Codigo Politica</label></td> 
                            <td><input type="text"  name="txtCodigo" values="Ingrese  el codigo"> </td> 
                        </tr>
                        <tr> 
                            <td><label for="txtDescripcion">Descripción de la politica</label></td> 
                            <td><input type="text"  name="txtDescripcion" values="">  </td> 
                        </tr>
                        <tr> 
                               <td><input type="submit" name="btnActualizar" size="35" value="Actualizar" class="textos" onClick="Actualizar()"> </td>
                        </tr>
                        </table>
 </form>