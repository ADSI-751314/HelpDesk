app.inventarioTecnologico = function () {

$("#form-container").on('click', '.btn_inventario', function (e) {
e.preventDefault(); //se cancela el evento del click para que no cambie de pagina.


        var btnId = this.id;
        switch (btnId) {
case 'btn-inv-registrar':
        Registrar();
        break;
               
        case 'btn-inv-consultarTodo' :
        mostrar();
        break;
        case 'btn-inv-filtrar' :
        consultaXIdFecha();
        break;
        
        case 'btn-inv-filtrarEliminar':filtroParaEliminarModificarCrear();
            
            break;
        
        case 'btn-inv-consultarModificar':cargarModificar();
                break;
       
        case 'btn_actualizar' :
        Modificar();
        break;
        case 'btn-inv-consultarEliminar': MostrarConsultaEliminar();
        break;
        case 'botonModal':
        Nuevo();
        break;
        default:
        break;
}
});
        $("#form-container").on('click', '.btn_modificar_eliminar', function (e) {
var btnId = this.id;
        var data = ($(this).data("value"));
        switch (btnId) {

case 'btn_modificar':
        cargarModalModificar(data);
        break;
        case 'btn-inv-eliminar':Eliminar(data);
        break;
        default:
        break;
}});
//funcion que permite registrar el historial de cambios 
//la cual envia cuatro parametros al servidor desde el cliente
// codigo , fecha , hora y descripcion
        function Registrar() {
            
       //llamado a los campos de textos para que se limpien cada vez que se cargan 
              
            //llamado a los id de cada control para almcacenar datoos
        divResultado = document.getElementById('lblRespuestaServidor');
                pkCodigo = document.getElementById('pkCodigo').value;
                fecha = document.getElementById('fecha').value;
                hora = document.getElementById('hora').value;
                txtdescripcion = document.getElementById('txtdescripcion').value;
                if (pkCodigo == "") {

        $('.validacion').html('<p style="color:red">debe ingresar codigo</p>');
                $("#frmHistorialCambios").effect("shake", {times: 3, distance: 20}, 400);
        } else {

        ajax = objetoAjax();
                ajax.open("POST", "controller/HistorialCambios_controller.php?op=1", true);
                ajax.onreadystatechange = function () {
                if (ajax.readyState == 4) {

                divResultado.innerHTML = ajax.responseText;
                $("#modal").modal('hide');
                        showAlert(" <strong>¡Bien!</strong> Dato agregado Correctamente.");
                        mostrar();
//    $('#Respuesta').innerHTML = ajax.responseText;
//    window.location.href="view/forms/frm_registrar_historialCambios.php";
                        // window.location.reload();
                }


                }
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.send("pkCodigo=" + pkCodigo + "&fecha=" + fecha + "&hora=" + hora + "&txtdescripcion=" + txtdescripcion);
        }

        }
;
//function que permite consultar todas los regsitros ingresado en 
// la tabla Historial_cambios
        function mostrar() {
        divConsulta = document.getElementById('mostrarFormulario');
                ajax = objetoAjax();
                ajax.open("POST", "controller/HistorialCambios_controller.php?op=2", true);
                ajax.onreadystatechange = function () {
                if (ajax.readyState == 4) {
                divConsulta.innerHTML = ajax.responseText

                }
                }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send(null);
        }
;
        //function que permite realizar filtro de registros insertados en la tabla 
                //Historial_cambios por codigo o fecha del historial
                        function  consultaXIdFecha() {
                        divConsulta = document.getElementById('mostrarFormulario');
                                txtCodigo = document.getElementById('txt_codigofiltro').value;
                                dteFecha = document.getElementById('dte_fecha').value;
                           
                                timHora = document.getElementById('tim_Hora').value;
                                 txtDescripcion = document.getElementById('text_descripcion').value;
                                if (txtCodigo == "") {
//            $('.validacion').html('<p style="color:red">Por favor ingrese Codigo del Historial</p>');
                        showAlert("<i style='color:red' class='fa fa-exclamation-circle fa-1xm'></i><strong>\n\
                                Por favor ingrese Codigo del Historial!</strong>");
                                $("#frmHistorialCambios").effect("shake", {times: 3, distance: 20}, 400);
                        } else {
                        $('.validacion').html("");
                                ajax = objetoAjax();
                                ajax.open("POST", "controller/HistorialCambios_controller.php?op=3", true);
                                ajax.onreadystatechange = function () {
                                if (ajax.readyState == 4) {
                                //   alert("si busco");
                                divConsulta.innerHTML = ajax.responseText;
                                }
                                }
                        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                ajax.send("pkCodigo=" + txtCodigo + "&fecha=" + dteFecha +"&hora="+timHora+
                                        "&txtdescripcion="+txtDescripcion);
                        }





                        }  ;
                        
                        function  filtroParaEliminarModificarCrear(){
                             divConsulta = document.getElementById('formularioElimnar');
                                txtCodigo = document.getElementById('txt_codigofiltro').value;
                                dteFecha = document.getElementById('dte_fecha').value;
                            
                                     if (txtCodigo == "") {
//            $('.validacion').html('<p style="color:red">Por favor ingrese Codigo del Historial</p>');
                        showAlert("<i style='color:red' class='fa fa-exclamation-circle fa-1xm'></i><strong>\n\
                                Por favor ingrese Codigo del Historial!</strong>");
                                $("#frmHistorialCambios").effect("shake", {times: 3, distance: 20}, 400);
                        } else {
                        $('.validacion').html("");
                                ajax = objetoAjax();
                                ajax.open("POST", "controller/HistorialCambios_controller.php?op=9", true);
                                ajax.onreadystatechange = function () {
                                if (ajax.readyState == 4) {
                                //   alert("si busco");
                                divConsulta.innerHTML = ajax.responseText;
                                }
                                }
                        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                ajax.send("pkCodigo=" + txtCodigo + "&fecha=" + dteFecha );
                        }
                            
                        };
                        function  cargarModificar() {
                        divResultado = document.getElementById('mostrarFormularioMoficar');
                                ajax = objetoAjax();
                                ajax.open("POST", "controller/HistorialCambios_controller.php?op=4", true);
                                ajax.onreadystatechange = function () {
                                if (ajax.readyState == 4) {
                                divResultado.innerHTML = ajax.responseText;
                                }
                                }
                        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                ajax.send(null);
                        }   ;
                        
                        
                        function Eliminar(pkCodigo) {
                         $.confirm({
            title: 'CONFIRMAR ELIMINACION!',
            text: 'Esta Seguro que Desea Eliminar este Registro',
            confirm: function() {
                lblResultado = document.getElementById('lblRespuestaServidorEliminado');
                ajax = objetoAjax();
                ajax.open("POST", "controller/HistorialCambios_controller.php?op=8", true);
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) {

                        lblResultado.innerHTML = ajax.responseText;
                        MostrarConsultaEliminar();
                        showAlert("<strong>¡El Registro!</strong> Fue Eliminado Correctamente.");


                    }


                }
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.send("&pkCodigo=" + pkCodigo);
            },
            cancel: function() {
                //sin Aciones
            }
        });
                }


        function Nuevo() {

        $('#modal').modal({
        backdrop: 'static',
                keyboard: false
        });
        }
        ;
