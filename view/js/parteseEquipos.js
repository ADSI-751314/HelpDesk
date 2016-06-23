app.parteseEquipos = function() {
    
    mostrarPartesEquipos();


    $("#form-container").on('click', '.btn_partesEquipos', function(e) {
        e.preventDefault();//se cancela el evento del click para que no cambie de pagina.


        var btnId = this.id;

        switch (btnId) {
            case 'btn-pte-registrar':
                Registrar();
                break;


            case 'btn-pte-consultarTodo' :
                mostrarPartesEquipos();
                break;

            case 'btn_pte_filtar' :
                filtroPartes();
                break;

            case 'btn-pte-modificarPartes':
                modificarPartesEquipos();
                break;


            case 'btn-inv-consultarEliminar':
                MostrarConsultaEliminar();
                break;

            case 'botonModal':
                Nuevo();
                break;
            default:
                break;


        }
    });
    $("#form-container").on('click', '.btn_modificar_eliminar', function(e) {
        var btnId = this.id;
        var data = ($(this).data("value"));
        switch (btnId) {

            case 'btn_modificarParte':
                cargarModalModificar(data);
                break;

            case 'btn_eliminarParte':
                EliminarParteEquipo(data);
                break;

            default:
                break;


        }
    });

    $("#form-container").on('click', '.MostarPartes', function(e) {
        e.preventDefault();//se cancela el evento del click para que no cambie de pagina.
        var frmId = this.id;

        switch (frmId) {
            case 'gestionPartes':
                mostrarPartesEquipos();
                break;
            default :
                break;





        }

    });

//funcion que permite registrar el historial de cambios 
//la cual envia cuatro parametros al servidor desde el cliente
// codigo , fecha , hora y descripcion
    function Registrar() {
        divResultado = document.getElementById('lblRespuestaServidor');
        pkCodigo = document.getElementById('txtPkCodigo').value;
        serial = document.getElementById('txtSerial').value;
        marca = document.getElementById('txtMarca').value;
        descripcion = document.getElementById('txtDescripcion').value;
        estado = document.getElementById('txtEstado').value;
        fkCodigoEquipo = document.getElementById('sltEquipó').value;
        fkCodigoHistorial = document.getElementById('sltHistorial').value;


        if (pkCodigo == "") {

            $('.validacion').html('<p style="color:red">debe ingresar codigo</p>');
            $("#frmPArtesEquipos").effect("shake", {times: 3, distance: 20}, 400);
        } else {

            ajax = objetoAjax();
            ajax.open("POST", "controller/partesEquipos_controller.php?op=1", true);
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {

                    divResultado.innerHTML = ajax.responseText;
                    $('#modal').modal('hide');                    
                    showAlert(" <strong>¡Bien!</strong> El Registro " + "<strong>'" + pkCodigo + "'\n\
                    </strong>" + " fue agregado Correctamente.");
                    mostrarPartesEquipos();
                    

                }


            }
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send("pkCodigo=" + pkCodigo + "&serial=" + serial + "&marca=" + marca + "&descripcion=" + descripcion +
                    "&estado=" + estado + "&equipoCodigo=" + fkCodigoEquipo + "&historialCodigo=" + fkCodigoHistorial);

        }

    }
    ;

