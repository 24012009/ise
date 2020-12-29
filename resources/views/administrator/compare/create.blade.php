@extends('layouts.admin')
@section('content')
{!! Form::open(array('route' =>'compare.store','method'=>'POST','files' => true)) !!}
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a
                                class="btn btn-dark btn-sm"
                                href="{{ url("administrator/compare") }}">
                                <i class="fas fa-undo-alt mr-2"></i>
                                Back</a>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-save mr-2"></i>
                                Submit</button>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    </div>
                @endif
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
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Compare Specs List</label>
                            {!! Form::text('title_specs_compare', null, array('class' =>'form-control', 'required'=>'required')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Sub Specs</label>
                            {!! Form::text('sub_specs_compare', null, array('class' => 'form-control', 'required'=>'required')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Custom field</label>
                            {!! Form::text('custom_field', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Custom field1</label>
                            {!! Form::text('custom_field1', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            {!! Form::textarea('specs_content', null, array('class' => 'form-control basictools','id'=>'basictools')) !!}
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
                        <div id="collapseOne" class="collapse bg-white show " aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Visibility</label>
                                    <div class="col-sm-9">
                                        <select name="is_active" class="form-control">
                                            <option value="1">Publish</option>
                                            <option value="0">Private</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lbl_orderby" class="col-sm-3 col-form-label">Order by</label>
                                    <div class="col-sm-9">
                                        {!! Form::text('order_by',0, array('class' =>'form-control','required'=>'')) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0  border-left  border-right border-bottom rounded-0">
                        <div class="card-header p-2" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link"
                                        type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Thumbnail
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse bg-white " aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <img
                                        class="img-thumb-col1-preview img-fluid"
                                        src="https://via.placeholder.com/462x308.png"
                                        alt="preview">
                                    <div class="input-file input-file-image mt-2">
                                        <input type="text" class="form-control form-control-file" id="thumb-col1" name="image_compare" accept="image/*">
                                        <label for="file_upload" class="label-input-file btn btn-dark btn-round btn-thumb-col1" id="btn-thumb-col1">
                                            <span class="btn-label">
                                                <i class="fa fa-file-image"></i>
                                            </span>
                                            Image
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
{!! Form::close() !!}
@endsection
@section("head")
    <link rel="stylesheet" href="{{asset("admin/css/tagsinput.css")}}">
@endsection
@section("script")
    <script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
    <script src="{{URL::asset("admin/js/bootstrap-tagsinput.js")}}"></script>
    <script src="{{URL::asset("admin/ckeditor/ckeditor.js")}}"></script>
    <script src="{{URL::asset("ckfinder/ckfinder.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
        $('textarea.basictools').each( function() {
            var editor = CKEDITOR.replace($(this).attr('id'),{
                height: $(this).attr('rows')*20,
                extraPlugins: 'uploadimage,image',
                toolbar:[
                    { name: 'document', items: [ 'Source', 'Format'] },
                    { name: 'insert', items: ['Live'] },
                    { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] },
                    { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight'] },
                    { name: 'links', items: ['CreateDiv','Link', 'Unlink'] }
                ]
            });
            CKFinder.setupCKEditor( editor );
        });
        $(".btn-thumb-col1").on("click",function(){
            selectFileWithCKFinder("thumb-col1",'.img-thumb-col1-preview');
        });
        $(".btn-thumb-col2").on("click",function(){
            selectFileWithCKFinder("thumb-col2",'.img-thumb-col2-preview');
        });
        //
        // Defining the local dataset
        var cars = ['Audi', 'BMW', 'Bugatti', 'Ferrari', 'Ford', 'Lamborghini', 'Mercedes Benz', 'Porsche', 'Rolls-Royce', 'Volkswagen'];

        // Constructing the suggestion engine
        var cars = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: cars
        });

        // Initializing the typeahead
        $('.product_level').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing suggestions */
            },
            {
                name: 'cars',
                source: cars
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
