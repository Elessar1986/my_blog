

$("#login_form").submit(function () {

    var form_data = $("#login_form").serialize();

    $.post(
        "/model/login.php",
        form_data,
        function (data) {
            if(data.succes){
                // alert("Login done!");
                location.reload();
            }else{
                alert("Wrong pas or log!");
            }
        },
        "json"
    )
    return false;
})