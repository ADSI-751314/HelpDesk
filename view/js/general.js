$(document).ready(function (e) {
    setInterval(11000);
    $(".loadfrm").click(function () {
        var y = $(this).attr("href");
        var respuesta = $(".content");
        respuesta.load(y);
        return false;
    });
    
    //-----------------Control de efectos-------------------
    $(".user").on("click",function(){
        $(".usr-options").slideToggle(200);
        $(this).toggleClass("active-usr");
    });
    $(".usr-options").on("click",function (){
        $(this).slideUp(200);
        $(".user").removeClass("active-usr");
    });
});