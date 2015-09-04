<html>
    <head>
        <title>Modulo De Invetario Tecnologico</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <form name="frmInventario">
    <table>
	   <tr>
	     <td colspan="3" >MODULO DE INVENTARIO TECNOLOGICO </td>
	     <td></td>
	   </tr>
	   
	   <tr>
	     <td>ficha tecnica del equipo de computo:</td>
	     <td><input type="text" name="txtficha" size="35" maxlength="15"> </td>
	   </tr>
           <tr>
	     <td>Codigo de Equipo:</td>
	     <td><input type="text" name="txtCodigoEquipo" size="35" maxlength="15"> </td>
	   </tr>
           <tr>
	     <td>Inventario de repuesto:</td>
	     <td><input type="text" name="txtInventarioRepuestos" size="35" maxlength="15"> </td>
	   </tr>
           <tr>
	     <td>tipo de equipo:</td>
	     <td>
                 <input type="checkbox " name="opcion1" size="35" maxlength="15" value="mesa"><br>
                 <input type="checkbox " name="opcion2" size="35" maxlength="15" value="Escritorio"><br>
                 </td>
	   </tr>
           <tr>
	     <td>historial cambio de partes:</td>
	     <td><input type="text" name="txtHistorial" size="35" maxlength="15"> </td>
	   </tr>
	   
           
           <tr>
            <td align="center" colspan="2"><input type="submit" name="btnGuardar" value="Guardar">
	     <input type="submit" value="Modificar" name="btnModificar">
		 <input type="submit" value="Eliminar" name= "btnEliminar">
		<input type="button" value="Reporte" name="btnReporte"></td>
            </tr>
	  
    
     </table>
  </form>
    </body>
</html>
