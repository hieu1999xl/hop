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
                    {{trans('services.Customer Service')}}
                </p>
            </div>
        </div>
        <div class="row">
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                {{trans('services.customer_service_intro')}}
            </p>
            <p class="col-md-12 col-sm-12 col-lg-12 text_margin title_process font_weight_700">
                {{trans('services.customer_service_why_choose_us')}}
            </p>
            <ul id="services-content">
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.customer_service_why_choose_us_1')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.customer_service_why_choose_us_2')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.customer_service_why_choose_us_3')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.customer_service_why_choose_us_4')}}</li>
                <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.customer_service_why_choose_us_5')}}</li>
            </ul>
        </div>
    </div>
    <div class="container block_spacing">
        <div class="row">
            <h2 class="col-12 font_weight_700 page_title text-dark">
                {{trans('services.customer_service_process_title')}}
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step1')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step1_desc')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step2')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step2_desc')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step3')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step3_desc')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step4')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step4_desc')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step5')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step5_desc')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step6')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step6_desc')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.customer_service_process_step7')}}</p>
                <p class="text_margin">{{trans('services.customer_service_process_step7_desc')}}</p>
            </div>
        </div>
        <div class="img_process2">
            <img class="process-img" src="{{ asset('frontend/assets/images/service/customer_service_content.webp')}}" alt="{{trans('frontend.basic steps')}}">
        </div>
    </div>

    <div class="container block_spacing">
        <div class="row">
            <h3 class="font_weight_700 text-dark" style="font-size: 32px;">{{trans('services.customer_service_conclusion')}}</h3>
        </div>
    </div>

    </div>
</section>
@include('frontend.case-studies.case_study',['display' => count($dataStudiesCase) > 0, 'dataStudiesCase' => $dataStudiesCase, 'classSection' => 'section_study1','type_case_studies' =>\App\Constants\CaseStudyConstants::VIEW_SERVICES_CHILD])

@include('frontend.includes.partner')
@include('frontend.includes.partner-mobile')

@include('frontend.new_layouts.bannerBottom')

@endsection