@extends("layouts.admin")
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            @can("user-create")
            <div class="col-lg-12 mb-3">
                <div class="pull-right">
                    <a class="btn btn-success btn-sm" href="{{ route('users.create') }}">
                        <i class="fas fa-user-plus"></i>
                        Create New User</a>
                </div>
            </div>
            @endcan
            @if ($message = Session::get('success'))
                <div class="col-lg-12 mb-3">
                    <div class="alert alert-success shadow-sm">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            @endif
            <div class="col-lg-12 mb-3">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>

                        </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">
                                <i class="fas fa-eye"></i>
                                Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">
                                <i class="fas fa-user-edit"></i>
                                Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                            $user->id],'style'=>'display:inline']) !!}
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class='fas fa-user-times'></i>
                                Delete
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $data->render() !!}
            </div>
        </div>
    </div>
    @endsection
