<form>
    <h1 align="center"> CONSULTA GARANTIAS </h1>
    <table border="1" align="center">
        
        <tr>
            <td>GARANTIA ID</td><td>TIPO GARANTIA</td><td>FECHA INICIO </td><td>FECHA FIN</td><td>DESCRIPCIÓN</td><td>FORÁNEA</td>
            
        </tr>
        <tr>
            <?php 
                foreach ($resp as $contenido) {
                    echo "<td>";
                    echo $contenido;
                    echo "</td>";
                }
            ?>
        </tr>
        
        
        
    </table>
</form>

