@push ('after-styles')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/services_product.css')}}">
@endpush
@php
    $items_services= App\Models\Menu::where('parent_id', '=', '73')->where('status', '=', '1')->orderBy('order')->get();
    $items_inovation= App\Models\Menu::where('parent_id', '=', '74')->where('status', '=', '1')->orderBy('order')->get();
    $items_staffing= App\Models\Menu::where('parent_id', '=', '75')->where('status', '=', '1')->orderBy('order')->get();
@endphp
<section class="section_block sevices_product">
    <div class="container">
        <h2 class="font_weight_700 text_color_default page_title text-center">{{trans('frontend.Services&Products')}}</h2>
        <div class="row justify-content-center">
            @foreach($items_services as $item)
                <div class="col-lg-4 col-md-4 col-sm-12 pb-2 sevices_product_image_background">
                    <div class="sevices_product_opacity">
                    <span class="sevices_product_title font_weight_700">
                        {{$item->name}}
                    </span>
                        <ul>
                            <li>
                                <a class="sevices_product_link"
                                   href="/{{$item->slug}}">{{trans('services.' . $item->name)}}</a>
                            </li>
                        </ul>
                        <a href="/{{$item->slug}}"
                           class="btn sevices_product_button font_weight_500">{{trans('frontend.show_more')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
