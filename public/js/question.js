jQuery(window).on("load", function () {
    // alert('page is loaded');

    $( "#question-title" ).append( "<h3>Question 1</h3>" );
    $( "#question-text" ).append( "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>" );
    $( "#question-inputs" ).append( " <div class=\"form-check\">\n" +
        "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\" checked>\n" +
        "                <label class=\"form-check-label\" for=\"exampleRadios1\">\n" +
        "                    First answer\n" +
        "                </label>\n" +
        "            </div>\n" +
        "            <div class=\"form-check\">\n" +
        "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\" value=\"option2\">\n" +
        "                <label class=\"form-check-label\" for=\"exampleRadios2\">\n" +
        "                    Second answer\n" +
        "                </label>\n" +
        "            </div>\n" +
        "            <div class=\"form-check\">\n" +
        "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios3\" value=\"option3\">\n" +
        "                <label class=\"form-check-label\" for=\"exampleRadios3\">\n" +
        "                    Third answer\n" +
        "                </label>\n" +
        "            </div> " );

});

$("#send").on('click', function (){
    $( "#question-title" ).empty().append( "<h3>Question 2</h3>" );
    $( "#question-text" ).empty().append( "<p>It's a second question text</p>" );
    $( "#question-inputs" ).empty().append( " <div class=\"form-check\">\n" +
        "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\" checked>\n" +
        "                <label class=\"form-check-label\" for=\"exampleRadios1\">\n" +
        "                    New first answer\n" +
        "                </label>\n" +
        "            </div>\n" +
        "            <div class=\"form-check\">\n" +
        "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\" value=\"option2\">\n" +
        "                <label class=\"form-check-label\" for=\"exampleRadios2\">\n" +
        "                    New second answer\n" +
        "                </label>\n" +
        "            </div>\n" +
        "            <div class=\"form-check\">\n" +
        "                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios3\" value=\"option3\">\n" +
        "                <label class=\"form-check-label\" for=\"exampleRadios3\">\n" +
        "                    New third answer\n" +
        "                </label>\n" +
        "            </div> " );
})