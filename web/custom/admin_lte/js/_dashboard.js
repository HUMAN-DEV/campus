$(document).ready(function () {

    $("#consultar_x_estudiante").on('click', '', '', function () {

        var code = $("#id_estudiante").val();
        var student = $("#doc_estudiante").val();
        var route = Routing.generate('report_x_student', {code: code, student: student});

        console.log(route);

        $.ajax({
            url: route,
            dataType: 'html',
            type: 'GET',
            success: function (data) {
                console.log(data + 'd');
                $('#main').html(data);
            },
            error: function (data) {
                console.log(data.code + 'e');
                $('#notification-bar').text('An error occurred');
            }
        });
    })


})