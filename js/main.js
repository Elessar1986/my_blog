
$(".back_button").click(function () {
    history.back();
    return false;
});


$(".exit_button").click(function () {
    alert("Exit");
    $.post(
        "/model/login.php",
        { "exit" : "1"},
        function (data) {
            location.reload();
        },
        "json"
    );
    return false;
});



