<form action="controller/tecnicos_controller.php" method="POST"  name="consultar">
            <br>
             <h1 align="center"> CONSULTAR TECNICOS</h1>
            <table border="2">
                
                <tr>
                    <td> Ingrese el codigo del tecnico a conlsultar : </td>  <td align="left"><input type="text" name="txt_Tecnico" id="tecnico_codigo" size="12" maxlength="12"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="btnConsultar" value="CONSULTAR" class="btn btn-info"></td>
                    
                </tr>
            </table>
        
             <div id="respuesta">
            <table id="tabla" class="table table-hover">
                <thead>
                   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table> 
                
          </div>
              <input type="button" name="btnlimpiar" value="LIMPIAR" class="btn btn-info" onclick="limpiarTexto()">
</form>