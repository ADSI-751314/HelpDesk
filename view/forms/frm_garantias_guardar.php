<form action="/HelpDesk/controller/garantias_controller.php?petition=guardar" method="POST"  name="frm_garantias_guardar">
            <br>
             <h1 align="center"> FORMULARIO GARANTIAS (GUARDAR)</h1>
            <table>
                <tr>
                    <td> Garantía Número: </td>  <td align="left"><input type="text" name="txtGarantiaID" id="numero_garantia" size="12" maxlength="12"> </td>
                </tr>
                <tr>
                    <td> Tipo de garantía:  </td>   <td align="left"><input type="text" name="txtTipo" id="tipo_garantia" size="12" maxlength="12"> </td>
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
                    <td>foránea: </td>  <td align="left"><input type="text" name="txtForanea" id="foranea" size="12" maxlength="12"> </td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="btnGuardar" value="GUARDAR"> 
                   </td>
                    
                </tr>
            </table>
        </form>
