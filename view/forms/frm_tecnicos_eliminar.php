<form action="controller/tecnicos_controller.php?petition=eliminar" method="POST" name="frm_tecnicos_eliminar">
    <table>
        <tr>
            <td colspan="2"><h1> Eliminar Tecnico <h1></td>
                        </tr>
                        <tr> 
                            <td><label for="txtCodigo">Codigo del tecnico</label></td> 
                            <td><input type="text"  name="txtCodigoTecnico" values="Ingrese  el codigo"> </td> 
                        </tr>
                        
                        <tr> 
                               <td><input type="submit" name="btnEliminar" size="35" value="Eliminar" class="textos" onClick="Eliminar()"> </td>
                        </tr>
                        </table>
 </form>
 
   