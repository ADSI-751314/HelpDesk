<form action="controller/garantias_controller.php" method="POST"  name="frm_garantias">
            <br>
            <table>
                <tr>
                    <td> Garantía Número: </td>  <td align="left"><input type="text" name="txtGarantiaID" id="numero_arantia" size="12" maxlength="12"> </td>
                </tr>
                <tr>
                    <td> Tipo de garantía:  </td>   <td align="left"><input type="radio" id="hardware" name="hardware" value="hardware"> Hardware <input type="radio" id="software" name="software" value="software"> Software </td>
                </tr>
                <tr>
                    <td> Fecha de inicio: </td>      <td align="left"><input type="date" name="fecha"></td>
                </tr>
                <tr>
                    <td>Fecha fin de garantía:</td> <td align="left"><input type="date" name="fecha2"></td>
                </tr>
                <tr>
                    <td>Descripción: </td> <td> <textarea cols="50" rows="15" name="txtDescripcion" id="descripcion"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="btnGuardar" value="GUARDAR"> 
                   </td>
                    
                </tr>
            </table>
        </form>
