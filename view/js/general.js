$(document).ready(function(){
    $(".menu li a").click(function (){
       var href = $(this).attr("href");
       console.log(href + typeof(href));
       $(".content").load(href);
    });
});