/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
    alert("data");
}

