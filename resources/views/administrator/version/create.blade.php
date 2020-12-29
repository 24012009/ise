@extends('layouts.admin')
@section('content')
{!! Form::open(array('route' =>['version.store',$Pid],'method'=>'POST','files' => true)) !!}
<div class="row">
    <div class="col-md-8">
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
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Version name</label>
                            {!! Form::text('version_name', null, array('placeholder' => 'Name','class' =>'form-control form-control-flat')) !!}
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Product</label>
                            {!! Form::select('sl_product',$productList,$Pid, array('class' =>'form-control form-control-flat')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Class</label>
                            {!! Form::text('class_css', null, array('placeholder' => 'class name','class' =>'form-control form-control-flat')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Custom Field</label>
                            {!! Form::textarea('custom_field', null, ['class' => 'form-control basictools','id'=>'col01', 'rows' =>5]) !!}
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
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lbl_orderby" class="col-sm-3 col-form-label">Order by</label>
                                    <div class="col-sm-9">
                                        {!! Form::text('is_order',0, array('class' =>'form-control','required'=>'')) !!}
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
    });

</script>
@endsection
