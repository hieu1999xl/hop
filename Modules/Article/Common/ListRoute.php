<?php

$listRoute = [
    route('frontend.index') => "/",
    route('frontend.home') => 'home',
    route('frontend.privacy') => "privacy",
    route('frontend.terms') => 'terms',
    route('frontend.services') => "services",
    route('frontend.mobile_app_development') => 'services/mobile-app-development',
    route('frontend.dedicated_team') => 'services/dedicated-team',
    route('frontend.services_maintain') => 'services/maintenance-operation-managed-services',
    route('frontend.services_legacy') => 'services/legacy-system-migration',
    route('frontend.services_enterprise') => 'services/enterprise-custom-software-development',
    'services/testing-services' => "{{ route('frontend.services_testing')}}",
    'services/product-consultantcy-development' => "{{ route('frontend.services_product')}}",
    'technologies' => "{{ route('frontend.technology')}}",
    'technologies/java-script' => "{{ route('frontend.technology_detail')}}",
    'technologies/microsoft-platform' => "{{ route('frontend.technology_micro')}}",
    'technologies/open-source' => "{{ route('frontend.technology_opensource')}}",
    'technologies/mobile-technology' => "{{ route('frontend.technology_mobile')}}",
    'technologies/software-testing-quality-control' => "{{ route('frontend.technology_QA')}}",
    'technologies/front-end-development' => "{{ route('frontend.technology_frontend')}}",
    'news' => "{{ route('frontend.news')}}",
    'news/gio-bug' => "{{ route('frontend.new_gio_bug')}}",
    'talent' => "{{ route('frontend.talent')}}",
    'about-us' => "{{ route('frontend.about_us')}}",
    'contact-us' => "{{ route('frontend.contact-us')}}",
    'about-us/our-story' => "{{ route('frontend.our_story')}}",
    'about-us/tvj' => "{{ route('frontend.tvj')}}",
    'about-us/contact-us' => "{{ route('frontend.contact_us')}}",
    'thank-you' => "{{ route('frontend.submit_email')}}",
    'result' => "{{ route('frontend.earch_result')}}",
];
