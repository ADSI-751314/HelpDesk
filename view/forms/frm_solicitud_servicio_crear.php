<form name="frmServicio">
<br />
<br />
<br /><br />
 <table border="1" align="center" class="fondo">
 <tr>
 <td align="right" colspan="6"><b>Bienvenido: </b><b><?php echo $usuario; ?></b> <br /><a href="salir.php"><b>Cerrar Sesion</b></td>
 
 </tr>
    <th colspan="6" >
      <b>Solicitud de Servicios</b>
      
    </tr>
    
    <tr>
     <td>ID Ticket: </td>
     <td> <input type="text" maxlength="25" name="txtTicket" /></td>
     <td>Usuario:</td>
     <td><input type="text" maxlength="25" name="txtUsuario" value="<?php echo $usuario; ?> " disabled="true"/></td>
     <td>Estado: </td>
     <td> <select name="selComboEstado" size="1" > 
        <option value="comboAbierto">Abierto</option>
        <option value="comboCerrado">Cerrado</option>
        <option value="comboPendiente">Pendiente</option>
        </select> </td>
    </tr>
    
    <tr>
     <td>Fecha: </td>
     <td><input type="date" name="txtFechaCreacion" /></td>
     <td>Hora: </td>
     <td> <input type="text" name="txtHora" value="<?php $time = time(); echo date("H:i:s", $time);?>" /></td>
     <td>Prioridad: </td>
     <td><select name="selComboPrioridad" size="1" > 
        <option value="comboCritico">Cr&iacute;tico</option>
        <option value="comboAlto"> Alta </option>
        <option value="comboNormal"> Normal </option>
        <option value="comboBaja"> Baja s</option> 
     </select> </td>
    </tr>
   
    <tr>
    
     <td>ID Equipo: </td>
         <td>
         <select name="selComboIdEquipo" onchange="">
         <?php
         
         $objServicio = new conexion();
         $conn= $objServicio->conectar();
         
         $sql="SELECT pk_tipo_equ_codigo FROM tipo_equipo";
         
         $rec=mysql_query($sql);
         
         while($row = mysql_fetch_array($rec))
         {
            echo"<option>";
            echo $row['pk_tipo_equ_codigo'];
            echo "</option>";
            
         }
         ?>
         </select>
         </td>
         
     <td>Tipo Equipo: </td>
     <td><select name="selComboTipoEquipo">
     <?php
         
         $var=$_POST['selComboIdEquipo'];
         $sql1="SELECT tip_equ_nombre FROM tipo_equipo";
         
         $rec1=mysql_query($sql1);
         
         while($row = mysql_fetch_array($rec1))
         {
            echo"<option>";
            echo $row['tip_equ_nombre'];
            echo "</option>";
            
         }
         ?>
     </select>
     </td>
     <td>Fecha Actualizaci&oacute;n</td>
     <td><input type="date" name="txtFechaActualizacion" disabled="true"/></td>
    </tr>
   
    <tr>
     <td> Desccripci&oacute;n <center></center> </td>
     <td colspan="5"> <table>
     <tr ><textarea rows="8" cols="100" name="txtDescripcion"> </textarea> </tr>
     </table></td>
    </tr>
    
    <tr>
    <td colspan="6" align="center"> <input type="submit" name="btnEnviar" value="ENVIAR" onclick="guardarServicio()" /> </td>
    </tr>
    
 </table>

</form>
