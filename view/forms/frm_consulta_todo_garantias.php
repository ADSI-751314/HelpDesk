<form action="/HelpDesk/controller/garantias_controller.php?petition=consultar_todo" method="POST"  name="frm_consulta_todo_garantias">
            <br>
             <h1 align="center"> FORMULARIO GARANTIAS (CONSULTAR TODO)</h1>
            
                    <input type="submit" name="btnConsultar" value="consultar todo">   
                    
                
               <h2 align="center"> CONSULTA GARANTIAS </h2>
    <table border="1" align="center">
        
        <tr>
            <td>GARANTIA ID</td><td>TIPO GARANTIA</td><td>FECHA INICIO </td><td>FECHA FIN</td><td>DESCRIPCIÓN</td><td>TIPO DE EQUIPO</td>
            
        </tr>
        <tr>
            <?php 
                foreach ($consTodo as $contenidoTodo) {
                    echo "<td>";
                    echo $contenidoTodo;
                    echo "</td>";
                }
            
            
            
            ?>
            
        </tr>
        
        
        
    </table>
                
            
        </form>