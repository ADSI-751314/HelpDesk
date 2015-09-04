<!DOCTYPE html>
<html>

    <head>

        <title> MODULO REPORTES </title>
    </head>

    <body>


        <form name="frmReportes " >
            <table border="1px">
                <tr >                   

                    <td colspan="2" >REPORTES  </td>
                    <td colspan="2" >
                        <select name="LISTA">
                            <option disabled="disabled" selected="selected">SELECCIONE---></option>
                            <option>FALLAS MAS COMUNES</option>
                            <option>USUARIOS MAS CRITICOS</option>
                            <option>PARTES QUE MAS FALLAN</option>
                            <option>MARCAS QUE MAS FALLAN</option>
                        </select>
                    </td>
                <br>             
                </tr>
                <tr>

                </tr>

                <tr>   
                    <td colspan="2"> TICKET  </td>
                    <td colspan="2"><input type="texto" name="txtticket" size="18" maxlength="10"></td>

                </tr>
                <tr>  
                    <td>FECHA INICIO </td>
                    <td><input type="date" name="FechaInicio"> </td>
                    <td>FECHA FIN </td>
                    <td><input type="date" name="FechaFin"> </td>

                <tr>    <td> <input type="submit" name="btnConsultar" value="Consultar"  class="boton"></td>         </tr>




            </table>            




        </form>

    </body>
</html>

