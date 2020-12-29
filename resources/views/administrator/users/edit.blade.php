@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">
                        <i class="fas fa-undo-alt"></i>
                        Back</a>
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
        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update',$user->id]]) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Name:</label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' =>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Email:</label>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' =>'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Password:</label>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Confirm Password:</label>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Role:</label>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' =>
                    'form-control','multiple')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i>
                    Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
