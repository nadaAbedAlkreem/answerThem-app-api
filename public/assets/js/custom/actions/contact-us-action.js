
$(document).ready(function ($) {


    var lang = window.location.pathname.split('/').pop(); // Example: 'en', 'fr', etc.
    var token = $("meta[name='csrf-token']").attr("content");
    var language_datatables = null;
    var OK = window.translations.OK;
    var success_message = window.translations.success_message;
    var are_sure = window.translations.are_sure;
    var revert = window.translations.revert;
    var yes = window.translations.yes;

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

    var table = $(".data-contact-us").DataTable({
        language: language_datatables,
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




    $(".data-contact-us").on("change", "#status[data-id]", function (e)
    {
        e.preventDefault();
         const dropdown = document.getElementById("status");
         var token = $("meta[name='csrf-token']").attr("content");
         const status = dropdown.value;
         var id = $(this).data("id");
                     $.ajax({
                        url: "dashboard/contact_us/update/",
                        type: "post",
                        data: {
                            id:id ,
                            status : status,
                            _token: token,
                        },
                        success: function () {
                            Swal.fire({
                                text: success_message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: OK ,
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            });


                         },
                    });
    });





    $(".data-contact-us").on("click", ".deleteRecord[data-id]", function (e)
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
                        url: "dashboard/contact_us/delete/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token,
                        },
                        success: function () {
                            $(".data-contact-us").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });
});
