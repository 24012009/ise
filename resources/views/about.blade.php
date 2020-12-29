@extends('layouts.web')
@section('head')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--  Essential META Tags -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="">
    <meta name="twitter:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="">
    <meta name="twitter:image:alt" content="Alt text for image">
    <meta name="robots" content="index, follow">
@endsection
@section("header")
    <div class="container-fluid bg-lochmara">
        Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher
        with a retake
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand customize-logo-size" href="#">
                <img src="{{asset("uploads/images/logo.png")}}" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Certification
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Why Get Certified</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resource</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-auto">
                    <ul class="search-login">
                        <li>
                            <a href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                    <path fill-rule="evenodd"
                                          d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <span>Log In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endsection
@section("slide")
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source srcset="{{asset("/uploads/images/slideshow/About-us.jpg")}}" media="(min-width: 1400px)">
                    <source srcset="{{asset("/uploads/images/slideshow/about-us.jpg")}}" media="(min-width: 769px)">
                    <source srcset="{{asset("/uploads/images/slideshow/about-us.jpg")}}" media="(min-width: 577px)">
                    <img srcset="{{asset("/uploads/images/slideshow/about-us.jpg")}}" alt="responsive image"
                         class="d-block img-fluid">
                </picture>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Innovation School <br/>of Education.</h1>
                        <p>Certificate courses designed to <br/>suit your learning desire </p>
                        <img src="{{asset("/uploads/images/icon/certiport.png")}}" alt="">
                        <img src="{{asset("/uploads/images/icon/qb.png")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section("content")
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset("/uploads/images/section/InnovationSchoolofEducation.png")}}" class="img-pluid" alt=""/>
                </div>
                <div class="col-lg-6 col-md-6 pt-5">
                    <h3>Innovation School of Education (ISE)</h3>
                    <p class="font-md-4">
                        ISE is a training, exams and certification center Authorized by Intuit and Pearson Vue’s Certiport, the largest provider of performance-based certification in the world. ISE is Cambodia’s number one innovative center for learning which applies the most modern and effective methods of knowledge delivery, interactive learning, testing and globally accredited certification on a wide range of Technology, Business and Finance courses. 
                        With a mission to bridge the gap between talent and achievement in the area of education, ISE assists trainees explore themselves and reach their full potentials while rewarding their attained skill with internationally recognized qualification, to help them get ahead in their career and future endeavors.
                    </p>
                </div>
            </div>
        </div>
        <div class="container border-top py-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset("/uploads/images/section/ourstory.png")}}" class="img-pluid" alt=""/>
                </div>
                <div class="col-lg-10 col-md-10">
                    <h3>Our Story</h3>
                    <p class="font-md-4">
                        Transcending traditional methods of education has always been a challenge in the developing world where other resource-requiring priorities are seemingly endless. Someone had to take on that challenge to rise above the inadequacies and establish what would become the most effective learning center dedicated to preparing learners for the future. Innovation School is the visionary brainchild of Mr. Chey Sambatt, a man who himself underwent the Cambodian system of education experiencing its ups and downs. He sought to make a positive difference in the community starting with himself, by researching the most efficient learning methods applied internationally, especially in the areas of business and technology.<br/>
                        After attaining his own certifications as a QuickBooks consultant coupled with years of experience in providing business solutions, he partnered with several international players including Pearson’s Certiport ™ to make ISE a dream come true. Say goodbye to Chalk and Talk methods of teaching and learning, say goodbye to the need to travel out of Cambodia to attain quality training and certification. Now you can do it all here, in the INNOVATION School, Siem Reap, Cambodia.
                    </p>
                </div>
            </div>
        </div>
        <div class="container border-top py-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset("/uploads/images/section/ourvision.png")}}" class="img-pluid" alt=""/>
                </div>
                <div class="col-lg-10 col-md-10">
                    <h3>Our Vision</h3>
                    <p class="font-md-4">
                        Leadership in innovation and evolution of effective education for talent building.<br/>
                        We envisage to assit each and every trainee reach their full potentials in the interactive courses they undertake. We believe that achieving this goal has a wider implication on the national workforce.A skilled nation is a productive nation, a productive nation is a faster-growing nation, a faster-growing nation is a guarantee for a better world.
                    </p>
                </div>
            </div>
        </div>
        <div class="container border-top py-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset("/uploads/images/section/ourmission.png")}}" class="img-pluid" alt=""/>
                </div>
                <div class="col-lg-10 col-md-10">
                    <h3>Our Mission</h3>
                    <p class="font-md-4">
                        To empower our trainees with the knowledge, skills and qualifications to get ahead.<br/>
                        We do this by providing the right environment, instructors, guide and tools to motivate the individual to Learn, Practice and Get Certified. Our objective is to inspire the creativity of the individual, impact him with the skills necessary to succeed and unlock the diverse opportunities in their area of specialization. Learning never stops and neither does the evolution of learning methods. <br/>
                        The world has come a long way from blackboard learning to digitalized presentations. <br/>
                        We in ISE are proud to take it a step further by tailoring our courses to suit the way our trainees want to learn, in line with our educational revolution to foster excellence within our learning spaces…    
                    </p>
                </div>
            </div>
        </div>
        <div class="container border-top py-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset("/uploads/images/section/ourcorevalues.png")}}" class="img-pluid" alt=""/>
                </div>
                <div class="col-lg-10 col-md-10">
                    <h3>Our Core Values</h3>
                    <p class="font-md-4">
                        Our dedication to every trainee’s success is second to none, hence our values revolve around Innovation, 
                        creativity, accountability, integrity, and commitment to quality education.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer")
    <div class="container-fluid bg-white border-top">
        <div class="container mt-5">
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
            <div class="row border-top mt-3 py-4">
                <div class="col-lg-8 col-md-8 col-12">
                    Copyright ©2020 <a href="#" class="btn btn-link">Innovation School of Education</a>. All Rights
                    Reserved.
                </div>
                <div class="col-lg-4 col-md-4 col-12">
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
    </div>
@endsection
