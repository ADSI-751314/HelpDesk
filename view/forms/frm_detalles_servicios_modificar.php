<form action="controller/detalles_servicios_controller.php?petition=actualizar" method="POST" name="frm_detalles_servicios_modificar">
   <table>
       <tr>
           <td colspan="2"><h1> DETALLES SERVICIOS <h1></td>
                       </tr>
                       <tr> 
                           <td><label for="txtCodigo">Codigo Detalles Servicios</label></td>
                           <td><input type="text"  name="txtCodigo" values="Ingrese  el codigo"> </td> 
                       </tr>
                       <td class="textos"> FECHA ATENCION: </td>
                       <td> <input type= "date" name="txtFecha" values="Ingrese la Fecha"> </td>
                       
                       <tr> 
                           <td><label for="txtDescripcion">Descripción Detalles servicios</label></td> 
                           <td><input type="text"  name="txtDescripcion" values="">  </td> 
                       </tr>
                       <tr> 
                            <td><input type="submit" name="btnActualizar" size="35" value="Actualizar"> </td>
                       </tr>
                       </table>
</form
