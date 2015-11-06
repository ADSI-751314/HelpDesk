 $(function () {

     //-----------------Control de efectos-------------------

     $(".txt-login").on("focus",function (){
         $(this).parent().prev().addClass("active-fa");
         $(this).parent().prev().css("color", "rgb(255,255,255)");
     });
     $(".txt-login").on("blur",function (){
         $(this).parent().prev().removeClass("active-fa");
         if($(this).val() != "") {
             $(this).parent().prev().css("color", "rgb(23, 170, 86)");
         }else{
             $(this).parent().prev().css("color", "rgb(255,255,255)");
         }
     });

     //-----------------Funcionalidad-----------------

     $("form").on("submit", function (e) {
         //e.preventDefault();
         var action = $(this).attr("action");
         var data = $(this).serialize();
         var method = $(this).attr("method");

         ajax(action,data,method,loginRequestHandler);
     });

     function loginRequestHandler(response){
         alert(response);
     }
 });
