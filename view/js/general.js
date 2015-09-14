$(document).ready(function (e) {
    setInterval(11000);
    $(".loadfrm").click(function () {
        var y = $(this).attr("href");
        var respuesta = $(".content");
        respuesta.load(y);
        return false;
    });
    
    //-----------------Control de efectos menu principal-------------------
    $(".user").on("click",function(){
        $(".usr-options").slideToggle(200);
        $(this).toggleClass("active-usr");
    });
    $(".usr-options").on("click",function (){
        $(this).slideUp(200);
        $(".user").removeClass("active-usr");
    });
    
    $(".loadfrm").on("click",function (){
       $(this).siblings("ul").slideToggle(200);
    });
    
    //-----------------Control de efectos login-------------------
    $(".txt-login").on("focus",function (){
        $(this).siblings(".fa").addClass("active-fa");
    });
    $(".txt-login").on("blur",function (){
        $(this).siblings(".fa").removeClass("active-fa");
    });
});