@extends('frontend.new_layouts.app')
@section('title')
{{trans('frontend.HOPIndependent')}}
@endsection
@push ('after-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/services_detail.css')}}">
@endpush
@section('content')
<section class="section_block">
    <div class="container block_spacing">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <p class="font_weight_700 page_title text-dark">
                    {{trans('services.Testing Services')}}
                </p>
            </div>
        </div>
        <div class="row list_box--testing">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="list-box text-center">
                    <img class="list-box-icon list-box-icon-testing"
                        src="{{ asset('frontend/assets/images/service/Rectangle 138_10_11zon.webp')}}"
                        alt="{{trans('services.Unit test')}}">
                    <h3 class="title_process text_margin font_weight_700"> {{trans('services.Mobile Application Testing')}}</h3>
                    <p class="text-justify"> {{trans('services.Mobile Application Testing Content')}}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="list-box text-center">
                    <img class="list-box-icon list-box-icon-testing"
                        src="{{ asset('frontend/assets/images/service/Rectangle 139_11_11zon.webp')}}"
                        alt="{{trans('services.Integration test')}}">
                    <h3 class="title_process text_margin font_weight_700">{{trans('services.Automation Testing')}}</h3>
                    <p class="text-justify"> {{trans('services.Automation Testing Content')}} </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="list-box text-center">
                    <img class="list-box-icon list-box-icon-testing"
                        src="{{ asset('frontend/assets/images/service/Rectangle 140_12_11zon.webp')}}"
                        alt="{{trans('services.Functional test')}}">
                    <h3 class="title_process text_margin font_weight_700">{{trans('services.Web Application Testing')}}</h3>
                    <p class="text-justify">{{trans('services.Web Application Testing Content')}}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <a href="https://qa.hop.vn/" target="_blank">
                    <div class="list-box text-center">
                        <img class="list-box-icon list-box-icon-testing"
                            src="{{ asset('frontend/assets/images/service/Rectangle 141_13_11zon.webp')}}"
                            alt="{{trans('services.Acceptance test')}}">
                        <h3 class="title_process text_margin font_weight_700">{{trans('services.Follow-The-Sun Testing')}}</h3>
                        <p class="text-justify">{{trans('services.Follow-The-Sun Testing Content')}}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <h2 class="font_weight_700 page_title text-dark">
                    {{trans('services.Software Testing Process')}}
                </h2>
            </div>
        </div>
        <div class="row block_spacing">
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.Requirements Analysis')}}</p>
                <p class="text_margin">{{trans('services.sti1')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.Testing Plan')}}</p>
                <p class="text_margin">{{trans('services.sti2')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.Testcase')}}</p>
                <p class="text_margin">{{trans('services.sti3')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.Testing Environment')}}</p>
                <p class="text_margin">{{trans('services.sti4')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.testing')}}</p>
                <p class="text_margin">{{trans('services.sti5')}}</p>
            </div>
            <div class="col-lg-12 col-md-12">
                <p class="font_weight_700 title_process text_margin">{{trans('services.Report and Review Testing Result')}}</p>
                <p class="text_margin">{{trans('services.sti6')}}</p>
            </div>
        </div>
        <div class="img_process row justify-content-center">
            <img class="process-img" src="{{ asset('frontend/assets/images/service-detail/process3.svg')}}"
                alt="{{trans('services.Software Testing Process')}}">
        </div>
    </div>
</section>
@include('frontend.includes.partner')
@include('frontend.includes.partner-mobile')
@include('frontend.new_layouts.bannerBottom')
@endsection