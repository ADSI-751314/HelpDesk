<form action="controller/politicas_controller.php?petition=eliminar" method="POST" name="frm_politicas_eliminar">
    <table>
        <tr>
            <td colspan="2"><h1> Eliminar Politicas <h1></td>
                        </tr>
                        <tr> 
                            <td><label for="txtCodigo">Codigo Politica</label></td> 
                            <td><input type="text"  name="txtCodigo" values="Ingrese  el codigo"> </td> 
                        </tr>
                        
                        <tr> 
                               <td><input type="submit" name="btnEliminar" size="35" value="Eliminar" class="textos" onClick="Eliminar()"> </td>
                        </tr>
                        </table>
 </form>