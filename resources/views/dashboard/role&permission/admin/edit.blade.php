@extends('dashboard.layout.app')
@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-body">
                        <h4>
                            <a href="{{ url('dashboard/admins/' .  request('lang')) }}" class="btn btn-danger float-end">{{__('setting.Back')}}</a>
                        </h4>
                    </div>
                    <div class="card-body">
                         <form id ="formUpdateAdmins">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="userId" value="{{ $user->id }}" class="form-control" />
                            <div class="mb-3">
                                <label for="">{{__('setting.Name')}}</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">{{__('setting.Email')}}</label>
                                <input type="text" name="email" readonly value="{{ $user->email }}" class="form-control" />
                            </div>
                            @if($user->getRoleNames()[0]  != 'super-admin')
                                 <div class="mb-4">
                                     <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                         <span class="required">{{__('setting.Category')}}</span>
                                         <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
                                     </label>
                                     <div id="categories_container"  class="form-control form-control-lg form-control-solid">
                                         @if(!empty($user['category']))
                                             @foreach($user['category'] as $item)
                                                 <div class="form-check mb-2">
                                                     <input
                                                         type="checkbox"
                                                         class="form-check-input"
                                                         name="category_id[]"
                                                         id="category_{{ $item['id'] }}"
                                                         value="{{ $item['id'] }}"
                                                         checked>
                                                     <label class="form-check-label" for="category_{{ $item['id'] }}">
                                                         {{ app()->getLocale() === 'ar' ? $item['name_ar'] ?? '' : $item['name_en'] ?? '' }}
                                                         <span>
                            ({{ app()->getLocale() === 'ar' ? $item['parent']['name_ar'] ?? '' : $item['parent']['name_en'] ?? '' }}) -
                            ({{ app()->getLocale() === 'ar' ? $item['parent']['parent']['name_ar'] ?? '' : $item['parent']['parent']['name_en'] ?? '' }})
                        </span>
                                                     </label>
                                                 </div>
                                             @endforeach
                                         @endif

                                         @if(!empty($categories))
                                             @foreach($categories as $item)
                                                 <div class="form-check mb-2">
                                                     <input
                                                         type="checkbox"
                                                         class="form-check-input"
                                                         name="category_id[]"
                                                         id="category_{{ $item['id'] }}"
                                                         value="{{ $item['id'] }}">
                                                     <label class="form-check-label" for="category_{{ $item['id'] }}">
                                                         {{ app()->getLocale() === 'ar' ? $item['name_ar'] ?? '' : $item['name_en'] ?? '' }}
                                                         <span>
                            ({{ app()->getLocale() === 'ar' ? $item['parent']['name_ar'] ?? '' : $item['parent']['name_en'] ?? '' }}) -
                            ({{ app()->getLocale() === 'ar' ? $item['parent']['parent']['name_ar'] ?? '' : $item['parent']['parent']['name_en'] ?? '' }})
                        </span>
                                                     </label>
                                                 </div>
                                             @endforeach
                                         @endif
                                     </div>
                                 </div>



                            @endif
                            <div class="mb-3">
                                <label for="">{{__('setting.Roles')}}</label>
                                <select name="roles[]" class="form-control" multiple>
                                    <option value="">{{__('setting.Select Role')}}</option>
                                    @foreach ($roles as $role)
                                        <option
                                            value="{{ $role }}"
                                            {{ in_array($role, $userRoles) ? 'selected':'' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" id ="submitAdmins" class="btn btn-primary">{{__('setting.Update')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="locale"  id="locale" value="{{app()->getLocale()}}" />

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
    <script>
        window.translations = {
            OK: @json(__('setting.OK!')),
            are_sure: @json(__('setting.are_sure')),
            revert: @json(__('setting.revert')),
            yes: @json(__('setting.yes')),
        };

    </script>
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
