$(document).ready(function($)
{
    let locale = document.getElementById("locale").value;
     $('#filter_column_type_user').on('change', function() {
        table.ajax.reload();
    });

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

    var table = $('.data-table-admins').DataTable(
        {
            language:language_datatables ,
            processing: true,
            serverSide: true,
            ordering: false,
            searching: false,
            info: false,
            ajax:
                {
                    url: "dashboard/admins/"+locale ,
                    data: function (d) {
                        d.filter_column_type_user = $('#filter_column_type_user').val()
                        d.locale = locale ;
                    }
                },
            columns: [

                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'roles', name: 'roles'},
                {data: 'action', name: 'action'},]


        });
    $("#submitAdmins").on("click", function (e) {
        e.preventDefault();

        let formData = new FormData($("#formUpdateAdmins")[0]);
        let userId = document.getElementById('userId').value;
        console.log('formData' +formData)
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "admins/"+userId,
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
                 Swal.fire({
                    text: response.responseJSON.data.error,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: 'ok !',
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
            },
        });
    });


    $(".data-table-admins").on('click', '.deleteRecord[data-id]', function (e)
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
                                url: "admins/"+id,
                                type: 'DELETE',
                                data:
                                    {
                                        "id": id,
                                        "_token": token,
                                    },
                                success: function ()
                                {
                                    console.log("it Works");
                                    $('.data-table-admins').DataTable().ajax.reload();
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








});
