$(document).ready(function () {

    $('#validate').validate({ // initialize the plugin
        rules: {
            ten_nguoi_mua: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) { // for demo
            alert('bắt lỗi form khi submit'); // for demo
            return false; // for demo
        }
    });

});