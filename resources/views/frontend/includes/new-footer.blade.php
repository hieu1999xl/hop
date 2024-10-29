@php
    $MenuServices= App\Models\Menu::where('parent_id', '=', '65')->where('status', '=', '1')->orderBy('order')->get();
    $MenuIndustries= App\Models\Menu::where('parent_id', '=', '72')->where('status', '=', '1')->orderBy('order')->get();
    $Menus= App\Models\Menu::where('parent_id', '=', '0')->where('id', '!=', '65')->where('status', '=', '1')->where('order', '>', '0')->orderBy('order')->get();
@endphp
<footer class="new-footer">
    <div class="container ">
        <div class="row footer-general">
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-offices">
                <div class="footer-general-title">
                    <p class="title_footer font_weight_700">{{trans('frontend.facesheetleft1')}}</p>
                </div>
                <div class="footer-general-body">
                    <ul class="address_footer">
                        <li class="footer-general-content"><a href="https://maps.app.goo.gl/spUbBdnNsYmkVopS7"
                                                              target="_blank">{{trans('frontend.headadd')}}</a>
                        </li>
                        <li class="footer-general-phone"><a href="tel:035662832">{{trans('frontend.telhead1')}}</a></li>
                    </ul>
                    <ul class="address_footer">
                        <li class="footer-general-via_email">
                            <a href="mailto:hotro@human-life.vn" class="contact-via_email">hotro@human-life.vn</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-services">
                <div class="footer-general-title">
                    <p class="title_footer font_weight_700">{{trans('frontend.ServicesMenu')}}</p>
                </div>
                <ul class="list_menu_footer">
                    @php
                        $items_menu_lv3= App\Models\Menu::where('parent_id', '=', 73)->where('status', '=', '1')->orderBy('order')->get();
                    @endphp
                    @foreach ($items_menu_lv3 as $item)
                        @php
                            if (str_contains($item->slug, 'https')) {
                            $url = $item->slug;
                            } else {
                            $url = '/'.$item->slug;
                            }
                        @endphp
                        <li class="menu_lv3">
                            <a href="{{$url}}">{{trans('services.'.$item->name) }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-quick_link">
                <div class="footer-general-title">
                    <p class="title_footer font_weight_700">{{trans('frontend.quicklink')}}</p>
                </div>
                <ul class="list_menu_footer">
                    @foreach ($Menus as $itemMenu)
                        <li class="menu_lv3">
                            <a href="{{'/'.$itemMenu->slug}}">{{trans('frontend.'.$itemMenu->name) }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 followUs">
                <div class="footer-general-title">
                    <p class="title_footer font_weight_700">{{trans('frontend.followus')}}</p>
                </div>
                <div>
                    <p class="text_followus">{{trans('frontend.inbox')}}</p>
                    <div class="input-group-follow">
                        <input type="email" class="input" id="Email" name="Email" placeholder="hotro@human-life.vn"
                               autocomplete="off">
                        <input class="button--submit" value="Subscribe" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-block">
        <div class="container contain-footer-copyright">
            <div class="row row-footer-copyright">
                <div class="col-xl-3 col-lg-12 footer-copyright-logo footer-copyright">
                    <a href="{{ route('frontend.index') }}">
                        <img class="logo_header align-middle" src="{{ asset('frontend/assets/images/logo_white.png')}}"
                             alt="logo"/>
                    </a>
                </div>
                <div class="col-lg-12 mobile_visible">
                    <ul>
                        <li id="fb"><a href="#" target="_blank" rel="noopener noreferrer">
                                <img class="social_button"
                                     src="{{asset('frontend/assets/images/social-button/facebook.svg')}}"
                                     alt="facebook"/>
                            </a></li>
                        <li id="link"><a href="#" target="_blank" rel="noopener noreferrer">
                                <img class="social_button"
                                     src="{{asset('frontend/assets/images/social-button/in.svg')}}" alt="linkedin"/>
                            </a></li>
                        <li id="email"><a href="mailto:hotro@human-life.vn">
                                <img class="social_button"
                                     src="{{asset('frontend/assets/images/social-button/mail.svg')}}" alt="email"/>
                            </a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-12 footer-copyright-content footer-copyright">
                    <p class="align-middle font_weight_300">
                        {{trans('frontend.copyright')}}
                    </p>
                </div>
                <div class="col-xl-3 col-lg-12 footer-copyright-privacy footer-copyright">
                    <ul class="align-middle">
                        <li>
                            <a class="font_weight_300" href="/privacy">
                                {{trans('frontend.privacy')}}
                            </a>
                        </li>
                        <li>
                            <a class="font_weight_300" href="/contact-us">
                                {{trans('frontend.Contact Us')}}
                            </a>
                        </li>
                        <li>
                            <a class="font_weight_300" href="https://maps.app.goo.gl/spUbBdnNsYmkVopS7" target="_blank">
                                {{trans('frontend.sitemap')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
