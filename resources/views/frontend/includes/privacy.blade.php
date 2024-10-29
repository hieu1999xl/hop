@extends('frontend.new_layouts.app')
@section('title') {{trans('frontend.HOPPriacy')}} @endsection

@section('content')
<section id="privacy" class="section section_block">
    <div class="container">
        <div class="col-md-8 col-xl-8 col-sm-12 privacy_pc mx-auto">
            <h1 class="text-center font_weight_700 page_title mt-xl-5">Privacy Policy</h1>
            <div class="privacy-decs">
                <h2 class="text_margin"><strong>1. Introduction</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentOne')}}</h2>
                <h2 class="text_margin"><strong>2. Data We Collect</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentTwo')}}</h2>
                <h2 class="text_margin"><strong>3. Purpose of Data Use</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentThree')}}</h2>
                <h2 class="text_margin"><strong>4. Data Sharing and Disclosure</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentFour')}}</h2>
                <h2 class="text_margin"><strong>5. Data Security</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentFive')}}</h2>
                <h2 class="text_margin"><strong>6. Data Retention</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentSix')}}</h2>
                <h2 class="text_margin"><strong>7. Your Rights</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentSeven')}}</h2>
                <h2 class="text_margin"><strong>8. Cookies and Tracking Technologies</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentEight')}}</h2>
                <h2 class="text_margin"><strong>9. Changes to the Privacy Policy</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentNine')}}</h2>
                <h2 class="text_margin"><strong>10. Contact Information</strong></h2>
                <h2 class="text_margin">{{trans('frontend.PrivacyContentTen')}}</h2>
            </div>
        </div>
    </div>
</section>
@endsection
