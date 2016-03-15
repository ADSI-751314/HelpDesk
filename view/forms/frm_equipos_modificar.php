<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <form action="/HelpDesk/controller/equipos_controller.php?petition=modificar" method="POST"  name="frm_equipos_modificar">
            <br>
             <h1 align="center"> FORMULARIO EQUIPOS (MODIFICAR)</h1>
            <table>
                     <tr>
                   <td> Codigo: </td>  <td align="left"><input type="text" name="txtcodigo" id="numero_equipo" size="12" maxlength="12"></td> 
                       
                </tr>
                
                <tr>
                    <td> Precio: </td>  <td align="left"><input type="text" name="txtprecio" id="precio" size="12" maxlength="12"></td>
                </tr>
               
                <tr>
                    <td> Seleccione Dependencia:  </td>   <td align="left"><input type="checkbox" name="option" value="administrador"> Administrador <input type="checkbox" name="option" value="empleado"> Empleado <input type="checkbox" name="option" value="usuario"> Usuario </td>
                </tr>
                <tr>
                    <td>Seleccione Equipo: </td>  <td align="left"><input type="checkbox" name="optionl" value="computador"> Administrador <input type="checkbox" name="optionl" value="empleado"> Empleado <input type="checkbox" name="optionl" value="usuario"> Usuario </td>
                </tr>
                
            </table>
        </form>
