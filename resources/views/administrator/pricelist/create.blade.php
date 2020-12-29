@extends('layouts.admin')
@section('content')
{!! Form::open(array('url' =>"administrator/pricelist/{$pro_id}/store",'method'=>'POST','files' => true)) !!}
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
                        <div class="alert alert-success no-box-shadow">
                            <p>{{ $message }}</p>
                        </div>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger no-box-shadow">
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
                            {!! Form::select('sl_productLevel',$productList,null, array('class' =>'form-control', 'required'=>'required')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Product Type</label>
                            {!! Form::select('sl_producttype',$typeList,null, array('class' =>'form-control', 'required'=>'required')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>User No</label>
                            {!! Form::text('user_no', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>Base Price</label>
                            {!! Form::text('base_amount', null, array('class' => 'form-control', 'required'=>'required')) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label>CPN Price</label>
                            {!! Form::text('cpn_amount', null, array('class' => 'form-control')) !!}
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
