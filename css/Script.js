$(document).ready(function(){

    var nav = $("#nav");
    var title = $("head").find("title").text();
    
    if(title == "Ayuda"){nav.find("#a-s1").addClass("activo");}
    if(title == "Inicio"){nav.find("#a-s2").addClass("activo");}
    if(title == "Registrarme"){nav.find("#a-s3").addClass("activo");}
});