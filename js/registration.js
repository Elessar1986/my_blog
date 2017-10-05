

$("#reg_form").change(function () {

    $("#errors_list").empty();
    $('#reg_button').prop('disabled', false);

    console.log("Form check run...");
    var form_data = $("#reg_form").serialize();

    $.post(
        "/model/reg_form_check.php",
        form_data,
        function (data) {
            if(data.login){
                $("#errors_list").append("<li>Такой логин уже существует</li>");
                $('#reg_button').prop('disabled', true);
            }
            if(data.email){
                $("#errors_list").append("<li>Такой E-Mail уже существует</li>");
                $('#reg_button').prop('disabled', true);
            }
            if($("#Password").val() != "" && data.pas_lenght) {
                $("#errors_list").append("<li>Пароль должен быть длинее восьми символов</li>");
                $('#reg_button').prop('disabled', true);
            }
            if($("#Password").val() != ""  && $("#Password1").val() != ""  &&  data.pas_to_pas){
                $("#errors_list").append("<li>Пароль не совпадает</li>");
                $('#reg_button').prop('disabled', true);
            }

        },
        "json"
    );

});



$("#reg_back").click(function () {
    history.back();
    return false;
})