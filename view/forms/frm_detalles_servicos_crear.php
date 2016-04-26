<form action="controller/detalles_servicios_controller.php?petition=crear" method="POST" name="frm_detalles_servicios_crear">
   

   
   <h1>DETALLES SERVICIOS</h1>
   <table border="1" >
       <tr>
           <td colspan="4" class="titulos" align="center"> DETALLES SERVICIOS </td>	
       </tr>
       <tr>
           <td> CODIGO DETALLES SERVICIOS: </td>
           <td> <input type="text" name="txtCodigo" size="8" maxlength="6"> </td>
       </tr>
       <tr>
           <td class="textos"> FECHA ATENCION: </td>
           <td> <input type= "date" name="txtFecha" > </td>

</tr>        
       <tr>
           <td> DESCRIPCION DETALLES SERVICIOS: </td>
           <td> <textarea name="txtDescripcion" rows ="5" cols="25"> </textarea> </td>

       </tr>
       <tr>
           <td colspan="4" align="center">
               <input type="submit" name="btnGuardar" value="Guardar">
           </td>

       </tr>

   </table>

</form>
