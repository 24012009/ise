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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
