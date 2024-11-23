
document.querySelector('#allow-copy_script').remove();

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("kt_project_settings_form");
    const changedData = []; // Array to store changed inputs

    // Track changes in form inputs
    form.addEventListener("input", function (event) {
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
    });


    $(document).ready(function () {
        $('#setting_form').click(function (event) {
            event.preventDefault();

            console.log(changedData.length);
            if (changedData.length === 0) {
                Swal.fire({
                    text: "Successfully updated changes.",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
                return;
            }

            const formData = new FormData(document.getElementById("kt_project_settings_form"));
            formData.append('changedData', JSON.stringify(changedData)); // Append changed data

            console.log(formData); // Debug the form data content

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            console.log("nada");

            console.log($('meta[name="csrf-token"]').attr('content'));

            $.ajax({
                type: "POST",
                url: "/dashboard/setting/update",
                data: formData,
                processData: false, // Disable jQuery's default data processing
                contentType: false, // Let FormData handle content type
                success: function () {
                    Swal.fire({
                        text: "Successfully updated changes.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                },
                error: function (response) {
                    console.log("response");
                    console.log(response);
                    Swal.fire({
                        text: response,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                },
            });
        });
    });
});
