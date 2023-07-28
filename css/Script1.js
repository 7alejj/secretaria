$(document).ready(function(){

    var nav = $("#nav");
    var title = $("head").find("title").text();
    
    
    if(title == "Preceptores"){nav.find("#a-s1").addClass("activo1");}
    if(title == "Cursos"){nav.find("#a-s2").addClass("activo1");}
    if(title == "Profesores"){nav.find("#a-s3").addClass("activo1");}
    if(title == "Solicitudes"){nav.find("#a-s4").addClass("activo1");}
    if(title == "Ayuda"){nav.find("#a-s5").addClass("activo1");}
});