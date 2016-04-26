<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <form action="/HelpDesk/controller/equipos_controller.php?petition=modificar" method="POST"  name="frm_equipos_insertar">
            <br>
             <h1 align="center"> FORMULARIO EQUIPOS (MODIFICAR)</h1>
            <table>
                <tr>
                   <td> Codigo: </td>  <td align="left"><input type="text" name="txtcodigo" id="numero_equipo" size="12" maxlength="12"></td> 
                       
                </tr>
                  <tr>
                   <td> Nombre: </td>  <td align="left"><input type="text" name="txtnombre" id="nombre_equipo" size="12" maxlength="12"></td> 
                       
                </tr>
                
                <tr>
                    <td> Precio: </td>  <td align="left"><input type="text" name="txtprecio" id="precio" size="12" maxlength="12"></td>
                </tr>
               
                <tr>
                    <td> Seleccione Dependencia:  </td>   
                    <td align="left"><select name="Tipo_Dependencia">
                                                <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Empleado</option>
                                                <option value="3">usuario</option>
                                                
                                                </select> </td> 
                <!--<td align="left"><select name="depen"> </select>--->
                </tr>
                <tr>
                    <td>Seleccione tipo equipo: </td>  
                <td align="left"><select name="Tipo_Equipo">
                                                <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                                <option value="1">soportes</option>
                                                <option value="2">Computador</option>
                                                <option value="3">portatil</option>
                                                </select> </td>

                <!--<td align="left"><select name="tipoequ"> </select> -->
                </tr>
                
                 <tr>
                    <td colspan="2"> <input type="submit" name="btnModificar" value="MODIFICAR" class="btn btn-info"> 
                   </td>
                    
                </tr>
                
            </table>
        </form>
