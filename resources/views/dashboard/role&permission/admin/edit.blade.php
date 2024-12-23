@extends('Dashboard.layout.app')
@section('content')



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-body">
                        <h4>Edit
                            <a href="{{ url('dashboard/admins/' .  request('lang')) }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
{{--                        action="{{ url('admins/'.$user->id) }}" method="POST">--}}
                        <form id ="formUpdateAdmins">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="userId" value="{{ $user->id }}" class="form-control" />
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" readonly value="{{ $user->email }}" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">Roles</label>
                                <select name="roles[]" class="form-control" multiple>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option
                                            value="{{ $role }}"
                                            {{ in_array($role, $userRoles) ? 'selected':'' }}
                                        >
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" id ="submitAdmins" class="btn btn-primary">Update</button>
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
    <script src='{{asset('assets/js/custom/actions/admins-action.js')}}'></script>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });
        </script>
    @endpush



    @if (request('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ request('error') }}",
                customClass: {
                    confirmButton: "btn btn-primary",
                },
            });
        </script>
    @endif

@endsection
