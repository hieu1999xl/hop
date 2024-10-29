@extends('frontend.new_layouts.app')
@section('title') {{trans('frontend.HOPEnterprise')}} @endsection
@push ('after-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/services_detail.css')}}">
@endpush
@section('content')
<section class="section_block">
    <div class="container block_spacing">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <p class="font_weight_700 page_title text-dark">
                    {{trans('services.Telecommunications service provision')}}
                </p>
            </div>
        </div>
        <div class="row">
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                {{trans('services.telecommunications_service_intro_1')}}
            </p>
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                {{trans('services.telecommunications_service_intro_2')}}
            </p>
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin title_process font_weight_700">
                {{trans('services.telecommunications_discover')}}
            </p>
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                {{trans('services.telecommunications_discover_desc')}}
            </p>
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin font_weight_700 title_process">
                {{trans('services.telecommunications_why_choose_us')}}
            </p>
            <ul id="services-content">
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.telecommunications_why_choose_us_1')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.telecommunications_why_choose_us_2')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.telecommunications_why_choose_us_3')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.telecommunications_why_choose_us_4')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.telecommunications_why_choose_us_5')}}</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h2 class="col-md-12 col-sm-12 col-lg-12 text_margin title_process font_weight_700 mb-4">
            {{trans('services.telecommunications_conclusion_title')}}
        </h2>
        <div class='row justify-content-center align-items-center'>
            <div class='col-md-6 text-center'>
                <img src="{{ asset('frontend/assets/images/service/cooperate.webp') }}" alt="telecommunications_1" class="img-fluid">
            </div>
        </div>

        <p class="col-md-12 col-sm-12 col-lg-12 text_margin title_process font_weight_700">
            {{trans('services.telecommunications_conclusion')}}
        </p>
    </div>
    </div>
</section>
@include('frontend.case-studies.case_study',['display' => count($dataStudiesCase) > 0, 'dataStudiesCase' => $dataStudiesCase, 'classSection' => 'section_study1','type_case_studies' =>\App\Constants\CaseStudyConstants::VIEW_SERVICES_CHILD])

@include('frontend.includes.partner')
@include('frontend.includes.partner-mobile')

@include('frontend.new_layouts.bannerBottom')

@endsection