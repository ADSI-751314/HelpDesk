<form action="/HelpDesk/controller/servicios_controller.php" method="POST"  name="consultar">
       <br>
             <h1 align="center"> FORMULARIO SERVICIO (CONSULTAR)</h1>
            <table>                
                <tr>
                    <td> Numero de ticket: </td>  <td align="left"><input type="text" name="txtTicket" id="txtTicket" size="12" maxlength="12"> </td>
                </tr>                
                <tr>
                    <td colspan="2"> <input type="submit" name="btnConsultar" value="consultar"></td>
                </tr>
            </table>
        
             <div id="respuesta">
            <table id="tabla" class="table table-hover">
                <thead>
                    <tr>
                        <td>Numero de ticket.</td>
                        <td>Fecha creacion</td>
                        <td>Hora creacion</td>
                        <td>Descripcion</td>
                        <td>Estado</td>
                        <td>Prioridad</td>
                        <td>Fecha modificacion</td>
                        <td>ID usuario</td>
                        <td>ID equipo</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>    
        </div>
</form>
<script type="text/javascript" src="view/js/ConsultaServicios.js"></script>