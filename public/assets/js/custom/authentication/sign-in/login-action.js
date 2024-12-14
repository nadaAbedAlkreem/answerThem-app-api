
$(document).ready(function ($) {



    $("#kt_sign_in_submit").on("click", function (e) {
        e.preventDefault();
        console.log('aaa')
        let formData = new FormData($("#kt_sign_in_form")[0]);
        console.log(formData);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "auth/login",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                console.log(response);
                Swal.fire({
                    text: "You have successfully login data!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });

            },

            error: function (response) {
                console.log(response);
                console.log("response");
                Swal.fire({
                    text: response.responseJSON.message,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
            },
        });
    });

});

