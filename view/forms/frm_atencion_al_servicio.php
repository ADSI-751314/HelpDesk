<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Atención al servicio</title>
</head>
<body>
	<form>
		<h1>Atención al servicio</h1>
		<hr>
		<h2>Detalle del servicio:</h3>
		<p>Esta es la descripción del reporte a atender.</p>
		<label for="txtEquipo">Equipo</label>
		<br>
		<input type="text" value="equipo-1-ejemplo" readonly="readonly" name="txtEquipo">
		<button>VER INFORME DE EQUIPO</button>
		<br><br>
		<label for="txaDescripcion">Descripción</label>
		<br>
		<textarea cols="50" rows="6" readonly="readonly" name="txaDescripcion">esta es la descripción de ejemplo</textarea>
		<br><br>
		<label for="txtUsuario">Usuario</label>
		<br>
		<input type="text" value="usuario-ejemplo" readonly="readonly" name="txtUsuario">
		<br><br>
		<hr>
		<h2>Conclusiones del servicio:</h2>
		<p>Acontinuación debes de informar si pudiste atender efectivamente la solicitud</p>
		<label for="radSolucion">Pudiste solucionar completamente la solicitud?</label>
		<p>
			<label>SI</label><input type="radio" name="radSolucion" id="si" onclick="ocultarConclusion()">
			<label>NO</label><input type="radio" name="radSolucion" id="no" onclick="mostrarConclusion()" checked>
		</p>
		<br>
		<label id="lblConclusion" for="txaConclusion">Conclusión</label>
		<br>
		<textarea id="txaConclusion" cols="50" rows="6" name="txaConclusion" placeholder="Describe las razones por las cuales no pudiste resolver la solicitud efectivamente ..."></textarea>
		<br>
		<input type="submit" value="ENVIAR">
	</form>
</body>
</html>

<script type="text/javascript">
	function ocultarConclusion() {
		document.getElementById('txaConclusion').style.display = 'none';
		document.getElementById('lblConclusion').innerHTML = 'No es necesario escribir una conclusión.';
	}
	function mostrarConclusion() {
		document.getElementById('txaConclusion').style.display = 'block';
		document.getElementById('lblConclusion').innerHTML = 'Conclusión';
	}
</script>
