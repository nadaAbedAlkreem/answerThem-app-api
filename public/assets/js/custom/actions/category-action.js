
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
 var current_lang = "en" ;

    // if (current_lang === "ar")
    // {
    //
    //     columns = [
    //         { data: "title_ar", name: "title_ar" },
    //         { data: "date", name: "date" },
    //         { data: "description_ar", name: "description" },
    //         { data: "location_ar", name: "location" },
    //         { data: "action", name: "action" }] ;
    // }else
    // {
    //     columns = [
    //         { data: "title", name: "title" },
    //         { data: "date", name: "date" },
    //         { data: "description", name: "description" },
    //         { data: "location", name: "location" },
    //         { data: "action", name: "action" } ] ;
    //
    //
    // }


    var table = $(".data-table-category").DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        paging: false,
        lengthChange: false,
        searching: false,
        info: false,
        ajax: {
            url: "dashboard/category",
            data: function (d) {
                // d.category = $('#category').val()
            },
        },

        columns:  [
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                    { data: "name", name: "name" },
                    { data: "description", name: "description" },
                    { data: "rating", name: "rating" },
                    ],
    });

    $("#SubmitFormNews").on("submit", function (e) {
        e.preventDefault();

        let formData = new FormData($("#SubmitFormNews")[0]);

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
            type: "POST",
            url: "news",
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
    $(".data-table-news").on("click", ".deleteRecord[data-id]", function (e)
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
                        url: "news/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                            console.log("it Works");
                            $(".data-table-news").DataTable().ajax.reload();
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
