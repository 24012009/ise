@extends("layouts.admin")
@section("content")
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="pull-right">
                        <a class="btn btn-dark btn-sm" href="{{ url("administrator/products") }}">
                            <i class="fas fa-undo-alt mr-2"></i> Back</a>
                        @can('category-create')
                            <a class="btn btn-success btn-sm" href="{{ route("feature.create",$product->product_id) }}">
                                <i class="fas fa-plus mr-2"></i> Create New Feature</a>
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
				{!! Form::open(array('route' =>["feature.filter",$product->product_id],'method'=>'POST','class'=>'form-inline','files' => true)) !!}
                <div class="form-group mb-2">
                    <label for="lbl_userNo">Feature: </label>
                    {!! Form::text("compare_name",old("compare_name"),array("class"=>"form-control form-control-flat ml-2")) !!}
                </div>
                <button type="submit" class="btn btn-primary btn-sm mb-2">Filter</button>
                {{Form::close()}}
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th>Feature title</th>
							<th width="150px">Order by</th>
                            <th width="150px">Status</th>
                            <th width="150px">Action</th>
                        </tr>
                        </thead>
                        @foreach ($feature as $key => $rows)
                            <tr>
                                <td>{{ $rows->feature_title }}</td>
								<td>{{ $rows->is_order }}</td>
                                <td>{!! ($rows->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                                
								<td>
                                    @can('category-edit')
                                        <a class="btn btn-primary btn-xs" href="{{url("/administrator/products/feature/{$product->product_id}/{$rows->feature_id}/edit")}}" data-toggle="tooltip" data-placement="top" title="edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    @endcan
                                    @can('category-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['feature.destroy',$product->product_id, $rows->feature_id],'style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $feature->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
