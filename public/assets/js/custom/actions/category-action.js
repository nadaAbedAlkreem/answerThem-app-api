
$(document).ready(function ($) {

     var lang = window.location.pathname.split('/').pop(); // Example: 'en', 'fr', etc.


    var table = $(".data-table-category").DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        lengthChange: false,
        searching: false,
        info: false,
        ajax: {
            url: "dashboard/category/".lang,
            data: function (d) {
                 d.lang = lang;
                 d.level_category = $('#level_category').val();  // Get the selected value from dropdown

            },
        },
        columns:  [
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                    { data: "name", name: "name" },
                    { data: "description", name: "description" },
                    { data: "rating", name: "rating" },
                    { data: "famous gaming", name: "famous gaming" },
                    ],
        pageLength: 10, // Set the number of rows per page
        lengthMenu: [10, 25, 50, 100], // Allow users to select the number of rows
        order: [[0, 'asc']] ,// Default ordering (optional)
        responsive: true, // Makes it responsive
        dom: '<"top"f>rt<"bottom"lp><"clear">', // Customize DataTable layout (pagination, search, etc.)
    });
    $('#apply').on('click', function () {
        table.ajax.reload();  // Reload the table with the new filters
    });

    $("#submit_form").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#kt_modal_create_app_form")[0]);
        let famousGamingValue = $("#famous_gaming_create").prop("checked") ? 1 : 0;
        const path = window.location.pathname;
        const segments = path.split('/');
        const lang = segments[segments.length - 1];
        let selectedCategory = $("select[name='category_id']").val();
        let [level, id] = selectedCategory.split('-');
        formData.set('level', level);
        formData.set('category_id', id);
        formData.set('lang', lang);
        formData.set('famous_gaming', famousGamingValue);


        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "dashboard/category/create",
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
                $(".data-table-category").DataTable().ajax.reload();

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
    $(".data-table-category").on("click", ".deleteRecord[data-id]", function (e)
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
                        url: "dashboard/category/delete/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                            $(".data-table-category").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });
////update category


    $(".data-table-category").on("click", ".updateRecord", function (e)
    {
        e.preventDefault();
        var id = $(this).data("id");
        var famous_gaming = $(this).data("famous_gaming");
        var name_ar = $(this).data("name_ar");
        var name_en = $(this).data("name_en");
        var description_ar = $(this).data("description_ar");
        var description_en = $(this).data("description_en");
        var rating = $(this).data("rating");
        var level = $(this).data("level");
        var category_id = $(this).data("category_id");
        var image = $(this).data("image");

        $('#id_update').val(id);
        $('#name_ar').val(name_ar);
        $('#name_en').val(name_en);
        $('#description_ar').val(description_ar);
        $('#description_en').val(description_en);
        $('#inputCategoryId').val(category_id);
        var checkbox = document.getElementById('famous_gaming');
         if (famous_gaming === 1) {
            checkbox.checked = true;
        } else {
            checkbox.checked = false;
        }
        var dropdown = document.getElementById('rating');
         dropdown.value = Math.floor(rating);

        var imageWrapper = document.querySelector('.image-update');

        if (image) {
             imageWrapper.style.backgroundImage = `url('${image}')`;
         } else {
         }
        var selectedValue = (level-1) + '-' + category_id;

         var dropdown_ = document.getElementById('category_id_update');
         dropdown_.value = selectedValue;





    });

    $("#submit_form_Update_Category").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#kt_modal_update_app_form")[0]);
        let famousGamingValue = $("#famous_gaming").prop("checked") ? 1 : 0;
        formData.set('famous_gaming', famousGamingValue);
        let selectedCategory = $("select[id='category_id_update']").val();
        let [level, id] = selectedCategory.split('-');

        formData.set('level', level);
        formData.set('category_id', id);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "post",
            url: "dashboard/category/update",
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
                $(".data-table-category").DataTable().ajax.reload();
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
});
