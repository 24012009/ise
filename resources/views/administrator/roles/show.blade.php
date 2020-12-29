@extends('layouts.admin') 
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">
                        <i class="fas fa-undo mr-2"></i> 
                        Back</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Name:</label>
                    {{ $role->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label class="form-label">Permissions</label>
                    <div class="selectgroup selectgroup-pills">
                        @if(!empty($rolePermissions)) @foreach($rolePermissions as $v)
                        <label class="selectgroup-item">
                            <input type="checkbox" name="value" value="{{$v->id}}" class="selectgroup-input">
                            <span class="selectgroup-button">{{ str_replace("-"," ",ucfirst($v->name)) }}</span>
                        </label>
                        @endforeach @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection