@extends('backend.layouts.app')

@section('title') {{ __("tag::tags.$module_action") }} {{ __("tag::tags.$module_title") }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ __("tag::tags.$module_title") }}
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">{{ __("tag::tags.$module_action") }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="{{ $module_icon }}"></i> {{ __("tag::tags.$module_title") }} <small class="text-muted">{{ __("tag::tags.$module_action") }}</small>
                </h4>
                <div class="small text-muted">
                    {{ ucwords(__("tag::tags.$module_name")) }} @lang('tag::tags.management_dashboard')
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route("backend.$module_name.show", $$module_name_singular->id) }}" class="btn btn-primary btn-sm ml-1" data-toggle="tooltip" title="{{__('tag::tags.show_detail')}}"><i class="fas fa-tv"></i> @lang('tag::tags.show')</a>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">
                {{ html()->modelForm($$module_name_singular, 'PATCH', route("backend.$module_name.update", $$module_name_singular))->acceptsFiles()->class('form')->open() }}

                @include ("$module_path.$module_name.form")

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            {{ html()->submit($text = icon('fas fa-save') . __('Save'))->class('btn btn-success') }}
                        </div>
                    </div>
                    {{ html()->form()->close() }}

                    <div class="col-8">
                        <div class="float-right">
                            @can('delete_'.$module_name)
                            <a href="{{route("backend.$module_name.destroy", $$module_name_singular)}}" class="btn btn-danger delete" data-method="DELETE" data-confirm="Are you sure to delete this item?" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('tag::tags.delete')}}"><i class="fas fa-trash-alt"></i></a>
                            @endcan
                            <x-buttons.cancel></x-buttons.cancel>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    @lang('tag::tags.updated_at'): {{$$module_name_singular->updated_at->diffForHumans()}},
                    @lang('tag::tags.created_at'): {{$$module_name_singular->created_at->isoFormat('LLLL')}}
                </small>
            </div>
        </div>
    </div>
</div>

@stop
@push ('after-scripts')
<script type="text/javascript">
var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        var choice = confirm(this.getAttribute('data-confirm'));

        if (choice) {
            window.location.href = this.getAttribute('href');
        }
    });
</script>
@endpush