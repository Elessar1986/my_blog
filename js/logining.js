

$("#login_form").submit(function () {

    var form_data = $("#login_form").serialize();
    $(".login_error").html("");
    $.post(
        "/model/login.php",
        form_data,
        function (data) {
            if(data.succes){
                // alert("Login done!");
                location.reload();
            }else{
                $(".login_error").html("<p class='red-text'>Неправильный логин или пароль</p>");
            }
        },
        "json"
    )
    return false;
})