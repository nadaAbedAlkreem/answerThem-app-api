
$(document).ready(function ($) {

    console.log(jQuery.fn.barrating);
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
        let famousGamingValue = $("#radioOn").prop("checked") ? 1 : 0;
        formData.set('famous_gaming', famousGamingValue);
        const path = window.location.pathname;
         const segments = path.split('/');
         const lang = segments[segments.length - 1];

        console.log(lang);
        console.log(formData);
        console.log(famousGamingValue);
        let selectedCategory = $("select[name='category_id']").val();

        // Split the value into level and id
        let [level, id] = selectedCategory.split('-');
        console.log(id, "selectedCategory:", selectedCategory);

        // Log the level and id
        console.log("Level: " + level);
        console.log("Category ID: " + id);

        // Create a new FormData object

        // You can add the level and id values manually if needed
        formData.set('level', level);
        formData.set('category_id', id);
        formData.set('lang', lang);



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
                console.log(response);
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
                            console.log("it Works");
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
        console.log(description_en);

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
        console.log(imageWrapper);

        if (image) {
             imageWrapper.style.backgroundImage = `url('${image}')`;
            console.log('Image URL set:', image);
        } else {
            console.log('Image URL is not defined.');
        }
        var selectedValue = (level-1) + '-' + category_id;
        console.log(selectedValue);
        console.log(level);
        console.log(category_id);

         var dropdown_ = document.getElementById('category_id_update');
         dropdown_.value = selectedValue;





    });
});
    $("#submit_form_Update").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#kt_modal_update_app_form")[0]);
        console.log(formData);
        let famousGamingValue = $("#famous_gaming").prop("checked") ? 1 : 0;
        formData.set('famous_gaming', famousGamingValue);
        let selectedCategory = $("select[id='category_id_update']").val();

        // Split the value into level and id
        let [level, id] = selectedCategory.split('-');
        console.log(id, "selectedCategory:", selectedCategory);

        // Log the level and id
        console.log("Level: " + level);
        console.log("Category ID: " + id);

        // Create a new FormData object

        // You can add the level and id values manually if needed
        formData.set('level', level);
        formData.set('category_id', id);
        formData.set('lang', lang);

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
                console.log(response);
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

