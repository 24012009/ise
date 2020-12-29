@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="pull-right">
                    <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}">
                        <i class="fas fa-user-tag"></i>
                        Create New Role</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="col-lg-12 mb-2">
                    <div class="alert alert-success shadow-sm">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            @endif
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}">
                                <i class="fas fa-eye"></i>
                                Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">
                                <i class="fas fa-user-edit"></i>
                                Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' =>
                            ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class='fas fa-user-times'></i>
                                Delete
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $roles->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
