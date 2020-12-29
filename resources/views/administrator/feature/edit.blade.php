@extends('layouts.admin')
@section('content')
    {!! Form::model($feature, ['method' => 'PATCH','route' => ['feature.update',$Pid,$id],'files' => true]) !!}
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a
                                    class="btn btn-dark btn-sm"
                                    href="{{ url("administrator/products/feature/{$Pid}") }}">
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
                        @if ($message = Session::get('success'))
                            <div class="col-md-12">
                                <div class="alert alert-success no-box-shadow" role="alert">
                                    <p>{{ $message }}</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Feature title</label>
                                {!! Form::text('feature_name', $feature->feature_title, array('placeholder' => 'Title','class' =>'form-control form-control-flat')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Product</label>
                                {!! Form::select('sl_product',$productList,$feature->product_id, array('class' =>'form-control form-control-flat')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            {!! Form::textarea("details",$feature->details,array("class"=>'form-control form-control-flat basictools','id'=>'acticle','rows'=>5)) !!}
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="card-sub">
                                <i class="fas fa-check"></i> <code>&lt;i class="fas fa-check"&gt;&lt;/i&gt;</code>
                                <i class="fas fa-circle"></i> <code>&lt;i class="fas fa-circle"&gt;&lt;/i&gt;</code>
                                <i class="fas fa-check-circle"></i> <code>&lt;i class="fas fa-check-circle"&gt;&lt;/i&gt;</code>
                                <i class="far fa-check-circle"></i> <code>&lt;i class="far fa-check-circle"&gt;&lt;/i&gt;</code>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="form-check p-0">
                                    <label class="form-check-label">
                                        <input class="form-check-input name" name="marge" type="checkbox" value="1">
                                        <span class="form-check-sign">Yes, I want to marge all version.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <tr>
                                        @foreach($versions as $rows)
                                            <th>{{$rows->versions}}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @foreach($versions as $rows)
                                            @php($remark=$feature->getmatching($id,$rows->id))
                                            <td>
                                                <input type="text" name="remark[]" value="{{!empty($remark->remark)?$remark->remark:""}}" class="form-control form-control-flat">
                                                <input type="hidden" name="version[]" value="{{$rows->id}}" class="form-control form-control-flat">
                                            </td>
                                        @endforeach
                                    </tr>
                                </table>
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
                                        <label for="lbl_Visibility" class="col-sm-3 col-form-label">Visibility</label>
                                        <div class="col-sm-9">
                                            <select name="is_active" class="form-control">
                                                <option value="1" {{($feature->is_active==1)?"selected":""}}>Active</option>
                                                <option value="0" {{($feature->is_active==0)?"selected":""}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lbl_orderby" class="col-sm-3 col-form-label">Order by</label>
                                        <div class="col-sm-9">
                                            {!! Form::text('is_order',$feature->is_order, array('class' =>'form-control','required'=>'')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header p-2" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Image
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse bg-white " aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="form-group col-md-12">
                                        <img
                                            class="img-thumb-col2-preview img-fluid"
                                            src="{{!empty($feature->images)?asset($feature->images):"https://via.placeholder.com/350x120.png"}}"
                                            alt="preview">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="input-group mb-3">
                                            <input type="text" name="file_upload" value="{{$feature->images}}" class="form-control" id="thumb-col2" aria-describedby="basic-addon3">
                                            <div class="input-group-prepend">
                                                <button type="button" class="input-group-text btn-thumb-col2" id="btn-thumb-col2">Browse</button>
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
    </div>
    {!! Form::close() !!}
@endsection

@section("script")
    <script src="{{URL::asset("admin/js/bootstrap-tagsinput.js")}}"></script>
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
                    filebrowserWindowHeight: '200',
                    height: $(this).attr('rows')*20,
                    extraPlugins: 'uploadimage,image,html5video,justify,collapsibleItem',
                    toolbar:[
                        { name: 'document', items: [ 'Source', 'Format'] },
                        { name: 'tools', items: [ 'Maximize' ] },
                        { name: 'insert', items: ['Live'] },
                        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] },
                        { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent','JustifyLeft', 'JustifyCenter', 'JustifyRight'] },
                        { name: 'links', items: ['CreateDiv','Link', 'Unlink','Image'] }
                    ]
                });
                CKFinder.setupCKEditor( editor );
            });

            $(".btn-thumb-col2").on("click",function(){
                selectFileWithCKFinder("thumb-col2",'.img-thumb-col2-preview');
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
