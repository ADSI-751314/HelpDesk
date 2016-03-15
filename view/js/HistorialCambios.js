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
