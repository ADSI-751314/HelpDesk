<form action="controller/politicas_controller.php?petition=consultar" method="POST" name="frm_politicas_consultar">
    <table>
        <tr>
            <td colspan="2"><h1> Politicas <h1></td>
                        </tr>
                        <tr> 
                            <td><label for="txtCodigo">Codigo Politica</label></td> 
                            <td><input type="text"  name="txtCodigo" values="Ingrese  el codigo"> </td> 
                        </tr>
                        <tr> 
                            <td><label for="txtDescripcion">Descripción de la politica mm</label></td> 
                            <td><input type="text"  name="txtDescripcion" values="">  </td> 
                        </tr>
                        <tr> 
                            <td colspan="4" aling="center">
                            <input type="submit"  name="btnConsultar" value="Consultar"></td> 
                        </tr>
                        </table>
 </form>