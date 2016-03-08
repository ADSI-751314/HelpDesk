<form action="HelpDesk/controller/politicas_controller.php?petition=eliminar" method="POST" name="frm_politicas_eliminar">
    <table>
        <tr>
            <td colspan="2"><h1> Eliminar Politicas <h1></td>
                        </tr>
                        <tr> 
                            <td><label for="txt_Codigo">Codigo Politica</label></td> 
                            <td><input type="text"  name="txt_Codigo" values="Ingrese  el codigo"> </td> 
                        </tr>
                        
                        <tr> 
                               <td><input type="submit" name="btnEliminar" size="35" value="Eliminar" class="textos" onClick="Eliminar()"> </td>
                        </tr>
                        </table>
 </form>