@extends('backend.layouts.app')

@section('title') {{ __("$module_action") }} {{ __("$module_title") }} @endsection
@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!--/.row-->
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Đơn vị</th>
                            <th>Note</th>
                            <th>Ngày tạo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->full_name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->company }}</td>
                                <td>{{ $data->note }}</td>
                                <td>{{ $data->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $datas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
