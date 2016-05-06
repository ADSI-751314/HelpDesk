<form action="/HelpDesk/controller/garantias_controller.php?petition=consultar" method="POST"  id="frmConsultar" name="consultar">
            <br>
             <h1 align="center"> FORMULARIO GARANTIAS (CONSULTAR)</h1>
            <table border="2">
                
                <tr>
                    <td> Número garantía a consultar: </td>  <td align="left"><input type="text" name="txtGarantiaID" id="numero_garantia" size="20" maxlength="12"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="btnConsultar" value="CONSULTAR" class="btn btn-info"></td>
                    
                </tr>
            </table>
        
             <div id="respuesta">
            <table id="tabla" class="table table-hover">
                <thead>
                    <tr>
                        <td>Garantía Numero.</td>
                        <td>Tipo de Garantía</td>
                        <td>Fecha de Inicio garantía</td>
                        <td>Fecha Fin de garantía</td>
                        <td>Descripción</td>
                        <td>Equipo</td>                     
                    </tr>
                </thead>
                
            </table> 
                
          </div>
              <input type="button" name="btnlimpiar" value="LIMPIAR" class="btn btn-info" onclick="limpiarTexto()">
              <input id="consultarT" type="button" name="btnconsulartT" value="consultar todo" class="btn btn-info">
              
              <div id="respuesta2">
            <table id="tabla2" class="table table-hover">
                <thead>
                    <tr>
                        <td>Garantía Numero.</td>
                        <td>Tipo de Garantía</td>
                        <td>Fecha de Inicio garantía</td>
                        <td>Fecha Fin de garantía</td>
                        <td>Descripción</td>
                        <td>Equipo</td>                     
                    </tr>
                </thead>
                
            </table> 
                
          </div>
</form>
<script type="text/javascript" src="view/js/consultaGarantias.js"></script>