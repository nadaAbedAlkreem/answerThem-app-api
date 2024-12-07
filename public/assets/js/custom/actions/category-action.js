
document.addEventListener("DOMContentLoaded", function () {
    // Default language value
    let selectedLanguage = "ar";

    // Get all language links
    const languageLinks = document.querySelectorAll(".menu-link");

    // Add click event listener to each link
    languageLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default behavior (e.g., navigating to "#")
            selectedLanguage = this.getAttribute("data-value"); // Get the selected language
            console.log("Selected Language:", selectedLanguage);

            // Example: Pass the selected value to the server or update the UI
            updateLanguage(selectedLanguage);
        });
    });

    // Function to handle language update
    function updateLanguage(language) {
         console.log("Applying language:", language);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "post",
            url: "dashboard/lang",
            data: {language: language  , '_token' :  $('meta[name="csrf-token"]').attr("content") },

            contentType: false,
            processData: false,
            success: function (response) {
                $("#successMsg").show();
                console.log(response);
                Swal.fire({
                    text: "You have successfully  add data!",
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


    }
    document.addEventListener("DOMContentLoaded", function () {
        const savedLanguage = localStorage.getItem("selectedLanguage");
        if (savedLanguage) {
            console.log("Loaded saved language:", savedLanguage);
            updateLanguage(savedLanguage);
        }
    });
});

$(document).ready(function ($) {
    $('#rating').barrating({
        theme: 'fontawesome-stars', // Use fontawesome star icons
        showSelectedRating: false    // Don't show the selected rating text
    });
    console.log(jQuery.fn.barrating);
    var lang = window.location.pathname.split('/').pop(); // Example: 'en', 'fr', etc.


    var table = $(".data-table-category").DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        paging: false,
        lengthChange: false,
        searching: false,
        info: false,
        ajax: {
            url: "dashboard/category/".lang,
            data: function (d) {
                 d.lang = lang;
            },
        },
        columns:  [
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                    { data: "name", name: "name" },
                    { data: "description", name: "description" },
                    { data: "rating", name: "rating" },
                    ],
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

        // for (let pair of formData.entries()) {
        //     console.log(pair[0] + ': ' + pair[1]);
        // }

        // Images().forEach((e) => {
        //     console.log(e);
        //     formData.append("image[]", e);
        // });

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
                    text: "You have successfully  add data!",
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
    $("#SubmitFormNewsEdit").on("submit", function (e) {
        e.preventDefault();

        let formData = new FormData($("#SubmitFormNewsEdit")[0]);
        Images().forEach((e) => {
            console.log(e);
            formData.append("images[]", e);
        });

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "post",
            url: "news/update",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                console.log(response);
                Swal.fire({
                    text: "You have successfully reset data !",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $(".data-table-news-images").DataTable().ajax.reload();
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
