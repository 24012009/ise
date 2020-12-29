@extends('layouts.web')
@section('head')
    <meta name="keywords" content="{{$seo->meta_keyword}}">
    <meta name="description" content="{{$seo->og_description}}">
    <!--  Essential META Tags -->
    <meta property="og:title" content="{{$seo->og_title}}">
    <meta property="og:description" content="{{$seo->og_description}}">
    <meta property="og:image" content="{{$seo->og_image}}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="{{$seo->og_image}}">
    <meta name="twitter:description" content="{{$seo->og_description}}"/>
    <meta name="twitter:title" content="{{$seo->og_title}}" />
    <meta name="twitter:image" content="{{$seo->og_image}}" />
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="ISE"/>
    <meta name="twitter:image:alt" content="{{$seo->og_title}}">
    <meta name="robots" content="index, follow">
@endsection
@section("header-promotion")
    @if($promotion->count()>0)
        <div class="container-fluid bg-lochmara">
            Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher
            with a retake
        </div>
    @endif
@endsection
@section("slide")
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($slider as $i=>$rows)
                <div class="carousel-item {{($i==0)?"active":""}}" style="background-image: url({{asset($rows->images)}});">
                    <img src="{{asset($rows->images)}}" class="d-block w-100" alt="{{$rows->slide_title}}">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>{{$rows->slide_title}}</h1>
                        <p>
                            {!! $rows->details !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section("content")
    <div class="container position-relative bg-emerald set-height-80 set-z-index-top set-border-radius-82 clear-border-radius-xs-0 cpadding">
        <div class="row">
            <div class="col-md-12 text-center">
                <i class="bi bi-info-circle"></i>
                The current event, COVID-19 have impacted schools. I
                Inovation School of Education have decided to convert all in-person classes to live-online
                classes.For more information, <a href="#">click here</a>.
            </div>
        </div>
    </div>
    @if(isset($sections))
        @foreach ($sections as $index => $rows)
            @include($rows->templateSection->backend_view,[$rows])
        @endforeach
    @endif

{{--    <div class="container-fluid p-5">--}}
{{--        <div class="row d-flex align-items-center">--}}
{{--            <div class="col-lg-5 col-md-5 pb-5 text-right">--}}
{{--                <img src="{{asset("/uploads/images/section/img-01.png")}}" class="img-fluid" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-lg-7 col-md-7 pb-5">--}}
{{--                <h3 class="ise-header-line">Learning never stops</h3>--}}
{{--                <p class="mt-5">--}}
{{--                    ISE represents a progressive innovation of education in accredited courses tailored to suit your own--}}
{{--                    desire to learn.--}}
{{--                    <br/>--}}
{{--                    With years of experience in hands-on training coupled with the most modern methods of knowledge--}}
{{--                    delivery, ISE stands out as exemplary in impacting practical skills in--}}
{{--                    our trainees which in turn empowers them to reach their greater potentials and secure a more--}}
{{--                    promising future.<br/>--}}
{{--                    Whether you aim to become an accountant, software engineer, consultant, manager or even a Chief--}}
{{--                    Executive Officer of your own business;--}}
{{--                    ISE will equip you with the knowledge and skills to make it in the real world.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid background-size-qb-certified-user"--}}
{{--         style="min-height:555px; background: url('{{asset("/uploads/images/section/img-02.png")}}'); position: relative">--}}
{{--        <a href="#" class="intro-banner-vdo-play-btn pinkBg" target="_blank">--}}
{{--            <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-play-fill text-white" fill="currentColor"--}}
{{--                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                <path--}}
{{--                    d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>--}}
{{--            </svg>--}}
{{--            <span class="ripple pinkBg"></span>--}}
{{--            <span class="ripple pinkBg"></span>--}}
{{--            <span class="ripple pinkBg"></span>--}}
{{--        </a>--}}
{{--        <div class="ise-block-play-sm py-3">--}}
{{--            <h3>QuickBooks Certified User Success</h3>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid ise-bg-blue p-0">--}}
{{--        <div class="container py-5">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 py-5">--}}
{{--                    <h2 class="text-center">Our most popular courses</h2>--}}
{{--                    <p class="text-center">--}}
{{--                        We offer numerous Certification programs ranging from language to technology, business to--}}
{{--                        finance.<br/>--}}
{{--                        However, these are the ones people are mostly excited about lately--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-100 position-relative set-index-3">--}}
{{--                <ul class="nav nav-tabs ise-custom-tabs" id="myTab" role="tablist">--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link active py-3 px-5" data-active="1" id="home-tab" data-toggle="tab"--}}
{{--                           href="#home" role="tab" aria-controls="home" aria-selected="true">--}}
{{--                            <svg--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                width="100%">--}}
{{--                                <image x="0px" y="0px" width="100%"--}}
{{--                                       xlink:href="data:img/png;base64,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"/>--}}
{{--                            </svg>--}}
{{--                            <span>Classroom Training</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link py-3 px-5" id="profile-tab" data-active="0" data-toggle="tab" href="#profile"--}}
{{--                           role="tab" aria-controls="profile" aria-selected="false">--}}
{{--                            <svg--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                width="100%">--}}
{{--                                <image x="0px" y="0px" width="100%"--}}
{{--                                       xlink:href="data:img/png;base64,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"/>--}}
{{--                            </svg>--}}
{{--                            <span>Online Training</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link py-3 px-5" id="contact-tab" data-active="0" data-toggle="tab" href="#contact"--}}
{{--                           role="tab" aria-controls="contact" aria-selected="false">--}}
{{--                            <svg--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                width="100%">--}}
{{--                                <image x="0px" y="0px" width="100%"--}}
{{--                                       xlink:href="data:img/png;base64,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"/>--}}
{{--                            </svg>--}}
{{--                            <span>Self-paced Study</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="tab-content tab-content-costomize" id="myTabContent">--}}
{{--                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">--}}
{{--                        <div class="card-deck card-customize">--}}
{{--                            <div class="card">--}}
{{--                                <img src="{{asset("/uploads/images/section/tab-01.png")}}" class="card-img-top"--}}
{{--                                     alt="Core classroom training">--}}
{{--                                <div class="card-body">--}}
{{--                                        <span class="card-no">--}}
{{--                                            <b>1</b>--}}
{{--                                            <span class="cicle"></span>--}}
{{--                                        </span>--}}
{{--                                    <h5 class="card-title">Core classroom training</h5>--}}
{{--                                    <p class="card-text">--}}
{{--                                        We’ll take you through the key functionality of QuickBooks in <br/>--}}
{{--                                        our four-day session--}}
{{--                                    </p>--}}
{{--                                    <p class="card-text">--}}
{{--                                        <a href="/coursetopics" class="text-muted">--}}
{{--                                            Learn More--}}
{{--                                        </a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <img src="{{asset("/uploads/images/section/tab-02.png")}}" class="card-img-top"--}}
{{--                                     alt="Core classroom training">--}}
{{--                                <div class="card-body">--}}
{{--                                          <span class="card-no">--}}
{{--                                              <b>2</b>--}}
{{--                                              <span class="cicle"></span>--}}
{{--                                          </span>--}}
{{--                                    <h5 class="card-title">Practice</h5>--}}
{{--                                    <p class="card-text">--}}
{{--                                        These performance-based assessment and test preparation tools help individuals--}}
{{--                                        achieve QuickBooks--}}
{{--                                    </p>--}}
{{--                                    <p class="card-text">--}}
{{--                                        <a href="#" class="text-muted">--}}
{{--                                            Learn More--}}
{{--                                        </a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <img src="{{asset("/uploads/images/section/tab-03.png")}}" class="card-img-top"--}}
{{--                                     alt="Core classroom training">--}}
{{--                                <div class="card-body">--}}
{{--                                          <span class="card-no">--}}
{{--                                              <b>3</b>--}}
{{--                                              <span class="cicle"></span>--}}
{{--                                          </span>--}}
{{--                                    <h5 class="card-title">Take the exam</h5>--}}
{{--                                    <p class="card-text">--}}
{{--                                        QuickBooks Certified User exam vouchers will now include access to both the--}}
{{--                                        QuickBooks Desktop--}}
{{--                                    </p>--}}
{{--                                    <p class="card-text">--}}
{{--                                        <a href="#" class="text-muted">--}}
{{--                                            Learn More--}}
{{--                                        </a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>--}}
{{--                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="wave-container">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">--}}
{{--                <path fill="#0087dc" fill-opacity="0.25"--}}
{{--                      d="M0,128L40,133.3C80,139,160,149,240,138.7C320,128,400,96,480,96C560,96,640,128,720,149.3C800,171,880,181,960,186.7C1040,192,1120,192,1200,176C1280,160,1360,128,1400,112L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
@section("footer")
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12 col-xs-12 text-center">
                <img src="{{asset("uploads/images/logo.png")}}" class="img-fluid"/>
                <div class="social-network">
                    <ul>
                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="31px" height="31px">
                                    <image x="0px" y="0px" width="31px" height="31px"
                                           xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAMAAAAocOYLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAn1BMVEUAAAA7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg8WpiGmL/J0ePg5e/n6/Lj5/Czv9exvdb////P1uZgeKuVpcf7/P27xdu2wdmXp8intdG+yN2qt9Jmfa+RosXP1+bW3Op3jLidrMy4wtmjsc+On8RHY55UbqW0wNi/yd1EYZ1CX5xDYJxy/4YOAAAAEXRSTlMAAzh1n7bAGYjnBn73Icot5kRqeEoAAAABYktHRBp1Z+QyAAAAB3RJTUUH5AocERAxF4bYngAAAPxJREFUKM+Nk3t7giAUxlHQULxRWy1brXVxaxet1ff/bJFTzhHssfcv4MeBcyVEy3Ep83yPUdchtkY8kK0CPjJoKCKJFYkQ4ziRppIYcJpJW1mqrfuwutC8EMLj48nT83T20n7x74MAk3l+06Ldijow8Pw17/LoFiYH86WCq7f1uz7gKmuQFrlRfItdDBziou1O8XUnBpdQvd4XH4p/FsUBOCVMr7/yRt/AGfFs/gPcI77Nf4H7yL6sjgqequoP28P/ff4z5H8fp4Px4/xZXOUP59/ivFs/k9f1Q/U3uTD6x+BN/0D/dXkWm/17LsvyonH6cP8Pzs/g/N2d3yuPQjf68Rt+RwAAAABJRU5ErkJggg=="/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="31px" height="31px">
                                    <image x="0px" y="0px" width="31px" height="31px"
                                           xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAMAAAAocOYLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA7VBMVEUAAABVrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5gse6UyPCjz/CJw+9Xre5fsO5WrO6o0fB3u+/l7fLx8vLT5fGm0PDU5fFks+5rtu++2/Fcr+5Yre7f6vK72vGNxe9stu/a6PGBwO94vO/G3/Fbr+7c6PGdzPCLxO9esO6YyvDs8PLt8PJntO7D3fGw1fBisu7H3/F/v++z1vDo7vLS5PHu8fLw8fJ1u+/r7/KZyvBxue+62fGby/DE3vHV5fF6ve+czPDd6fGx1fCAv+9Wre7///+b8aEuAAAAEXRSTlMAAzh1n7bAGYjnBn73Icot5kRqeEoAAAABYktHRE4ZYXHfAAAAB3RJTUUH5AocERIFBAROqQAAATBJREFUKM+Fk3d7gjAQxgMBjIDodVCqZ0uXrdi9h92t3d//6xTIEFCevP8kz/1yGe9dCFEyTGrZjm1R0yCzarAmSDVZo0Jdz4eifM8t4lYAVQWtKW53YFadtsqeh9MFYgc3gPkK+B08qJOXP8yv5X72TFYJLiwuLYcQrmRzlrrGbYlWQ467PUTsr63HuVEGMXl4Aze3snF7B3MNdvOwSSjne4jDJB1HHOP+QR6mxOI8Osy2PRodC37Cwxax+SQ+PcOCzsVlbeLwyQWWNBTckflwWeJXKl+cD9c3RX4L8nwqfbkbT/F9JIJUvh8geVD4sSuDpvQv1dPgWfAX1WhGwf/XN5H9rmrBVP2SiTAWPz7L9RP1j78m3+Ne/+f3r1J/bf/o+k/bv9r+1/4f7f+r/b//N18+Uqb/VH0AAAAASUVORK5CYII="/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="30px" height="30px">
                                    <image x="0px" y="0px" width="30px" height="30px"
                                           xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAulBMVEUAAAAAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerlCm8lortInjcJeqc/x8vLq7/AfisCTw9xOocw/msjS4usRgr0Whb4zk8UJfrsojsJbp84LgLw5lsYJf7tiq9CRwtuButg8mMdqr9IeicCs0OLL3+mLv9pFnMmPwdtBmsiax92+2eYEfLrc6O2/2eaXxd261+XF3Oe11OQhisFMoMsvksQ9mcj///8qSbQyAAAAD3RSTlMAFFiNrMBBtfwiuFHxZf30Q8ReAAAAAWJLR0Q90G1RWQAAAAd0SU1FB+QKHBESJT9qbmEAAAEDSURBVCjPhZPZVsQgDIYptKXtLHHJuC91xnHfd9H3fy4jTasGPPwXOSHfIZAQlBqUaZMXRW50pkKVtgJWZUsB6wb+qKl/09EYhMajHzqZQqDpZNgbocR5f+0zr6yuyfzd+f5W64izDcEbX5F3NxFxS+b/rs96b3uGO7sSW+oVd2Nv/yC4XZUp3XmHbdseAZn54nh5cspcK9M5Z3T2OZC5uCSDV13UqFxg1rWP5qqQ+OZ2SfbOR4sA3wM8PCI+MZbJn2nxgvjKyU0Ev/XY9IXFse7bEsXUFm5qFNvhSaK4HB703Tm3ADIftJg799k/KI9DKB6HxDClRjE1yKlvkPpE/33BLw/YM0BQ12GbAAAAAElFTkSuQmCC"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="29px" height="29px">
                                    <image x="0px" y="0px" width="29px" height="29px"
                                           xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAMAAABhTZc9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAY1BMVEUAAADSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTbTEHjdWzTJBfvr6r////mg3v0y8j31tTlgXnwtrLdWU/xurbfYVj//v7XPDHtpJ/++Pjuraj+/Pzk276OAAAADXRSTlMAJXe34fw9vA2iI9nnvLFkqgAAAAFiS0dEEnu8bAAAAAAHdElNRQfkChwREjhcbAK4AAAAtUlEQVQoz4WT5xaDIAyFw1IRQ53d6/2fsm2qZVTh+xPOvQdIQgBYYFxIhUoKziCmKNFRFoFXaQzRlTNrgzGm/pkN/tPMdmVwDfM9XOM6mrLFLT6Zz6XYncPOhb2bQIu26326llQGnOLQhwykchAUx8gdSRUgKU6k7Q+LO5EqQXnuEe3JdxVg4CKeL87FaO/1dg/2Bvc+ntG96ZzT9aZ7le5z5o3S75uZjfRcZWYyM8+Zv7D1j14BpSWtHLJnZgAAAABJRU5ErkJggg=="/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-6 col-xs-12">
                <div class="block-footer">
                    <h3>Business Software</h3>
                    <ul>
                        <li>
                            <a href="#">CAS Suite</a>
                        </li>
                        <li>
                            <a href="#">QuickBooks Desktop</a>
                        </li>
                        <li>
                            <a href="#">QuickBooks Online</a>
                        </li>
                        <li>
                            <a href="#">Sage</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-6 col-xs-12">
                <div class="block-footer">
                    <h3>Certifications</h3>
                    <ul>
                        <li>
                            <a href="#">QuickBooks Certified User</a>
                        </li>
                        <li>
                            <a href="#">Microsoft Certification</a>
                        </li>
                        <li>
                            <a href="#">IC3 Digital Literacy Certification</a>
                        </li>
                        <li>
                            <a href="#">Entrepreneurship and Small Business</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-6 col-xs-12">
                <div class="block-footer">
                    <h3>About us</h3>
                    <ul>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="#">Our Story</a>
                        </li>
                        <li>
                            <a href="#">Our Mission</a>
                        </li>
                        <li>
                            <a href="#">Our Vision</a>
                        </li>
                        <li>
                            <a href="#">Core Values</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-6 col-xs-12">
                <div class="block-footer">
                    <h3>Testing Centers</h3>
                    <ul>
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        <li>
                            <a href="#">FAQs</a>
                        </li>
                        <li>
                            <a href="#">Exam policies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row  border-top mt-3 py-4">
            <div class="col-lg-8 col-md-8 col-12 col-xs-12">
                Copyright ©2020 <a href="#" class="btn btn-link">Innovation School of Education</a>. All Rights Reserved.
            </div>
            <div class="col-lg-4 col-md-4 col-12 col-xs-12">
                <div class="footer-careers">
                    <ul>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