///function 
                function cargarModalModificar(pkCodigo) {


                divResultado = document.getElementById('historialModalMoficar');
                        ajax = objetoAjax();
                        ajax.open("POST", "controller/HistorialCambios_controller.php?op=6", true);
                        ajax.onreadystatechange = function () {
                        if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                                $("#Modal").modal({
                        backdrop: 'static',
                                keyboard: false
                        });
                        }
                        }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        ajax.send("pkCodigo=" + pkCodigo);
                };
                function  Modificar() {
                divResultado = document.getElementById('lblRespuestaServidor');
                        txtCodigo = document.getElementById('txt_pkCodigo').value;
                        dteFecha = document.getElementById('dte_fecha').value;
                        timHora = document.getElementById('tim_hora').value;
                        txtDescripcion = document.getElementById('txta_descripcion').value;
                        ajax = objetoAjax();
                        ajax.open("POST", "controller/HistorialCambios_controller.php?op=5", true);
                        ajax.onreadystatechange = function () {
                        if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                                cargarModificar();
                                showAlert(" <strong>¡Bien!</strong> Registro Modificado Correctamente");
                        }
                        }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        ajax.send("pkCodigo=" + txtCodigo + "&fecha=" + dteFecha + "&hora=" + timHora + "&txtdescripcion=" + txtDescripcion);
                };
                function  MostrarConsultaEliminar(){
                       txtCodigo = document.getElementById('txt_codigofiltro').value="";
                                dteFecha = document.getElementById('dte_fecha').value="";

                divResultado = document.getElementById('formularioElimnar');
                        ajax = objetoAjax();
                        ajax.open("POST", "controller/HistorialCambios_controller.php?op=7", true);
                        ajax.onreadystatechange = function () {
                        if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText


                        }
                        }

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send(null);
                };
                function showAlert(msg, cb){
                $(".alerta").html(msg)
                        .fadeIn(500, function(){
                        setTimeout(function(){
                        $(".alerta").fadeOut(1000);
                                cb();
                        }, 5000);
                        });
                }








        };
        function objetoAjax() {
        var xmlhttp = false;
                try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {

        try {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
        xmlhttp = false;
        }
        }

        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
                }




  