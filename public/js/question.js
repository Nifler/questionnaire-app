
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

                if (data.data[0] === undefined) {
                    window.location.replace($(location).attr("origin") + '/poll/' + pollId + '/finished');
                }
                var question = data.data[0]
                var body = $("body");

                body.data( "question_id", question.id );
                body.data( "question_type_id", question.question_type_id );
                body.data( "poll_id", pollId );

                title.append(question.title);
                text.append(question.description);

                drawAnswers(question.id, question.multi_answers);

            } else {
                $( "#error" ).append(data.message);
            }
        })
        .fail(function( respondData ) {
            console.log(respondData.responseJSON.message);
        });
}

function drawAnswers(questionId, multiAnswers) {
    var url = $(location).attr("origin") + '/api/answers?questionId=' + questionId;

    $.get( url, { link: url } )
        .done(function( data ) {

            var questionInputs = $('#question-inputs');

            questionInputs.empty();
            var inputType = 'radio';
            if (multiAnswers) {
                inputType = 'checkbox';
            }

            var questionStr = '';
            for (const [key, question] of Object.entries(data.data)) {

                questionStr +=
                    ' <div class="form-check">' +
                    '     <input class="form-check-input" type="' + inputType + '" name="answer" value="' + question.id + '">' +
                    '     <label class="form-check-label" for="answer">' +
                                question.title +
                    '     </label>' +
                    '</div>'
            }

            questionInputs.append(questionStr);
        });
}

function sendRespond() {
    var url = $(location).attr("origin") + '/api/responds';

    var answerId = $('input[name="answer"]:checked');

    var selectedIds = [];
    answerId.each(function() {
        selectedIds.push($(this).val());
    });

    var body = $( "body" );

    let respondData = {
        poll_id: body.data('poll_id'),
        question_type_id: body.data('question_type_id'),
        question_id: body.data('question_id'),
        answer_ids: selectedIds
    };

    $.post( url, respondData )
        .done(function( data ) {
            drawQuestion();
        });
}

jQuery(window).on("load", function () {
    drawQuestion();
});

$("#send").on('click', function (){
    sendRespond();
})