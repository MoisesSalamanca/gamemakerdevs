$(document).ready(function() {

    $('#log-hast').click(function(){

        var dataString = $('#log-pash').serialize();
        $.ajax({
            type: "POST",
            url: "./php/Formin.php",
            data: dataString,
           beforeSend: function () { //acion en el proceso
                    $('.BoxAnswer97I').hide();
                    $('.MistakI1').hide();
                    $('.MistakI2').hide();
                    $('.born-loadI').css('display','block');
                },
            success: function(data) {
                $('.born-loadI').hide();
                $('.BoxAnswer97I').css('display','block');
                $('#resultado').html(data);
            }
        });
        return false;
    });
});

$(document).ready(function() {

    $('#checkpe9').click(function(){

    var checkeado = document.getElementById("checkpe9").checked;

    var elemento = document.getElementById("cheto33");

    if ((elemento.className == "check7") && (checkeado == true)){

      elemento.className = "check8";

    }else{

      elemento.className = "check7";

         }

    });
});