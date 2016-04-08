<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <h1>FORMULARIO EQUIPOS<h1> 
        <h2> CONSULTAR EQUIPOS</h2>
        <form action="controller/equipos_controller.php" method="POST" name="consultar"> 
            <table colspan="3"align="center">
                <tr>
                    <td>Codigo equipo</td> 
                    <td><input type="text" name="txtCodigo_Equipo" id="txtCodigo_Equipo" size="50" maxlength="80"></td>
                </tr>
               
             
                <tr align="center">
                    <td><input type="submit" name="btnConsultar" size="35" value="Consultar " class="textos btn btn-info">
                </tr>
            </table>
        </form>
        <br><br>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <td><strong>Codigo</strong></td>
                        <td><strong>Nombre</strong></td>
                        <td><strong>Precio</strong></td>
                        <td><strong>dependencia codigo</strong></td>
                        <td><strong>tipo codigo</strong></td>
                        
                    </tr>
                </thead>
                <tbody id ="respuesta">
                    
                </tbody>
            </table>
        <script type="text/javascript" src="view/js/equipos.js"/>