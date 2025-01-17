@extends ('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title mb-0">
                        <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">{{ __($module_action) }}</small>
                    </h4>
                    <div class="small text-muted">
                        {{ __('labels.backend.users.index.sub-title') }}
                    </div>
                </div>

                <div class="col-6 col-sm-4">
                    <div class="float-right">
                        @can('create_'.$module_name)
                        <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular(__($module_name))) }}"/>
                        @endcan

                        <div class="btn-group" role="group" aria-label="Toolbar button groups">
                            <div class="btn-group" role="group">
                                <button id="btnGroupToolbar" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupToolbar">
                                    <a class="dropdown-item" href="{{ route("backend.$module_name.trashed") }}">
                                        <i class="fas fa-eye-slash"></i> @lang('view_trash')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover ">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('labels.backend.users.fields.name') }}</th>
                                <th>{{ __('labels.backend.users.fields.email') }}</th>
                                <th>{{ __('labels.backend.users.fields.status') }}</th>
                                <th>{{ __('labels.backend.users.fields.roles') }}</th>
                                <th class="text-right">{{ __('labels.backend.action') }}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">

                    </div>
                </div>
                <div class="col-5">
                    <div class="float-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push ('after-styles')
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">

@endpush

@push ('after-scripts')
    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

    <script type="text/javascript">

        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: true,
            responsive: true,
            ajax: {
                url: "{{ route("backend.$module_name.index_data") }}",
                type: "GET"
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'status', name: 'status'},
                {data: 'user_roles', name: 'user_roles'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            language: {
                lengthMenu:"{{ __('comment::comments.show')}} _MENU_ {{ __('comment::comments.entries') }}",
                search: "{{ __('comment::comments.search') }}",
                info: "{{ __('comment::comments.info',['start' => "_START_", 'end' => "_END_", 'total' => "_TOTAL_"])}}",
                paginate:{
                    next: "{{ __('comment::comments.next') }}",
                    previous:"{{ __('comment::comments.previous') }}",
                }
            },
        });
        $('div.dataTables_length select').addClass('col-md-6');

    </script>
@endpush
