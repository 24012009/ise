@extends('layouts.admin')
@section('content')
    {!! Form::model($products, ['method' => 'PATCH','route' => ['products.setup', $products->product_id],'files' => true]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a
                                    class="btn btn-dark btn-sm"
                                    href="{{ url("administrator/products") }}">
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
                        <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                            <div class="card-sub">
                                <i class="fas fa-check"></i> <code>&lt;i class="fas fa-check"&gt;&lt;/i&gt;</code>
                                <i class="fas fa-circle"></i> <code>&lt;i class="fas fa-circle"&gt;&lt;/i&gt;</code>
                                <i class="fas fa-check-circle"></i> <code>&lt;i class="fas fa-check-circle"&gt;&lt;/i&gt;</code>
                                <i class="far fa-check-circle"></i> <code>&lt;i class="far fa-check-circle"&gt;&lt;/i&gt;</code>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <table class="table table-bordered table-sm">
                                @foreach($compare as $i=>$rows)
                                    @php($specs=$rows->specs()->where("product_id",$id)->first())
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <label class="form-check-label mb-0">
                                                    <input class="form-check-input name" {{($rows->compare_id==$specs['compare_id'])?"checked":""}} name="specs_compare[{{$i}}]" type="checkbox" value="{{$rows->compare_id}}">
                                                    <span class="form-check-sign">{{$rows->title_specs_compare}}</span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>
                                            {!! Form::textarea("description[{$i}]",$specs['description'],['class'=>'form-control','rows'=>1]) !!}
                                        </td>
                                        <td>
                                            {!! Form::text("order[{$i}]",$specs['is_order'],['class'=>'form-control  form-control-flat']) !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

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
