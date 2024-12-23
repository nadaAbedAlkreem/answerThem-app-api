
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

    var table = $(".data-users").DataTable({
        language:language_datatables ,
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
            { data: "name", name: "name" },
            { data: "email", name: "email" },
            { data: "phone", name: "phone" },
            { data: "country", name: "country" },
        ],
        pageLength: 10, // Set the number of rows per page
        lengthMenu: [10, 25, 50, 100], // Allow users to select the number of rows
        order: [[0, 'asc']] ,// Default ordering (optional)
        responsive: true, // Makes it responsive
        dom: '<"top"f>rt<"bottom"lp><"clear">', // Customize DataTable layout (pagination, search, etc.)
    });







    $(".data-users").on("click", ".deleteRecord[data-id]", function (e)
    {
        e.preventDefault();
        $(".show_confirm").click(function (event) {
            Swal.fire({
                title: are_sure,
                text: revert,
                icon: "warning",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText:yes,
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
                             $(".data-users").DataTable().ajax.reload();
                        },
                    });
                }
            });
        });
    });
});
