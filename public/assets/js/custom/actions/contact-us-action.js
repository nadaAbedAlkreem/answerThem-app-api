
$(document).ready(function ($) {


    var lang = window.location.pathname.split('/').pop(); // Example: 'en', 'fr', etc.


    var table = $(".data-contact-us").DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        lengthChange: false,
        searching: false,
        info: false,
        ajax: {
            url: "dashboard/users/".lang,
            data: function (d) {
                d.lang = lang;

            },
        },
        columns:  [
            { data: 'action', name: 'action', orderable: false, searchable: false },
            { data: "sender", name: "sender" },
            { data: "title", name: "title" },
            { data: "description", name: "description" },
            { data: "status", name: "status" },
        ],
        pageLength: 10, // Set the number of rows per page
        lengthMenu: [10, 25, 50, 100], // Allow users to select the number of rows
        order: [[0, 'asc']] ,// Default ordering (optional)
        responsive: true, // Makes it responsive
        dom: '<"top"f>rt<"bottom"lp><"clear">', // Customize DataTable layout (pagination, search, etc.)
    });




    $(".data-contact-us").on("chooes", "#status", function (e)
    {
        e.preventDefault();

                    $.ajax({
                        url: "dashboard/status/update/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                            console.log("it Works");
                            $(".data-users").DataTable().ajax.reload();
                        },
                    });
    });





    $(".data-contact-us").on("click", ".deleteRecord[data-id]", function (e)
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
                        url: "dashboard/users/delete/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                            console.log("it Works");
                            $(".data-users").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });
});
