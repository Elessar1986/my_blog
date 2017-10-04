
// $("#Login").change(function () {
//    console.log("key presed");
//    $("#wrong_login").addClass("hide");
//     $('#reg_button').removeClass('disabled');
//    var name = $("#Login").val();
//    $.post(
//        '/model/check_login.php',
//        {
//            'login' : name
//        },
//        function (data)
//        {
//            if(data.answer == '1'){
//                console.log("exist ::" + data.res);
//                $("#wrong_login").removeClass("hide");
//                $('#reg_button').addClass('disabled');
//            }else{
//                console.log("not exist ::" + data.res);
//            }
//        },
//        'json'
//    );
// });
//
// $("#Email").change(function () {
//     console.log("key presed");
//     $("#wrong_login").addClass("hide");
//     $('#reg_button').removeClass('disabled');
//     var mail = $("#Email").val();
//     $.post(
//         '/model/check_login.php',
//         {
//             'email' : mail
//         },
//         function (data)
//         {
//             if(data.answer == '1'){
//                 console.log("exist ::" + data.res);
//                 $("#wrong_email").removeClass("hide");
//                 $('#reg_button').addClass('disabled');
//             }else{
//                 console.log("not exist ::" + data.res);
//             }
//         },
//         'json'
//     );
// });

$("#reg_form").change(function () {
    console.log("Form check run...");
    var form_data = $("#reg_form").serialize();

    $.post(

    )
})


$("#Password1").change(function () {
    $("#wrong_pas").addClass("hide");
    if($("#Password").val() != $("#Password1").val()){
        $("#wrong_pas").removeClass("hide");
    }
})