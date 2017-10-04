

$("#reg_form").change(function () {

    $("#errors_list").empty();

    console.log("Form check run...");
    var form_data = $("#reg_form").serialize();

    $.post(
        "/model/reg_form_check.php",
        form_data,
        function (data) {
            if(data.login){
                $("#errors_list").append("<li>Такой логин уже существует</li>");
            }
            if(data.email){
                $("#errors_list").append("<li>Такой E-Mail уже существует</li>");
            }
            if($("#Password").val() != "" && data.pas_lenght) {
                $("#errors_list").append("<li>Пароль должен быть длинее восьми символов</li>");
            }
            if($("#Password").val() != "" &&  data.pas_to_pas){
                $("#errors_list").append("<li>Пароль не совпадает</li>");
            }

        },
        "json"
    );

});

// $("#reg_form").submit(function () {
//
//     $("#errors_list").empty();
//
//     console.log("Form check run...");
//     var form_data = $("#reg_form").serialize();
//
//     $.post(
//         "/model/reg_form_check.php",
//         form_data,
//         function (data) {
//             if(!data.login &&
//                 !data.email &&
//                 $("#Password").val() != "" &&
//                 !data.pas_to_pas){
//                 $("#reg_form").submit();
//             }
//             else{
//                 if(data.login){
//                     $("#errors_list").append("<li>Такой логин уже существует</li>");
//                 }
//                 if(data.email){
//                     $("#errors_list").append("<li>Такой E-Mail уже существует</li>");
//                 }
//                 if($("#Password").val() != "" && data.pas_lenght) {
//                     $("#errors_list").append("<li>Пароль должен быть длинее восьми символов</li>");
//                 }
//                 if($("#Password").val() != "" &&  data.pas_to_pas){
//                     $("#errors_list").append("<li>Пароль не совпадает</li>");
//                 }
//
//             }
//
//         },
//         "json"
//     );
//
// });


$("#reg_back").click(function () {
    history.back();
    return false;
})