$(function () {

    // funcion que se ejecuta cuando se hace submit en el form 
    $("form").submit(function (e) {
//se cancela el evento del click para que no cambie de pagina.
        e.preventDefault();
        var controller = $("form").attr("action");
        var method = $("form").attr("method");
        var name = $("form").attr("name");
        var data = $("form").serialize() + "&petition=" + name;
        ajax(controller, data, method, respuesta);
    });
});

function respuesta(data) {

    var respuesta = document.getElementById("respuesta");
    respuesta.innerHTML = "";
    respuesta.innerHTML = data;
}



