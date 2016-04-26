<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<form action="/HelpDesk/controller/garantias_controller.php?petition=guardar" method="POST"  name="frm_garantias_guardar">
            <br>
             <h1 align="center"> FORMULARIO GARANTIAS (GUARDAR)</h1>
            <table>
                <tr>
                   <td> Garantía Número: </td>  <td align="left"><input type="text" name="txtGarantiaID" id="numero_garantia" size="21" maxlength="12"></td> 
                       
                </tr>
                <tr>
                    <td> Tipo de garantía:  </td>   <td align="left"><input type="checkbox" name="option" value="hardware"> Hardware <input type="checkbox" name="option" value="software"> Software </td>
                </tr>
                <tr>
                    <td> Fecha de inicio: </td>      <td align="left"><input type="date" name="fecha"></td>
                </tr>
                <tr>
                    <td>Fecha fin de garantía:</td> <td align="left"><input type="date" name="fecha2"></td>
                </tr>
                <br>
                <tr>
                    <td>Descripción: </td> <td> <textarea cols="60" rows="5" name="txtDescripcion" id="descripcion"></textarea></td>
                </tr>
                <tr>
                    <td>Tipo de Equipo: </td>  <td align="left"><select name="Tipo_Equipo">
                                                <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                                <option value="1">Computador Portatil</option>
                                                <option value="2">Computador de Mesa</option>
                                                <option value="3">Impresora</option>
                                                <option value="4">Poyector</option>
                                                <option value="5">Servidor</option>
                                                </select> </td>
                                                
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="btnGuardar" value="GUARDAR" class="btn btn-info"> 
                   </td>
                    
                </tr>
            </table>
        </form>
