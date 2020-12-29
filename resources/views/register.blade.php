@extends('layouts.web')
@section('head')
    <meta name="keywords" content="{{$seo->meta_keyword}}">
    <meta name="description" content="{{$seo->og_description}}">
    <!--  Essential META Tags -->
    <meta property="og:title" content="{{$seo->og_title}}">
    <meta property="og:description" content="{{$seo->og_description}}">
    <meta property="og:image" content="{{$seo->og_image}}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:type" content="website"/>

    <meta name="twitter:card" content="{{$seo->og_image}}">
    <meta name="twitter:description" content="{{$seo->og_description}}"/>
    <meta name="twitter:title" content="{{$seo->og_title}}"/>
    <meta name="twitter:image" content="{{$seo->og_image}}"/>
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="ISE"/>
    <meta name="twitter:image:alt" content="{{$seo->og_title}}">
    <meta name="robots" content="index, follow">
@endsection
@section("header")
    @if($promotion->count()>0)
        <div class="container-fluid bg-lochmara">
            Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher
            with a retake
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container-fluid">
            <a class="navbar-brand customize-logo-size" href="/">
                <img src="{{asset($properties->logo)}}" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto">
                    {!! $menu !!}
                </ul>
                <div class="w-25 ml-auto">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <a href="{{url("/student/login")}}">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <span>Log In</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection
@section("content")
    <div class="container-fluid bg-light py-5">
        <div class="container h-100 py-9">
            <div class="row">
                <div class="col-md-6 bg-primary p-6 text-white d-flex">
                    <div class=" justify-content-center align-self-center">
                        <h3>Get exclusive access to account</h3>
                        <p class="font-default font-md-4">
                            We are in the process of developing out online course, where we aim to make the concept as
                            student
                            as possible.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 bg-white shadow-lg">
                    <div class="row">
                        <div class="col-md-12 p-4">
                            <!-- Success message -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif

                            {!! Form::open(array('url' =>url("/student/store"),'method'=>'POST','name'=>'frmRegister','id'=>'frmRegister','class'=>'p-5','files' => true)) !!}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h3 class="font-default text-center pb-3">User Registration</h3>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="lbl_prefix" class="font-weight-normal">Profix</label>
                                        {!! Form::select("Prefix",["Mr.","Miss.","Mrs."],null,["class"=>"form-control"]) !!}
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="lbl_fname" class="font-weight-normal">First name</label>
                                        {!! Form::text("first_name",old("first_name"),["class"=>$errors->has('first_name') ? 'form-control error' : 'form-control']) !!}
                                        {!! $errors->has('first_name') ?'<div class="d-block invalid-feedback">'.$errors->first('first_name').'</div>':'' !!}
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="lbl_lname" class="font-weight-normal">Last name</label>
                                        {!! Form::text("last_name",old("last_name"),["class"=>$errors->has('last_name') ? 'form-control error' : 'form-control']) !!}
                                        {!! $errors->has('last_name') ?'<div class="d-block invalid-feedback">'.$errors->first('last_name').'</div>':'' !!}
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lbl_phone" class="font-weight-normal">Phone</label>
                                        {!! Form::text("phone",old("phone"),["class"=>$errors->has('phone') ? 'form-control error' : 'form-control']) !!}
                                        {!! $errors->has('phone') ?'<div class="d-block invalid-feedback">'.$errors->first('phone').'</div>':'' !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lbl_email" class="font-weight-normal">Email</label>
                                        {!! Form::text("email",old('email'),["class"=>$errors->has('email') ? 'form-control error' : 'form-control']) !!}
                                        {!! $errors->has('email') ?'<div class="d-block invalid-feedback">'.$errors->first('email').'</div>':'' !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lbl_password" class="font-weight-normal">Password</label>
                                        {!! Form::password("password",["class"=>$errors->has('password') ? 'form-control error' : 'form-control']) !!}
                                        {!! $errors->has('password') ?'<div class="d-block invalid-feedback">'.$errors->first('password').'</div>':'' !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lbl_confirmPassword" class="font-weight-normal">Confirm password</label>
                                        {!! Form::password("confirm_password",["class"=>$errors->has('password') ? 'form-control error' : 'form-control']) !!}
                                        {!! $errors->has('confirm_password') ?'<div class="d-block invalid-feedback">'.$errors->first('confirm_password').'</div>':'' !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="lbl_address" class="font-weight-normal">Address</label>
                                        {!! Form::textarea("Address",null,["class"=>"form-control","rows"=>3]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! app('captcha')->display() !!}
                                    {!! $errors->has('g-recaptcha-response') ?'<div class="d-block invalid-feedback">'.$errors->first('g-recaptcha-response').'</div>':'' !!}
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill px-5">Register</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer")
    <div class="container-fluid border-top">
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
                    Copyright ©2020 <a href="#" class="btn btn-link">Innovation School of Education</a>. All Rights
                    Reserved.
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
    </div>
@endsection
