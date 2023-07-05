
function drawQuestion() {

    var pollId = window.location.pathname.split('/').slice(-1).toString();

    var url = $(location).attr("origin") + '/api/questions?pollId=' + pollId + '&next=1';

    $.get( url, { link: url } )
        .done(function( data ) {
            var title = $('#question-title');
            var text = $('#question-text');
            title.empty();
            text.empty();
            $('#question-inputs').empty();
            $('#error').empty();
            if (data.success) {
                var question = data.data[0]

                title.append(question.title);
                text.append(question.description);


            } else {
                $( "#error" ).append(data.message);
            }
        });
    console.log(questionData);
}

jQuery(window).on("load", function () {

    drawQuestion();






    // $( "#question-inputs" ).append( " <div class=\"form-check\">\n" +
    //     "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\" checked>\n" +
    //     "                <label class=\"form-check-label\" for=\"exampleRadios1\">\n" +
    //     "                    First answer\n" +
    //     "                </label>\n" +
    //     "            </div>\n" +
    //     "            <div class=\"form-check\">\n" +
    //     "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\" value=\"option2\">\n" +
    //     "                <label class=\"form-check-label\" for=\"exampleRadios2\">\n" +
    //     "                    Second answer\n" +
    //     "                </label>\n" +
    //     "            </div>\n" +
    //     "            <div class=\"form-check\">\n" +
    //     "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios3\" value=\"option3\">\n" +
    //     "                <label class=\"form-check-label\" for=\"exampleRadios3\">\n" +
    //     "                    Third answer\n" +
    //     "                </label>\n" +
    //     "            </div> " );





});

$("#send").on('click', function (){

})