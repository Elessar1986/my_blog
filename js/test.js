$(document).ready(function () {
    console.log("Starting...");
    $.post(
        '/model/test.php',
        function (data)
        {
            $('#login_div').addClass('hide');
            console.log("Hide!" + data.text);

        },
        'json'
    );

})