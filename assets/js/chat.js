$(function() {
   setInterval(leer(),3) ;
});

function leer() {
    $('#conversacion').load("leer.php");
}
function escribir() {
    var mensaje =$('textarea').val();
    var usuario= $('input:text').val();
    $.ajax({
        type:"POST",
        url:"escribir.php",
        data:{"mensaje":mensaje,"usuario":usuario},
        success:function() {
            leer();
        }

    });
}