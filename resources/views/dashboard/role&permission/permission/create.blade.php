@extends('dashboard.layout.app')

@section('content')



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                    <ul class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="card">
                    <div class="card-body">
                         <h4>{{__('setting.Create')}}
                            <a href="{{ url('dashboard/permissions/' .request('lang')) }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form  id="formAddPermission">
                            @csrf

                            <div class="mb-3">
                                <label for="">{{__('setting.Name')}} </label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" id="submitPermissionAdd" class="btn btn-primary">{{__('setting.Submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
    <!-- <script src="{{url('assets/js/scripts.bundle.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{url('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{url('assets/js/custom/widgets.js')}}"></script>
    <script src="{{url('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{url('assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <script src="{{asset('assets/js/custom/actions/permissions-action.js')}}"></script>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });
        </script>
    @endpush
    <!-- in this page  -->
    <!-- <script src='assets/js/custom/actions/news-actions.js'></script> -->
@endsection
