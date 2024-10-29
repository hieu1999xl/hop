@extends('frontend.new_layouts.app')
@push('after-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/technologies.css')}}">
@endpush
@section('title')
    {{$meta['pTitle']}}
@endsection
@push('after-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/banner.css')}}">
@endpush
@section('content')
    <section class="section_block">
        <div class="container focus">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h2 class="page_title font_weight_700 text-center text-dark title-capitalize">{{trans('frontend.focusContent')}}</h2>
                    </div>
                    <div class="block_spacing">
                        <p class="technologies_description  text-center">{{trans('frontend.focusContentBottom')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container block_spacing">
            <div class="row technologies_block">
                @foreach($menuTechnologies as $key => $menu)
                    <div
                        class="col-xl-3 col-lg-6 col-sm-12 padding_container technology-contain technologies-parent-{{$menu->id}}">
                        <a id="parent-{{$menu->id}}" data="{{$menu->name}}">
                            <div class="container_image">
                                <div class="image_tech_contain">
                                    <img class="image_technology" src="{{ asset($menu->image) }}" alt="{{$menu->name}}">
                                    <img class="image_technology_white"
                                         src="{{ asset('frontend/assets/images/technology/' . $menu->slug .'-white.svg') }}"
                                         alt="{{$menu->name}}">
                                </div>
                                <h3 class="title_image technologies-parent-{{$menu->id}}"> {{trans('frontend.' . $menu->name)}}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container tech-lists tech-lists-testing" id="technologies_switch_mobile">
            <div class="row row_loading d-flex justify-content-center">
                <div class="planetcircle " id="loading">
                    <div class="planetcircle__a"></div>
                    <div class="planetcircle__b"></div>
                </div>
            </div>
            <div class="row technologies_child">
            </div>
        </div>
    </section>
    {{--@include('frontend.case-studies.case_study',['display' => count($dataStudiesCase) > 0, 'dataStudiesCase' => $dataStudiesCase, 'classSection' => 'section_study1', 'type_case_studies' => null])--}}
@endsection

@push ('after-scripts')
    <script src="{{ asset('js/case_study.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($(window).width() < 769) {
                $('.padding_container').click(function () {
                    $('#technologies_switch_mobile').appendTo(this);
                })
            }
            var idMenuParent = '<?= $active_menu_parent ?>'
            if (idMenuParent) {
                const el = $(".nav-lists").find(`[data-id='${idMenuParent}']`)
                el.removeClass('active')
                el.addClass('active')
            }
            var technologies_menu = <?= $menuTechnologies->pluck('id') ?>;
            var activeMenu = <?= $activeMenu ?>;
            $('.technologies-parent-' + activeMenu).addClass('active');
            $('.technology-contain').click(function () {
                $('.technology-contain').removeClass('active');
                $(this).addClass('active');
            });

            technologies_menu.forEach((menu) => {
                $('#parent-' + menu).click(function () {
                    $.ajax({
                        url: '/technologies/getMenuChildTechnologies/' + menu,
                        dataType: 'json',
                        beforeSend: function () {
                            $('#loading').show();
                            $(".technologies_child").empty();
                        },
                        success: function (data) {
                            const result = templateMenuChild(data);
                            $('#loading').hide();
                            $('.technologies_child').html(result);
                        },
                        error: function () {
                        },
                        complete: function () {
                            $('#loading').hide();
                        },
                    });
                    $.ajax({
                        url: '/technologies/case-study/' + menu,
                        dataType: 'json',
                        beforeSend: function () {
                            $(".case_studies_contain").empty();
                        },
                        success: function (data) {
                            const dataCaseStudies = data.caseStudies;
                            const dataTags = data.tags;
                            const result = templateCaseStudies(dataCaseStudies, dataTags);
                            $('.case_studies_contain').html(result);
                        },
                        error: function () {
                        },
                        complete: function () {
                        },
                    });
                });
            });
            let url_current = window.location.pathname;
            let id_current = url_current.substring(url_current.lastIndexOf('/') + 1);
            let newPageTitle = '';
            if (!isNaN(Number(id_current))) {
                $('#parent-' + id_current).click();
            } else {
                $('#parent-' + technologies_menu[0]).click();
            }
        })

        function templateMenuChild(data) {
            let html = '';
            data.forEach((menu) => {
                html += `<div class="col-md-3 col-sm-4 col-xs-4 col-4">`;
                html += `<div class="list-box text-center" data-toggle="tooltip" data-placement="bottom" title="${menu.alt}">`;
                if (menu.check) {
                    html += `<div class="removeSessionFilter"><img class="image_technologies" src="${menu.path}" alt="${menu.alt}"></div>`;
                } else {
                    html += `<div><img class="image_technologies" src="${menu.path}" alt="${menu.alt}"></div>`;
                }
                html += `</div>`;
                html += `</div>`;
            });
            $('body').tooltip({
                selector: '[data-toggle="tooltip"]'
            });
            return html;
        }

        function myFunctionHrefContact() {
            location.replace(`${window.location.href.split('/technologies')[0]}/contact-us`);
        }

    </script>
@endpush
