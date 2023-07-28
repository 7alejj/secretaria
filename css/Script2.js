$(document).ready(function(){

    var nav = $("#nav");
    var title = $("head").find("title").text();
    
    if(title == "Mis Cursos"){nav.find("#a-pr2").addClass("activo2");}
    if(title == "Asistencias"){nav.find("#a-pr1").addClass("activo2");}
    if(title == "Agregar Alumnos"){nav.find("#a-pr3").addClass("activo2");}
});