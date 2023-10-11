function sendRespond() {
    var url = $(location).attr("origin") + '/api/updateMyEmail';

    let respondData = {
        email: $('#email').val()
    };

    $.post( url, respondData )
        .done(function( data ) {
            successChange();
        })
        .fail(function(data) {
            errorChange(data);
        });
}

function successChange()
{
    $('.form-group').empty();
    $('#error').empty();
    $('#email-msg').empty();
    $('#send').remove();
}

function errorChange(data)
{
    $('#error').empty();
    $('#error').append(data.responseJSON.message);
}

$("#send").on('click', function (){
    sendRespond();
})