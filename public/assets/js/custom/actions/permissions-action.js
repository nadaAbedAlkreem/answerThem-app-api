$(document).ready(function($)
{
    let locale = document.getElementById("locale").value;
    var language_datatables = null;

    if (locale === "ar")
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

    var table = $('.data-table-permissions').DataTable(
        {
            language:language_datatables ,
            processing: true,
            serverSide: true,
            ordering: false,
            searching: false,
            info: false,
            ajax:
                {
                    url: "dashboard/permissions/" + locale,
                    data: function (d) {
                        // d.category = $('#category').val()
                    }
                },
            columns: [

                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action'},]


        });


    $(".data-table-permissions").on('click', '.deleteRecord[data-id]', function (e)
    {
        e.preventDefault();
        $('.show_confirm').click(function(event)
        {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
                .then((willDelete) =>
                {
                    if (willDelete.isConfirmed)
                    {
                        var id = $(this).data("id");
                        var token = $("meta[name='csrf-token']").attr("content");

                        $.ajax(
                            {
                                url: "permissions/"+id,
                                type: 'DELETE',
                                data:
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                success: function ()
                                {
                                    console.log("it Works");
                                    $('.data-table-permissions').DataTable().ajax.reload();
                                }
                                , error:function(error)
                                {
                                    console.log(error);


                                }
                            });

                    }
                });


        });


    });
    $("#submitPermission").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#formUpdatePermission")[0]);
        let Id = document.getElementById('id').value;

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

         $.ajax({
            type: "POST",
            url: 'permissions/'+Id,
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Done',
                    text: "Update data success",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                window.history.back();
                location.reload(true);

            },

            error: function (response) {
                console.log(response);
                Swal.fire({
                    text: response.responseJSON.data.error,
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


    $("#submitPermissionAdd").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#formAddPermission")[0]);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        // action="{{ url('roles/'.$role->id) }}" method="POST"
        $.ajax({
            type: "POST",
            url: "permissions",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Done',
                    text: "add data success",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });

            },

            error: function (response) {
                Swal.fire({
                    text: response.responseJSON.data.error,
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
