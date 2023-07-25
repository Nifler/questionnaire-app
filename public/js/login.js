
function login() {

    var url = $(location).attr("origin") + '/api/login';

    var email = $("#email");
    var password = $("#password");
    var emailRequired = $("#email + label > span");
    var passwordRequired = $("#password + label > span");
    $(".error-message").empty();

    let data = {
        email: email.val(),
        password: password.val()
    };

    if (!data.email) {
        emailRequired.append('required');
        return;
    }

    if (!data.password) {
        passwordRequired.append('required');
        return;
    }

    $.post( url, data )
        .done(function( respondData ) {
            window.location.replace($(location).attr("origin") + '/admin');
        })
        .fail(function( respondData ) {
            $("#error-message").append(respondData.responseJSON.message)
        });

}

$( "form.login-form > button" ).on( "click", function( event ) {
    login();
});