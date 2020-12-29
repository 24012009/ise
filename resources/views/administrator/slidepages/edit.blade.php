@extends('layouts.admin')
@section('content')
    {!! Form::model($slide, ['method' => 'PATCH','url' => "administrator/pages/{$page_id}/slide/{$slide->slide_id}",'files' => true]) !!}
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a
                                    class="btn btn-dark btn-sm"
                                    href="{{ url("administrator/pages/{$page_id}/slide")}}">
                                    <i class="fas fa-undo-alt mr-2"></i>
                                    Back</a>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-save mr-2"></i>
                                    Submit
                                </button>
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
                    @if ($message = Session::get('success'))
                        <div class="col-lg-12 mt-2">
                            <div class="alert alert-success shadow-sm">
                                <h3 class="lead">Success</h3>
                                <p>{{ $message }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Slide name</label>
                                {!! Form::text('slide_name', $slide->slider_name, array('placeholder' => 'Name','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Slide title</label>
                                {!! Form::text('slide_title', $slide->slide_title, array('placeholder' => 'Name','class' =>'form-control form-control-flat')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Position</label>
                                {!! Form::select('sl_position', ['left'=>'Left','right'=>'right','Center'],$slide->position, array('class' =>'form-control form-control-flat')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom Field</label>
                                {!! Form::text('custom_field', $slide->custom_field, array('placeholder' => 'Custom Field','class' =>'form-control form-control-flat')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Content</label>
                                {!! Form::textarea('content', $slide->details, array('class' =>'form-control form-control-flat basictools','id'=>'content')) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="accordion accordion-secondary" id="accordionExample">
                        <div class="card mb-0 border rounded-0">
                            <div class="card-header p-2" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Status & Visibility
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse bg-white show " aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body pt-0 pb-0">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Visibility</label>
                                        <div class="col-sm-9">
                                            <select name="is_active" class="form-control">
                                                <option value="1" {{($slide->is_active==1)?"selected":""}}>Publish</option>
                                                <option value="0" {{($slide->is_active==0)?"selected":""}}>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lbl_orderby" class="col-sm-3 col-form-label">Order by</label>
                                        <div class="col-sm-9">
                                            {!! Form::text('order_by',$slide->is_order, array('class' =>'form-control','required'=>'')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0  border-left  border-right border-bottom rounded-0">
                            <div class="card-header p-2" id="headingThree">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link collapsed"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Slide
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse bg-white" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body pt-0 pb-0">
                                    <div class="form-group">
                                        @if(explode(".",$slide->images)[1] =="mp4")
                                            <video width="100%" controls>
                                                <source src="{{url($slide->thumbnail)}}" id="video_here">
                                                Your browser does not support HTML5 video.
                                            </video>
                                        @else
                                            <img class="img-upload-preview img-fluid" src="{{($slide->images!="")?url($slide->thumbnail):"https://via.placeholder.com/1200x630.png"}}" alt="preview">
                                        @endif
                                        <div class="input-file input-file-image mt-2">
                                            <input type="text" value="{{$slide->thumbnail}}" class="form-control form-control-file file_thumbnail01" id="file_thumbnail01"
                                                   name="file_upload">
                                            <label for="file_upload" class="label-input-file btn btn-dark btn-round file_upload">
                                            <span class="btn-label">
                                                <i class="fa fa-file-image"></i>
                                            </span>
                                                Upload a Image
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::hidden('page_id',$page_id, array('id' => 'page_id')) }}
@endsection
@section("script")
    <script src="{{URL::asset("admin/ckeditor/ckeditor.js")}}"></script>
    <script src="{{URL::asset("ckfinder/ckfinder.js")}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
            $('textarea.basictools').each( function() {
                var editor = CKEDITOR.replace($(this).attr('id'),{
                    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserWindowWidth: '1000',
                    filebrowserWindowHeight: '700',
                    height: $(this).attr('rows')*20,
                    extraPlugins: 'uploadimage,image,html5video,justify,collapsibleItem,btbutton',
                    toolbar:[
                        { name: 'document', items: [ 'Source', 'Format'] },
                        { name: 'tools', items: [ 'Maximize', 'btbutton'] },
                        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                        { name: 'insert', items: ['Live'] },
                        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline'] },
                        { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent','JustifyLeft', 'JustifyCenter', 'JustifyRight'] },
                        { name: 'links', items: ['CreateDiv','Link', 'Unlink','Image','Html5video'] }
                    ]
                });
                CKFinder.setupCKEditor( editor );
            });
            $(".file_upload").on("click",function(){
                selectFileWithCKFinder("file_thumbnail01",'.img-upload-preview');
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
                    });

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
    </script>
@endsection
