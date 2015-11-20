// funcion que se ejecuta cuando la pagina ya termino de cargar.
$(function(){
    // funcion que se ejecuta cuando se hace submit en el form 
    $("form").submit(function(e){
        //se cancela el evento del click para que no cambie de pagina.
        e.preventDefault();
        
        var controller = $("form").attr("action");
        var method = $("form").attr("method");
        var name = $("form").attr("name");
        var data = $("form").serialize()+"&petition="+name;
        
        ajax(controller,data,method,respuesta);  
    }); 
});

function respuesta(data){
    
    $("#respuesta").html(data);
    
}