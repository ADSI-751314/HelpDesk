        <form>
            <br>
            <table>
                <tr>
                    <td> Garantía Número: </td>  <td> <input type="text" id="NoGarantia" size="30" maxlength="10"> </td>
                </tr>
                <tr>
                    <td> Tipo de garantía:  </td>   <td align="left"><input type="radio" id="hardware" name="Hardware" value="hardware"> Hardware <input type="radio" id="software" name="Software" value="software"> Software </td>
                </tr>
                <tr>
                    <td> Fecha de inicio: </td>      <td align="left"><input type="date" name="fecha"></td>
                </tr>
                <tr>
                    <td>Fecha fin de garantía:</td> <td align="left"><input type="date" name="fecha2"></td>
                </tr>
                <tr>
                    <td>Descripción: </td> <td> <textarea cols="30" rows="20"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="btnGuardar" value="GUARDAR"> 
                     <input type="submit" name="btnModificar" value="MODIFICAR"> 
                    <input type="submit" name="btnConsultar" value="CONSULTAR"> 
                     <input type="submit" name="btnEliminar" value="ELIMINAR"> </td>
                    
                </tr>
            </table>
        </form>
