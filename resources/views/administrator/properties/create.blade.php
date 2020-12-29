@extends('layouts.admin')
@section('content')
    {!! Form::open(array('url' =>url("administrator/properties/1"),'method'=>'POST','files' => true)) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a
                                    class="btn btn-dark btn-sm"
                                    href="{{ url()->previous() }}">
                                    <i class="fas fa-undo-alt mr-2"></i>
                                    Back</a>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-save mr-2"></i>
                                    Submit</button>
                            </div>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Site name</label>
                                {!! Form::text('site_name', $pro->site_name, array('placeholder' => 'Name','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Site Url</label>
                                {!! Form::text('site_url', $pro->site_url, array('placeholder' => 'site url','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                {!! Form::text('phone', $pro->phone, array('placeholder' => 'Phone','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                {!! Form::text('email', $pro->email, array('placeholder' => 'email','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Send Email</label>
                                {!! Form::text('email_send', $pro->email_send, array('placeholder' => 'email booking','class' => 'form-control','required'=>'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Facebook</label>
                                {!! Form::text('fb_url', $pro->fb_url, array('placeholder' => 'facebook url','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>instagram</label>
                                {!! Form::text('instagram_url', $pro->instagram_url, array('placeholder' => 'facebook url','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Twitter</label>
                                {!! Form::text('twitter_url', $pro->twitter_url, array('placeholder' => 'twitter url','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom field</label>
                                {!! Form::text('agoda_url', $pro->agoda_url, array('placeholder' => 'Agoda url','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom field</label>
                                {!! Form::text('booking_url', $pro->booking_url, array('placeholder' => 'booking url','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom field</label>
                                {!! Form::text('trip_url', $pro->trip_url, array('placeholder' => 'Tripadvisor url','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom field</label>
                                {!! Form::text('exp_url', $pro->exp_url, array('placeholder' => 'Expedia url','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                {!! Form::textarea('address', $pro->address, array('placeholder' => 'Address','class' =>'form-control','rows' =>2)) !!}
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <img
                                    class="img-thumbnail01-preview img-fluid"
                                    src="{{!empty($pro->logo)?url("{$pro->logo}"):"https://via.placeholder.com/675x450.png"}}"
                                    alt="preview">
                                <div class="input-file input-file-image mt-2">
                                    {!! Form::hidden("thumbnail01",$pro->logo,array("id"=>"file_thumbnail01","class"=>"form-control")) !!}
                                    <label for="file_upload" class="btn-thumbnail01 label-input-file btn btn-dark btn-round">
                                        <span class="btn-label">
                                            <i class="fa fa-file-image"></i>
                                        </span>
                                        Logo
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@section("head")
    <link rel="stylesheet" href="{{asset("admin/css/tagsinput.css")}}">
@endsection
@section("script")
<script src="{{URL::asset("ckfinder/ckfinder.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".btn-thumbnail01").on("click",function(){
            selectFileWithCKFinder("file_thumbnail01",'.img-thumbnail01-preview');
        });
    });

    function selectFileWithCKFinder( elementId,elementClss ) {
        CKFinder.modal( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                console.log(finder);
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var output = document.getElementById( elementId );
                    output.value = file.getUrl();
                    $(elementClss).attr('src', file.getUrl());
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var output = document.getElementById( elementId );
                    output.value = evt.data.resizedUrl;
                } );
            }
        } );
    }

</script>
@endsection
