$(document).ready(function(){
    $(".hamburger").click(function(){
        $(".menulateral").toggleClass("posicion");
        $(".hamburger").toggleClass("is-active");
    });
    $(".iconos .caja").click(function(){
        var somos_change = $(this).attr("data-somos");
        
        $(".iconos .caja").removeClass("activo");
        $(this).addClass("activo");
        $(".textosomos").removeClass("activo");
        $("#"+somos_change).addClass("activo");
    });
});