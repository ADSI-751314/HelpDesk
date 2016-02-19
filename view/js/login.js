 $(function () {

     //-----------------Control de efectos-------------------

     $(".txt-login").on({
         focus : function (){
             $(this).prev().addClass("active-fa");
             $(this).prev().css("color", "rgb(255,255,255)");
         },
         blur : function () {
             $(this).prev().removeClass("active-fa");
             if ($(this).val() !== "") {
                 $(this).prev().css("color", "rgb(23, 170, 86)");
             } else {
                 $(this).prev().css("color", "rgb(255,255,255)");
             }
         }
     });

     //-----------------Funcionalidad-----------------

     $("form").on("submit", function (e) {
         e.preventDefault();

         var username = $("input[name=txtUsername]").val();
         var password = $("input[name=txtPassword]").val();

         if(username.trim() == ""){
             $("#txtUsu").parent().toggleClass("txtBox-error");
             showAlert("<i class='fa fa-exclamation-circle fa-1xm'></i> Por favor ingrese su nombre de usuario", function(){
                 $("#txtUsu").parent().toggleClass("txtBox-error");
             });
         }
         else if(password.trim() == ""){
             $("#txtPass").parent().toggleClass("txtBox-error");
             showAlert("<i class='fa fa-exclamation-circle fa-1xm'></i> Por favor ingrese su contraseña", function(){
                 $("#txtPass").parent().toggleClass("txtBox-error");
             });
         }
         else{
             var action = $(this).attr("action");
             var name = $(this).attr("name");
             var data = $(this).serialize()+"&action="+name;
             var method = $(this).attr("method");

             ajax(action,data,method,loginRequestHandler);
         }
     });

     function loginRequestHandler(response){
         var alert = $("#alert");
         
         if (response.trim()) {
             alert.html("Bienvenido!");
             alert.fadeIn(500, function () {window.location.reload();});
        }else{
             showAlert("<i class='fa fa-exclamation-circle fa-1xm'></i>Nombre de usuario o contraseña incorrecta!");
             $("#frm-login").effect("shake",{times:3, distance:20},400);
        }
     }

     function showAlert(msg, cb){
         $("#alert").html(msg)
             .fadeIn(500,function(){
                 setTimeout(function(){
                     $("#alert").fadeOut(1000);
                     cb();
                 },5000);
             });
     }
 });
