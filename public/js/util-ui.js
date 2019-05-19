//50文字の制限が正常に作動していません
$(function () {

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "選択してください");


    $("#nameForm").validate({
        rules: {
            todohuken: {
                valueNotEquals: "msg"
            },
            lastname: {
                required: true,
                maxlength: 50
            },
            firstname: {
                required: true,
                maxlength: 50
            },
            customernumber: {
                required: true,
                number: true
            },
        },
        messages: {
            todohuken: {
                equalTo: "選択してください"
            },
            lastname: {
                required: "必須項目です",
                maxlength: '50字以下で入力して下さい'
            },
            firstname: {
                required: "必須項目です",
                maxlength: '50字以下で入力して下さい'
            },
            customernumber: {
                required: "必須項目です",
                number: "数字のみ入力してください"
            },

        },
        errorClass: "error_msg",
        wrapper: "li"
    });
});

