<h1>FORMULARIO LICENCIAS<h1> 
        <h2> CONSULTAR LICENCIAS</h2>
        <form action="controller/licencias_controller.php" method="POST" name="consultar"> 
            <table colspan="3"align="center">
                <tr>
                    <td>Codigo Licencia</td> 
                    <td><input type="text" name="txtCodigo_Licencia" id="txtCodigo_Licencia" size="50" maxlength="80"></td>
                </tr>
                <tr>
                    <td>Nombre Licencia</td> 
                    <td><input type="text" name="txtNombre_Licencia"  id="txtNombre_Licencia" size="50" maxlength="80"></td>
                </tr>
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
            </table>
        </form>
        <br><br>
                <table class="table table-bordered">
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
                <tbody id ="respuesta">
                    
                </tbody>
            </table>
        <script type="text/javascript" src="view/js/licencias.js"/>