//function que permite consultar todas los regsitros ingresado en 
// la tabla Historial_cambios
    function mostrarPartesEquipos() {
        txtCodigo = document.getElementById('txt_codigofiltro').value = "";
        txtSerial = document.getElementById('txt_SerialFiltro').value = "";
        divConsulta = document.getElementById('mostrarFormulario');
        ajax = objetoAjax();
        ajax.open("POST", "controller/partesEquipos_controller.php?op=0", true);
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
                divConsulta.innerHTML = ajax.responseText;


            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(null);
    }
    ;

    //function que permite realizar filtro de registros insertados en la tabla 
    //Historial_cambios por codigo o fecha del historial
    function  filtroPartes() {
        divConsulta = document.getElementById('mostrarFormulario');
        txtCodigo = document.getElementById('txt_codigofiltro').value;
        txtSerial = document.getElementById('txt_SerialFiltro').value;

        if (txtCodigo == "") {
            $('.Validacion').html("<i style='color:red' class='fa fa-exclamation-circle fa-1xm'>\n\
            </i><strong>Por favor ingrese Codigo de Parte!</strong>").fadeIn(500, function() {
                    setTimeout(function() {
                        $(".Validacion").fadeOut(1000);
                        cb();
                    }, 5000);
                });


            $("#contenedor").effect("shake", {times: 3, distance: 20}, 400);

        } 
         
        
        else {
            $('.validacion').html("");

            ajax = objetoAjax();
            ajax.open("POST", "controller/partesEquipos_controller.php?op=4", true);
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {
                    //   alert("si busco");
                    divConsulta.innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send("pkCodigo=" + txtCodigo + "&serial=" + txtSerial);

        }
    };

    function  cargarModalModificar(pkPteCodigo) {
        divResultado = document.getElementById('FormularioModificar');
        ajax = objetoAjax();
        ajax.open("POST", "controller/partesEquipos_controller.php?op=2", true);
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                $("#modalModificar").modal({
                    backdrop: 'static',
                    keyboard: false
                });

            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("pkCodigo=" + pkPteCodigo);
    }
    ;

    function modificarPartesEquipos() {

        divResultado = document.getElementById('lblRespuestaServidor');
        pkCodigo = document.getElementById('txtPkCodigoModal').value;
        serial = document.getElementById('txtSerialModal').value;
        marca = document.getElementById('txtMarcaModal').value;
        descripcion = document.getElementById('txtDescripcionModal').value;
        estado = document.getElementById('txtEstadoModal').value;
        fkCodigoEquipo = document.getElementById('sltEquipoModal').value;
        fkCodigoHistorial = document.getElementById('sltHistorialModal').value;

        if (fkCodigoEquipo == "SELECCIONE--->" || fkCodigoHistorial ==  "") {

            $(".Validacion").html("<i style='color:red' class='fa fa-exclamation-circle fa-1xm'></i><strong> Nombre equipo\n\
             y Historial Cambios!</strong><br>\n\
            Son campos obligatorios "
                    ).fadeIn(500, function() {
                setTimeout(function() {
                    $(".Validacion").fadeOut(1000);
                }, 5000);
            });


            $("#modalModificar").effect("shake", {times: 2, distance: 20}, 400);

        } else {

            ajax = objetoAjax();
            ajax.open("POST", "controller/partesEquipos_controller.php?op=3", true);
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {
                    divResultado.innerHTML = ajax.responseText;
                    $('#modalModificar').modal('hide');
                    mostrarPartesEquipos();
                    showAlert(" <strong>¡Bien!</strong> Se a  Modificado el Registro " + "<strong>'" + pkCodigo + "'</strong>" +
                            " Correctamente ");

                }
            }
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send("pkCodigo=" + pkCodigo + "&serial=" + serial + "&marca=" + marca + "&descripcion=" + descripcion +
                    "&estado=" + estado + "&equipoCodigo=" + fkCodigoEquipo + "&historialCodigo=" + fkCodigoHistorial);


        }






    }
    ;

    function EliminarParteEquipo(pkCodigo) {

        $.confirm({
            title: 'CONFIRMAR ELIMINACION!',
            text: 'Esta Seguro que Desea Eliminar este Registro',
            confirm: function() {
                lblResultado = document.getElementById('lblRespuestaServidor');
                ajax = objetoAjax();
                ajax.open("POST", "controller/partesEquipos_controller.php?op=5", true);
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) {

                        lblResultado.innerHTML = ajax.responseText;
                        mostrarPartesEquipos();
                        showAlert("<strong>¡El Registro! </strong>"+ "'"+ pkCodigo+ "'"+"  Fue Eliminado Correctamente.");


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



   
    function showAlert(msg, cb) {
        $(".alerta").html(msg)
                .fadeIn(500, function() {
                    setTimeout(function() {
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



