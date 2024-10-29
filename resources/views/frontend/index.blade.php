@extends('frontend.new_layouts.app')
@section('title') {{trans('frontend.Homepage')}}
@endsection

@push ('after-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/banner.css')}}">
@endpush

@section('content')
<section class="section_we_are_special">
    <div class="head_carousel">
        <div id="slider_home_page">
            @foreach($listSlide as $slide)
            @php
            $slide->title = $slide->dataLocale ? $slide->dataLocale->title : $slide->title;
            $slide->body = $slide->dataLocale ? $slide->dataLocale->body : $slide->sub_title;
            $slideOder = $slide->oder;
            @endphp
            <div class="home_page_slider_item">
                <!-- <img src="{{ $slide->image }}" alt="{{$slide->title}}"> -->
                <picture>
                    <img class="home_page_slider_image_background image_item_{{$slide->oder}}" src="{{ $slide->image }}" alt="{{$slide->title}}">
                </picture>
                <div class="content_slider_contain id_slider_{{$slide->oder}}">
                    <div class="content_slider">
                        @if ($slide->oder==2 )
                        <img src="{{ asset('frontend/assets/images/new brand.svg')}}" alt="brand tinh van" class="img_tinhvan--brand" />
                        @endif
                        <div class="block_spacing_md font_weight_700 slide_title banner_title_{{$slide->oder}}">{!! $slide->title !!}</div>
                        <div class="banner_body_{{$slide->oder}} block_spacing banner_body">{!! $slide->body !!}</div>
                        <a href="{{$slide->link_button}}" id="btn" class="banner_btn btn-round-lg btn-white banner_view_{{$slide->oder}}">
                                {!!$slide->oder==3 ? trans('frontend.contacus') : trans('frontend.viewmore')!!} +
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Section About Begin  -->
@include('frontend.includes.section_about')
<!-- Section About End  -->

<!-- Section Services Product Begin  -->
@include('frontend.includes.services_product')
<!-- Section Services Product End  -->

<!-- Section Technologies Begin -->
@include('frontend.includes.technologies')
<!-- Section Technologies End -->
@include('frontend.new_layouts.bannerBottom')
@include('frontend.includes.partner')
@include('frontend.includes.partner-mobile')
@endsection

@push ('after-scripts')

<script type="text/javascript">
    const counters = document.querySelectorAll('.timer');
    // Main function
    for (let n of counters) {
        const updateCount = () => {
            const target = +n.getAttribute('data-to');
            const count = +n.innerText;
            const speed = n.getAttribute('data-speed'); // change animation speed here
            const inc = target / speed;
            if (count < target) {
                n.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                n.innerText = target;
            }
        }
        updateCount();
    }

    $(function() {
        $("#slider_home_page").slick({
            infinite: true,
            speed: 2000,
            dots: true,
            // autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
</script>
@endpush
