<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="hernando" />

	<title>Solicitud de Servicios</title>
</head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});    
 
$(document).ready(function() {
   $("#datepicker").datepicker();
 });

$(document).ready(function(){
   $("#datepicker").datepicker({
    showAnim: 'fadeIn'
    });
    
    $(document).ready(function(){
  $("#datepicker").datepicker({ 
       showOn: 'button', 
       buttonText: "Seleccionar" });
 });
});

</script>

<body>
<form>
<br />
<br />
<br /><br />
 <table border="1" align="center" class="fondo">
    <th colspan="6" >
      Solicitud de Servicios
      
    </tr>
    
    <tr>
     <td>ID Ticket: </td>
     <td> <input type="text" maxlength="25" name="txtTicket" /></td>
     <td>Usuario:</td>
     <td><input type="text" maxlength="25" name="txtUsuario" /></td>
     <td>Estado: </td>
     <td> <input type="text" maxlength="25" name="txtEstado" /></td>
    </tr>
    
    <tr>
     <td>Fecha: </td>
     <td><input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" /></td>
     <td>Hora: </td>
     <td> <input type="text" maxlength="25" name="txtEstado" /> </td>
     <td>Prioridad: </td>
     <td><select name="selCombo" size="1" > 
        <option value=" ">Cr&iacute;tico</option>
        <option value=" ">Alta</option>
        <option value=" ">Normal</option>
        <option value=" ">Baja</option> 
     </select> </td>
    </tr>
   
    <tr>
     <td>ID Equipo: </td>
     <td><input type="text" name="txtIdEquipo" /></td>
     <td>Tipo Equipo: </td>
     <td><input type="text" name="txtTipoEquipo" /></td>
     <td>Fecha Actualizaci&oacute;n</td>
     <td><input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" /></td>
    </tr>
   
    <tr>
     <td> Desccripci&oacute;n <center></center> </td>
     <td colspan="5"> <table>
     <tr ><textarea rows="8" cols="100"> </textarea> </tr>
     </table></td>
    </tr>
    
    <tr>
    <td colspan="6" align="center"> <input type="submit" name="btnEnviar" value="ENVIAR" /> </td>
    
    </tr>
    
 </table>

</form>


</body>
</html>