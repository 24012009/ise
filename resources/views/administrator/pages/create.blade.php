@extends('layouts.admin')
@section('content')
{!! Form::open(array('route' =>'pages.store','method'=>'POST','files' => true)) !!}
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a
                                class="btn btn-dark btn-sm"
                                href="{{ url("administrator/pages") }}">
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
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Page name</label>
                            {!! Form::text('page_name', null, array('placeholder' => 'Name','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Sub Title</label>
                            {!! Form::text('sub_title', null, array('placeholder' => 'Title website','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-none">
            <div class="card-body">
                <div class="card-title">Social Network</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Social Title
                                <small class="text-muted">(40-80 characters)</small>
                            </label>
                            {!! Form::text('title_social', null, array('placeholder' => 'Title social','class' => 'form-control','maxlength'=>'80')) !!}
                        </div>
                        <div class="form-group">
                            <label>Description
                                <small class="text-muted">(125 characters).</small>
                            </label>
                            {!! Form::textarea('txt_description', null, array('placeholder' => 'Description social','class' => 'form-control','rows'=>3, 'maxlength'=>'125')) !!}
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img
                            class="img-upload-preview img-fluid"
                            src="https://via.placeholder.com/1200x630.png"
                            alt="preview">
                        <div class="input-file input-file-image mt-2">
                            <input type="file" class="form-control form-control-file" id="file_upload" name="og_image" accept="image/*">
                            <label for="file_upload" class="label-input-file btn btn-dark btn-round">
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
                                    <label class="col-sm-3 col-form-label">Slug</label>
                                    <div class="col-sm-9">
                                        {!! Form::text('slug',null, array('placeholder' => '','class' =>'form-control','data-role'=>'tagsinput','required'=>'')) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lbl_formate" class="col-sm-3 col-form-label">Format</label>
                                    <div class="col-sm-9">
                                        {!! Form::select('temp_id', $template,null, array('class' =>'form-control')) !!}
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
                        <div class="card-header p-2" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Keywords
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse bg-white" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Add New Tags</label>
                                    {!! Form::text('tags',null, array('placeholder' => '','class' =>
                                    'form-control','data-role'=>'tagsinput')) !!}
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
<script src="{{URL::asset("admin/js/bootstrap-tagsinput.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#file_upload").change(function() {
            readURL(this);
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.img-upload-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
</script>
@endsection
