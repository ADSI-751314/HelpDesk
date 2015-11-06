
<form>
    <table border="1">
        <tr>
            <td>Primer nombre</td> <td>Segundo Nombre</td> <td>Primer apellido</td> <td>Segundo apellido</td> <td>Dependencia</td> <td>Fecha Reporte</td>

        </tr>
        <tr>
            <?php
            foreach ($resp as $cont) {
                echo "<td>";
                echo $cont;
                echo "</td>";
            }
            ?>
        </tr>

    </table>    
</form>