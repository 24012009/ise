@extends('layouts.admin')
@section('content')
    {!! Form::open(array('url' =>"administrator/category/edit/{$id}/update",'method'=>'PUT','files' => true)) !!}
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
                                <label>Category name</label>
                                {!! Form::text('category_name',$categories->category_name, array('placeholder' => 'Name','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Category Icon</label>
                                {!! Form::text('icon_category',$categories->icon_category, array('placeholder' => 'icon','class' =>'form-control')) !!}
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
                                                <option value="1" @if($categories->is_active==1) selected @endif>Active</option>
                                                <option value="0" @if($categories->is_active==0) selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lbl_orderby" class="col-sm-3 col-form-label">Order by</label>
                                        <div class="col-sm-9">
                                            {!! Form::text('order_by',$categories->order_by, array('class' =>'form-control','required'=>'')) !!}
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
@endsection @section("script")
    <script src="{{URL::asset("admin/js/tagsinput.js")}}"></script>
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
