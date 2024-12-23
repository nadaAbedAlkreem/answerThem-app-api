
$(document).ready(function ($) {
    $("#kt_sign_up_submit").on("click", function (e) {
        e.preventDefault();
        let formData = new FormData($("#kt_sign_up_form")[0]);
        console.log(formData);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "admin/register",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                 Swal.fire({
                    text: "You have successfully register data!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                 window.location.href = 'admin/login';


            },

            error: function (response) {
                 Swal.fire({
                     text: response.responseJSON.data.error,
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

