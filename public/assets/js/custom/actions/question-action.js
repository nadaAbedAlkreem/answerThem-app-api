
$(document).ready(function ($) {
    var OK = window.translations.OK;
    var are_sure = window.translations.are_sure;
    var revert = window.translations.revert;
    var yes = window.translations.yes;

    var lang = window.location.pathname.split('/').pop(); // Example: 'en', 'fr', etc.
    var language_datatables = null;

    if (lang === "ar")
    {
        language_datatables = {
            sEmptyTable: "لا يوجد بيانات ",
            sInfo: "يتم عرض _START_ إلى _END_ من _TOTAL_ من الإدخالات",
            sInfoEmpty: "عرض 0 إلى 0 من أصل 0 إدخالات",
            sInfoFiltered: "(تمت التصفية من إجمالي _MAX_ الإدخالات)",
            sInfoPostFix: "",
            sInfoThousands: "",
            sLengthMenu: "إظهار إدخالات _MENU_",
            sLoadingRecords: "جارٍ التحميل...",
            sProcessing: "جارٍ المعالجة...",
            sSearch: "البحث:",
            sZeroRecords: "لم يتم العثور على سجلات مطابقة",
            oPaginate: {
                sFirst: "الأولى",
                sLast: "الأخير",
                sNext: "التالي",
                sPrevious: "السابق",
            },
            oAria: {
                sSortAscending: ": التنشيط لفرز الأعمدة تصاعديًا",
                sSortDescending: ": التنشيط لفرز الأعمدة تنازليًا",
            },
        };


    }
     $("#questions-table").DataTable({
         language: language_datatables,
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
                d.name_question = $('#name_question').val();  // Get the selected value from dropdown

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
    $('#name_question').on('input', function () {
        $("#questions-table").DataTable().ajax.reload();
    });


    $("#submit_form_question").on("click", function (e) {
        e.preventDefault();
        const button = document.getElementById('submit_form_question');
        const progress = button.querySelector('.indicator-label-progress');
        progress.classList.remove('hidden');

        let formData = new FormData($("#kt_modal_create_app_question_form")[0]);
        const form = document.getElementById('kt_modal_create_app_question_form');


        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "dashboard/question/create?lang="+lang,
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                progress.classList.add('hidden');
                form.reset();

                const dismissButton = document.getElementById('dismiss_create');

                if (dismissButton) {
                    dismissButton.click();
                }
                const resetButtonQuestion = document.getElementById('resetButtonQuestion');

                if (resetButtonQuestion) {
                    resetButtonQuestion.click();
                }
                const canselquestion = document.getElementById('canselquestion'); //
                if (canselquestion) {
                    canselquestion.click();
                }

                $("#questions-table").DataTable().ajax.reload();

            },

            error: function (response) {
                progress.classList.add('hidden');

                Swal.fire({
                    text: response.responseJSON.data.error,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: OK,
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


        var dropdown = document.getElementById('category_id_update');
        console.log(category_id) ;
        dropdown.value = category_id;

        var imageWrapper = document.querySelector('.image-update');

        if (image) {
            imageWrapper.style.backgroundImage = `url('${image}')`;
         } else {
         }

    });

    $("#submit_form_question_update").on("click", function (e) {
        e.preventDefault();
        const button = document.getElementById('submit_form_question_update');
        const progress = button.querySelector('.indicator-label-progress');
        progress.classList.remove('hidden');
        let formData = new FormData($("#kt_modal_update_questions_app_form")[0]);


        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "post",
            url: "dashboard/question/update?lang="+lang,
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                progress.classList.add('hidden');
                const dismissButton = document.getElementById('dismiss_update');
                if (dismissButton) {
                    dismissButton.click();
                }
                const resetButtonQuestionUpdate = document.getElementById('resetButtonQuestionUpdate');

                if (resetButtonQuestionUpdate) {
                    resetButtonQuestionUpdate.click();
                }
                $("#questions-table").DataTable().ajax.reload();
            },

            error: function (response) {
                progress.classList.add('hidden');

                Swal.fire({
                    text: response.responseJSON.data.error,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: OK,
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
                title: are_sure,
                text: revert,
                icon: "warning",
                 confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: yes,
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
