
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("kt_project_settings_form");
    const changedData = []; // Array to store changed inputs
    var successMessage = window.translations.success_message;
    var OK = window.translations.OK;
    var lang = window.location.pathname.split('/').pop();

    // Track changes in form inputs
    form.addEventListener("input", trackChange);
    form.addEventListener("paste", trackChange);
    form.addEventListener("cut", trackChange);

    function trackChange(event) {
        const input = event.target;

        if (input.name && input.value !== input.defaultValue) {
            const existingIndex = changedData.findIndex((item) => item.key === input.name);

            if (existingIndex > -1) {
                // Update the value if it already exists in the array
                changedData[existingIndex].value = input.value;
            } else {
                // Add new change
                changedData.push({ key: input.name, value: input.value });
            }
        }
    }


    $(document).ready(function () {
        $('#setting_form').click(function (event) {
            event.preventDefault();
            if (changedData.length === 0) {
                Swal.fire({
                    text: successMessage,
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: OK,
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
                return;
            }
            console.log(changedData);

            const formData = new FormData(document.getElementById("kt_project_settings_form"));
            formData.append('changedData', JSON.stringify(changedData)); // Append changed data

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            console.log($('meta[name="csrf-token"]').attr('content'));

            $.ajax({
                type: "POST",
                url: "dashboard/setting/update?lang="+lang,
                data: formData,
                processData: false, // Disable jQuery's default data processing
                contentType: false, // Let FormData handle content type
                success: function (response) {
                    Swal.fire({
                        text: successMessage,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: OK,
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                },
                error: function (response) {
                     Swal.fire({
                        text: response.responseJSON.data.error,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: OK,
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                },
            });
        });
    });
});
