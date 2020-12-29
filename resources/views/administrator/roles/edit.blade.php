@extends('layouts.admin')
@section('content')
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="pull-right">
                        <a class="btn btn-dark btn-sm" href="{{ route('roles.index') }}">
                            <i class="fas fa-undo mr-2"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-save mr-2"></i>
                            Submit
                        </button>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-12">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permission:</strong>
                            <br/>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                @php
                                    $i=0;
                                @endphp

                                @foreach($permission as $value)
                                    <div class="form-check">
                                        <label class="form-check-label mb-0">
                                            {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'form-check-input name')) }}
                                            <span
                                                class="form-check-sign">{{ str_replace("-",' ',ucfirst($value->name)) }}</span>
                                        </label>
                                    </div>
                                    @if($i==7)
                            </div>
                            <div class="col-md-3">
                                @php($i=0)
                                @else
                                    @php($i++)
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
