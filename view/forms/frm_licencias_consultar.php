<form action="/HelpDesk/controller/licencias_controller.php?petition=consultar" method="POST" name="frm_licencias_consultar">
    <table colspan="3"align="center">
        <tr>
            <td> 
                FORMULARIO LICENCIAS <br> CONSULTAR LICENCIAS
            </td>
        </tr>
    </table>
    <table colspan="3"align="center">
        <tr>
            <td>Codigo Licencia</td> 
            <td><input type="text" name="txtCodigo_Licencia" id="txtCodigo_Licencia" value="" size="50" maxlength="80"></td>
        </tr>

        <tr>
            <td>Nombre Licencia</td> 
            <td><input type="text" name="txtNombre_Licencia"  id="txtNombre_Licencia" value="" size="50" maxlength="80"></td>
        </tr>
        
        <table colspan="3"align="center">
		<tr> 
			<td>Seleccione en su consulta un Estado </td>
			<td>
			<select id="Estado" onChange="mostrarSeleccionEquipos()">
			<option> Seleccione </option>
			<option> Activo </option>			
			<option> Inactivo </option>
			
			</select>
			<input type="text" id="mensaje">
			<font color="green" size="65"></font>
			</td>
		</tr>
                
		<tr align="center">
		
                    <td><input type="submit" name="btnConsultar" size="35" value="Consultar" class="textos btn btn-info">
		</tr>
		</table><br><br>
                
                <table id="lic_consulta" class="table table-bordered">
                    <thead>
                        <tr>
                           <td><strong>Codigo</strong></td>
                           <td><strong>Nombre</strong></td>
                           <td><strong>Fecha Compra</strong></td>
                           <td><strong>Fecha Inicio</strong></td>
                           <td><strong>Fecha Caducidad</strong></td>
                           <td><strong>Precio</strong></td>
                           <td><strong>Cobertura</strong></td>
                        </tr>
                     </thead>
              </table>
</form>
<script type="text/javascript" src="view/js/licencias.js"/>
