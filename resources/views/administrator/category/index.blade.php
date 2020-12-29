@extends("layouts.admin")
@section("content")
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="pull-right">
                        @can('category-create')
                            <a class="btn btn-success btn-sm" href="{{ url('administrator/promotion/create') }}">
                                <i class="fas fa-plus mr-2"></i> Create New Category</a>
                        @endcan
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success shadow-none">
                            <p>{{ $message }}</p>
                        </div>
                    </div>
                @endif
                <div class="col-lg-12 mb-2">
                    <table class="table table-bordered">
                        <tr>
                            <th>Category Name</th>
                            <th width="150px">Order</th>
                            <th width="150px">Status</th>
                            <th width="150px">Action</th>
                        </tr>
                        @foreach ($categories as $key => $rows)
                            <tr>
                                <td>{{ $rows->category_name }}</td>
                                <td>{{$rows->order_by}}</td>
                                <td>{!! ($rows->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                                <td>
                                    @can('category-edit')
                                        <a class="btn btn-primary btn-xs" href="{{ url("administrator/category/edit/{$rows->category_id}") }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                                    @endcan
                                    @can('category-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $rows->category_id],'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $categories->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
