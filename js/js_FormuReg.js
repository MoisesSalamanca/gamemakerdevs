$(document).ready(function() {

    $('#btn_enviar').click(function(){

        var dataString = $('#FORMULARIO-REGISTRO_R').serialize();
        $.ajax({
            type: "POST",
            url: "./php/FormExt.php",
            data: dataString,
           beforeSend: function () { //acion en el proceso
                        $('.BoxAnswer97').hide();
                        $('.MistakeR01').hide();
                        $('.MistakeR02').hide();
                        $('.MistakeR03').hide();
                        $('.born-load').css('display','block');
                },
            success: function(data) {
                $('.born-load').hide();
                $('.BoxAnswer97').css('display','block');
                $('#resultado').html(data);
                
            }
        });
        return false;
    });
});



/*function runScript(e) {
    if (e.keyCode == 13) {
        
        var dataString = $('#FORMULARIO-REGISTRO_R').serialize();
        $.ajax({
            type: "POST",
            url: "./php/RegistroFormulario.php",
            data: dataString,
            success: function(data) {
                $('#resultado').html(data);
            }
        });
    }
}
*/