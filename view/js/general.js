$(document).ready(function(){
    $(".menu  a").click(function (){
       var href = $(this).attr("href");
       console.log(href);
       $(".content").load(href);
       
    });
});