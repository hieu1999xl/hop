@extends('frontend.new_layouts.app')
@section('title')
    {{trans('frontend.HOPEnterprise')}}
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
                        {{trans('services.Custom Software Development')}}
                    </p>
                </div>
            </div>
            <div class="row">
                <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                    {{trans('services.Enterprise custom1')}}
                </p>
                <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                    {{trans('services.Enterprise custom2')}}
                </p>
                <p class="col-md-12 col-sm-12 col-lg-12 text_margin">
                    {{trans('services.Enterprise custom3')}}
                </p>
                <p class="col-md-12 col-sm-12 col-lg-12 text_margin title_process font_weight_700">
                    {{trans('services.Our services')}}
                </p>
                <ul id="services-content">
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Our services1')}}</li>
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Our services2')}}</li>
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Our services3')}}</li>
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Our services4')}}</li>
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Our services5')}}</li>
                </ul>
                <p class="col-md-12 col-sm-12 col-lg-12 text_margin font_weight_700 title_process">
                    {{trans('services.Why us')}}
                </p>
                <ul id="services-content">
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Why us1')}}</li>
                    <li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">{{trans('services.Why us2')}}</li>
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
                    <p class="font_weight_700 title_process text_margin">{{trans('services.Requirement')}}</p>
                    <p class="text_margin">{{trans('services.enter1')}}</p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <p class="font_weight_700 title_process text_margin">{{trans('services.analy')}}</p>
                    <p class="text_margin">{{trans('services.enter2')}}</p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <p class="font_weight_700 title_process text_margin">{{trans('services.designandcus')}}</p>
                    <p class="text_margin">{{trans('services.enter3')}}</p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <p class="font_weight_700 title_process text_margin">{{trans('services.testing')}}</p>
                    <p class="text_margin">{{trans('services.enter5')}}</p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <p class="font_weight_700 title_process text_margin">{{trans('services.deploy')}}</p>
                    <p class="text_margin">{{trans('services.enter6')}}</p>
                </div>
            </div>
            <div class="img_process2">
                <img class="process-img" src="{{ asset('frontend/assets/images/service-detail/enterpr.svg')}}"
                     alt="{{trans('services.basic steps')}}">
            </div>
        </div>
        <div class="container">
            <h2 class="col-12 font_weight_700 page_title text-dark">
                {{trans('services.Why choose Enterprise Custom')}}
            </h2>
            <div class="services-lists">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="list-box text-center">
                            <img class="list-box-icon"
                                 src="{{ asset('frontend/assets/images/service/Rectangle 128_6_11zon.webp')}}"
                                 alt="{{trans('services.Efficiency')}}">
                            <h3 class="list-box-title font_weight_700 text_margin">{{trans('services.Efficiency')}}</h3>
                            <p class="text-justify">{{trans('services.EfficiencyIn')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="list-box text-center">
                            <img class="list-box-icon"
                                 src="{{ asset('frontend/assets/images/service/Rectangle 124_2_11zon.webp')}}"
                                 alt="{{trans('services.Profitability')}}">
                            <h3 class="list-box-title font_weight_700 text_margin">{{trans('services.Profitability')}}</h3>
                            <p class="text-justify">{{trans('services.ProfitabilityIn')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="list-box text-center">
                            <img class="list-box-icon"
                                 src="{{ asset('frontend/assets/images/service/Rectangle 131_9_11zon.webp')}}"
                                 alt="{{trans('services.Independence')}}">
                            <h3 class="list-box-title font_weight_700 text_margin">{{trans('services.Independence')}}</h3>
                            <p class="text-justify">{{trans('services.IndependenceIn')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row-space row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="list-box text-center">
                            <img class="list-box-icon"
                                 src="{{ asset('frontend/assets/images/service/Rectangle 142_14_11zon.webp')}}"
                                 alt="{{trans('services.Scale custom software')}}">
                            <h3 class="list-box-title font_weight_700 text_margin">{{trans('services.Scale custom software')}}</h3>
                            <p class="text-justify">{{trans('services.Scale cus In')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.includes.partner')
    @include('frontend.includes.partner-mobile')
    @include('frontend.new_layouts.bannerBottom')

@endsection
