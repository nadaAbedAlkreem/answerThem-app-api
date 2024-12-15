
$(document).ready(function ($) {


    var lang = window.location.pathname.split('/').pop(); // Example: 'en', 'fr', etc.

     $("#questions-table").DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        lengthChange: false,
        searching: false,
        info: false,
        ajax: {
            url: "dashboard/question/".lang,
            data: function (d) {
                d.lang = lang;
                d.category = $('#category').val();  // Get the selected value from dropdown

            },
        },
        columns:  [
            { data: 'action', name: 'action', orderable: false, searchable: false },
            { data: "Question", name: "Question" },
            { data: "Answers", name: "Answers" },
            { data: "Category", name: "Category" },
        ],
        pageLength: 10, // Set the number of rows per page
        lengthMenu: [10, 25, 50, 100], // Allow users to select the number of rows
        order: [[0, 'asc']] ,// Default ordering (optional)
        responsive: true, // Makes it responsive
        dom: '<"top"f>rt<"bottom"lp><"clear">', // Customize DataTable layout (pagination, search, etc.)
    });
    $('#apply').on('click', function () {
        $("#questions-table").DataTable().ajax.reload();
    });

    $("#submit_form_question").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#kt_modal_create_app_question_form")[0]);



        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "dashboard/question/create",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                 Swal.fire({
                    text: "You have successfully add data!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#questions-table").DataTable().ajax.reload();

            },

            error: function (response) {

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
    $("#questions-table").on("click", ".updateRecord", function (e)
    {
        e.preventDefault();
        var id = $(this).data("id");
        var category_id = $(this).data("category");
        var answer_text_ar = $(this).data("answer_text_ar_1");
        var is_correct_index = $(this).data("is_correct");
        var question_en_text = $(this).data("question_en_text");
        var question_ar_text = $(this).data("question_ar_text");
        var image = $(this).data("image");

        // Find the radio button with the   value

        // Select the radio button with the matching value
        const radioToCheck = document.querySelector(`input[class="correct_answer_ar_update"][value="${is_correct_index}"]`);

        if (radioToCheck) {
            radioToCheck.checked = true;
            const radioToCheck_en = document.querySelector(`input[class="correct_answer_en_update"][value="${is_correct_index}"]`);
            radioToCheck_en.checked = true;

        }

        $('#id_update').val(id);
        $('#answer_text_en_1').val($(this).data("answer_text_en_1"));
        $('#answer_text_en_2').val($(this).data("answer_text_en_2"));
        $('#answer_text_en_3').val($(this).data("answer_text_en_3"));
        $('#answer_text_en_4').val($(this).data("answer_text_en_4"));

        $('#answer_text_ar_1').val( $(this).data("answer_text_ar_1"));
        $('#answer_text_ar_2').val( $(this).data("answer_text_ar_2"));
        $('#answer_text_ar_3').val( $(this).data("answer_text_en_3"));
        $('#answer_text_ar_4').val( $(this).data("answer_text_ar_4"));


        $('#question_ar_text').val(question_ar_text);
        $('#question_en_text').val(question_en_text);


        var dropdown = document.getElementById('category_id');
        dropdown.value = category_id;

        var imageWrapper = document.querySelector('.image-update');

        if (image) {
            imageWrapper.style.backgroundImage = `url('${image}')`;
         } else {
         }

    });

    $("#submit_form_question_update").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#kt_modal_update_questions_app_form")[0]);


        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "post",
            url: "dashboard/question/update",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                Swal.fire({
                    text: "You have successfully Update data !",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#questions-table").DataTable().ajax.reload();
            },

            error: function (response) {
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




    $("#questions-table").on("click", ".deleteRecord[data-id]", function (e)
    {
        e.preventDefault();
        $(".show_confirm").click(function (event) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((willDelete) => {
                if (willDelete.isConfirmed) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "dashboard/question/delete/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                             $("#questions-table").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });
});
