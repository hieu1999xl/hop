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
					{{trans('services.Digital Transformation')}}
				</p>
			</div>
		</div>
		<div class="row">
			<p class="col-md-12 col-sm-12 col-lg-12 text_margin">
				{{trans('services.Digital Transformation Intro')}}
			</p>
			<p class="col-md-12 col-sm-12 col-lg-12 text_margin">
				{{trans('services.Digital Transformation Benefits')}}
			</p>
			<p class="col-md-12 col-sm-12 col-lg-12 text_margin font_weight_700 title_process">
				{{trans('services.digital_why_choose_us')}}
			</p>
			<ul id="services-content">
				<li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">
					{{trans('services.digital_why_choose_us_1')}}
				</li>
				<li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">
					{{trans('services.digital_why_choose_us_2')}}
				</li>
				<li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">
					{{trans('services.digital_why_choose_us_3')}}
				</li>
				<li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">
					{{trans('services.digital_why_choose_us_4')}}
				</li>
				<li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">
					{{trans('services.digital_why_choose_us_5')}}
				</li>
				<li class="col-md-12 col-sm-12 col-lg-12 text_margin content_services bullet_content">
					{{trans('services.digital_why_choose_us_6')}}
				</li>
			</ul>
		</div>
	</div>
	<div class="container block_spacing">
		<div class="row">
			<h2 class="col-12 font_weight_700 page_title text-dark">
				{{trans('services.basic steps_digital')}}
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<p class="font_weight_700 title_process text_margin">{{trans('services.digital_transformation_step1')}}</p>
				<p class="text_margin">{{trans('services.digital_transformation_step1_desc')}}</p>
			</div>
			<div class="col-lg-12 col-md-12">
				<p class="font_weight_700 title_process text_margin">{{trans('services.digital_transformation_step2')}}</p>
				<p class="text_margin">{{trans('services.digital_transformation_step2_desc')}}</p>
			</div>
			<div class="col-lg-12 col-md-12">
				<p class="font_weight_700 title_process text_margin">{{trans('services.digital_transformation_step3')}}</p>
				<p class="text_margin">{{trans('services.digital_transformation_step3_desc')}}</p>
			</div>
			<div class="col-lg-12 col-md-12">
				<p class="font_weight_700 title_process text_margin">{{trans('services.digital_transformation_step4')}}</p>
				<p class="text_margin">{{trans('services.digital_transformation_step4_desc')}}</p>
			</div>
			<div class="col-lg-12 col-md-12">
				<p class="font_weight_700 title_process text_margin">{{trans('services.digital_transformation_step5')}}</p>
				<p class="text_margin">{{trans('services.digital_transformation_step5_desc')}}</p>
			</div>
			<div class="col-lg-12 col-md-12">
				<p class="font_weight_700 title_process text_margin">{{trans('services.digital_transformation_step6')}}</p>
				<p class="text_margin">{{trans('services.digital_transformation_step6_desc')}}</p>
			</div>
		</div>
		<!-- <div class="img_process2">
			<img class="process-img" src="{{ asset('frontend/assets/images/service-detail/enterpr.svg')}}" alt="{{trans('services.basic steps')}}">
		</div> -->
	</div>
</section>
@include('frontend.case-studies.case_study',['display' => count($dataStudiesCase) > 0, 'dataStudiesCase' => $dataStudiesCase, 'classSection' => 'section_study1','type_case_studies' =>\App\Constants\CaseStudyConstants::VIEW_SERVICES_CHILD])

@include('frontend.includes.partner')
@include('frontend.includes.partner-mobile')

@include('frontend.new_layouts.bannerBottom')

@endsection