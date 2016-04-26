<form action="controller/detalles_servicios_controller.php?petition=consultar" method="POST" name="frm_detalles_servicios_consultar">
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
                           <td colspan="4" aling="center">
                           <input type="submit"  name="btnConsultar" value="Consultar"></td> 
                       </tr>
                       </table>
</form>