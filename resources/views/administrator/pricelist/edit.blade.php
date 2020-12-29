@extends('layouts.admin')
@section('content')
{!! Form::model($price, ['method' => 'PATCH','url' =>"/administrator/pricelist/{$pro_id}/edit/{$price->id}",'files' => true]) !!}
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a
                                    class="btn btn-dark btn-sm"
                                    href="{{ url("administrator/pricelist/{$pro_id}") }}">
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
                                <label>Product Level</label>
                                {!! Form::select('sl_productLevel',$productList,$price->pro_level_id, array('class' =>'form-control', 'required'=>'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Product Type</label>
                                {!! Form::select('sl_producttype',$typeList,$price->pro_type_id, array('class' =>'form-control', 'required'=>'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>User No</label>
                                {!! Form::text('user_no',$price->user, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Base Price</label>
                                {!! Form::text('base_amount',$price->base_amount, array('class' => 'form-control', 'required'=>'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>CPN Price</label>
                                {!! Form::text('cpn_amount',$price->cpn_amount, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom Field</label>
                                {!! Form::text('custom_field', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom Field 1</label>
                                {!! Form::text('custom_field1', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Custom Field 2</label>
                                {!! Form::text('custom_field2', null, array('class' => 'form-control')) !!}
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
