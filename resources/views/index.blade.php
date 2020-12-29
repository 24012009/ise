@extends('layouts.master')
@section('head')
    {{--    seo and other css and js    --}}
    <meta name="description" content="{{$page->og_description}}">
    <meta name="keywords" content="{{$page->meta_keyword}}">
    <!--  Essential META Tags -->
    <meta property="og:title" content="{{$promotions->isNotEmpty() ? $promotions->first()->promotion_title : $page->og_title}}">
    <meta property="og:description" content="{{$page->og_description}}">
    <meta property="og:image" content="{{$promotions->isNotEmpty() ? $promotions->first()->thumbnail : $page->og_image}}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="{{$page->og_image}}">
    <meta name="twitter:description" content="{{$page->og_description}}" />
    <meta name="twitter:title" content="{{$promotions->isNotEmpty() ? $promotions->first()->promotion_title : $page->og_title}}" />
    <meta name="twitter:image" content="{{$promotions->isNotEmpty() ? $promotions->first()->thumbnail : $page->og_image}}" />
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="">
    <meta name="twitter:image:alt" content="Alt text for image">
    <meta name="robots" content="index, follow">

@endsection
@section('promotion')
    @if($promotions->isNotEmpty())
        @include('partial.promotion', ['promotions' => $promotions])
    @endif
@endsection
@section("slide")
    <header>
        @if($slides)
            @component('partial.slide',['promotions' => $promotions])
                @if($promotions->isNotEmpty())
                    <div class="swiper-slide">
                        <img src="{{$promotions->first()->banner}}" alt="{{$promotions->first()->promotion_title}}" width="100%">
                    </div>
                @endif
                @foreach($slides as $index => $slide)
                    <div class="swiper-slide">
                        @if(explode(".",$slide->images)[1] =="mp4")
                            <video width="100%" autoplay muted loop>
                                <source src="{{$slide->images}}" type="video/mp4">
                            </video>
                        @else
                            <img src="{{$slide->images}}" alt="{{$slide->slider_name}}" width="100%">
                        @endif
                    </div>
                @endforeach
            @endcomponent
        @endif
    </header>
@endsection
@section("article")
    @if(isset($sections))
        @foreach ($sections as $index => $rows)
            @include($rows->templateSection->backend_view,[$rows])
        @endforeach
    @endif
@endsection
