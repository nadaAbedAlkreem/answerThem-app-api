$(document).ready(function($)
{

    let locale = document.getElementById("locale").value;
    loadCategories(locale);

    var OK = window.translations.OK;
    var are_sure = window.translations.are_sure;
    var revert = window.translations.revert;
    var yes = window.translations.yes;
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
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    function loadCategories(locale) {
        $.ajax({
            url: '/dashboard/category/get-categories/filter/admin?lang=' + locale,
            method: 'GET',
            success: function (categories) {
                var $select = $('#category_id_admin');
                $select.empty();

                $.each(categories, function (index, item) {
                    if (item.level === '3') {
                        var $option = $('<option>')
                            .val(item.id)
                            .text(item.name + ' (  ' + item.parent_name + ')' +' - ' + ' (  ' + item.grand_name + ')');
                        $select.append($option);
                    }
                });
            },
            error: function (xhr, status, error) {
                console.error('حدث خطأ أثناء جلب البيانات:', error);
            }
        });

        $.ajax({
            url: '/dashboard/category/statistics/employees',
            method: 'GET',
            success: function (response) {
                $('input[name="categoriesCount"]').val(response.categoriesCount);
                $('input[name="staffCount"]').val(response.staffCount);
            },
            error: function (xhr, status, error) {
                console.error('حدث خطأ أثناء جلب البيانات:', error);
            }
        });
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
                {data: 'Dependency', name: 'Dependency'},
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
                const queryString = window.location.search;
                const params = new URLSearchParams(queryString);
                const lang = params.get('lang');
                console.log(lang);
                window.location.href = "/dashboard/admins/"+ lang;
                loadCategories(locale);



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
                title: are_sure,
                text: revert,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText:yes
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
                                    loadCategories(locale);

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

    $("#kt_sign_up_submit").on("click", function (e) {
        e.preventDefault();
        let formData = new FormData($("#kt_sign_up_form")[0]);
        const form = document.getElementById("kt_sign_up_form");
        console.log("nada" + formData);
        const button = document.getElementById('kt_sign_up_submit');
        const progress = button.querySelector('.indicator-label-progress');
        console.log("nada" + progress);

        progress.classList.remove('hidden-progress');



        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });


        $.ajax({
            type: "POST",
            url: "admin/register/role",
            data: formData,
            contentType: false, // determint type object
            processData: false, // processing on response
            success: function (response) {
                $("#successMsg").show();
                loadCategories(locale);

                progress.classList.add('hidden-progress');
                $(".data-table-admins").DataTable().ajax.reload();

                const dismissButton = document.getElementById('dismiss_create_admin');
                form.reset();
                if (dismissButton) {
                    dismissButton.click();
                }

            },

            error: function (response) {
                progress.classList.add('hidden-progress');

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









});
