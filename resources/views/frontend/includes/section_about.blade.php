@push ('after-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/section_about.css')}}">
@endpush
<section class="section_block section_about">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1 class="font_weight_700 text_color_default page_title text-center" >{{trans('frontend.whoweare')}}</h1>
                <h2 class="text-center text_dark mb-5 page--sub_title">{{trans('frontend.lead')}}</h2>
            </div>
        </div>
        <div class="row about_list_pc">
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="about-list">
                    <h3 class="timer count-title count-number font_weight_700" data-to="5" data-speed="1500">0</h3>
                    <p >{{trans('frontend.yearsofex')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="about-list">
                    <h3 class="timer count-title count-number font_weight_700" data-to="40" data-speed="1500">0</h3>
                    <p >{{trans('frontend.professional')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="about-list">
                    <h3 class="timer count-title count-number font_weight_700" data-to="200" data-speed="1500">0</h3>
                    <!-- <h3>750+</h3> -->
                    <p >{{trans('frontend.happyclient')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="about-list">
                    <h3 class="timer count-title count-number font_weight_700" data-to="20" data-speed="1500">0</h3>
                    <!-- <h3>2205+</h3> -->
                    <p >{{trans('frontend.projectsDelivered')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
