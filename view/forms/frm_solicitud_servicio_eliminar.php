<form name="frmServicioEliminar" action="/HelpDesk/controller/servicios_controller.php?peticion=eliminar" method="POST">
<br />
<br />
<br /><br />
 <table border="1" align="center">
 <tr>
 <td align="right" colspan="6"><b>Bienvenido: </b></td>
 
 </tr>
 <tr colspan="6" >
      <b>Elminars Servicios</b>
      
    </tr>
    
    <tr>
     <td>ID Ticket: </td>
     <td> <input type="text" maxlength="25" name="txtTicket" /></td>
     <td>Usuario: <input type="text" maxlength="25" name="txtUsuario"/></td>
     <td>ID Usuario: <input type="text" name="txtIdUsuario"  maxlength="10"/>
         
       </td>
     
     <td>Estado: </td>
     <td> <select name="cboEstado" size="1" > 
        <option value="Abierto">Abierto</option>
        <option value="Cerrado">Cerrado</option>
        <option value="Pendiente">Pendiente</option>
        </select> </td>
    </tr>
    
    <tr>
     <td>Fecha: </td>
     <td><input type="text" value="<?php $hoy = date("Y-m-d"); echo $hoy; ?>" name="txtFechaCreacion"/></td>
     <td>Hora: </td>
     <td> <input type="text" name="txtHora" value="<?php date_default_timezone_set('America/Bogota'); $time = time(); echo date("H:i:s", $time);?>" /></td>
     <td>Prioridad: </td>
     <td><select name="cboPrioridad" size="1" > 
        <option value="Critico">Cr&iacute;tico</option>
        <option value="Alta"> Alta </option>
        <option value="Normal"> Normal </option>
        <option value="Baja"> Baja s</option> 
     </select> </td>
    </tr>
   
    <tr>
    
        <td>ID Equipo:  </td>
         <td>
             <input type="text" name="txtIdEquipo">
         <!--<select name="selComboIdEquipo" id="cboIdEquipo" >
         <option value="0"><b>Seleccione</b></option>
         
         </select>-->
         </td>
         
     <td>Tipo Equipo: </td>
     <td><input type="text" name="txtTipoEquipo"/>
     
     
     </select>
     </td>
     <td>Fecha Actualizaci&oacute;n</td>
     <td><input type="text"  name="txtFechaActualizacion" value="<?php $hoy = date("Y-m-d"); echo $hoy; ?>"/></td>
    </tr>
   
    <tr>
     <td> Desccripci&oacute;n <center></center> </td>
     <td colspan="5"> <table>
     <tr ><textarea rows="8" cols="100" name="txtDescripcion"> </textarea> </tr>
     </table></td>
    </tr>
    
    <tr>
    <td colspan="6" align="center"> <input type="submit" name="btnEliminar" value="ELIMINAR" class="btn btn-lg btn-success"/> </td>
    </tr>
    
 </table>

</form>