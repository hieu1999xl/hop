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
                    {{trans('services.Web advertising agency')}}
                </p>
            </div>
        </div>
        <div class="row">
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                {{trans('services.web_advertising_agency_intro')}}
            </p>

            <p class="col-md-12 col-sm-12 col-lg-12 text_margin title_process font_weight_700">
                {{trans('services.web_advertising_agency_why_choose_us')}}
            </p>
            <ul id="services-content">
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.web_advertising_agency_why_choose_us_1')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.web_advertising_agency_why_choose_us_2')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.web_advertising_agency_why_choose_us_3')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.web_advertising_agency_why_choose_us_4')}}</li>
            </ul>
        </div>
    </div>
    <div class="container block_spacing">
        <div class="row">
            <h2 class="col-12 font_weight_700 page_title text-dark">
                {{trans('services.basic steps')}}
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.st1_title')}}</p>
                <p class="text_margin">{{trans('services.st1')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.st2_title')}}</p>
                <p class="text_margin">{{trans('services.st2')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.st3_title')}}</p>
                <p class="text_margin">{{trans('services.st3')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.st4_title')}}</p>
                <p class="text_margin">{{trans('services.st4')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.st5_title')}}</p>
                <p class="text_margin">{{trans('services.st5')}}</p>
            </div>
        </div>
    </div>
</section>
@include('frontend.case-studies.case_study',['display' => count($dataStudiesCase) > 0, 'dataStudiesCase' => $dataStudiesCase, 'classSection' => 'section_study1','type_case_studies' =>\App\Constants\CaseStudyConstants::VIEW_SERVICES_CHILD])

@include('frontend.includes.partner')
@include('frontend.includes.partner-mobile')

@include('frontend.new_layouts.bannerBottom')

@endsection