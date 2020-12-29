@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="pull-right">
                @can('compare-create')
                    <a class="btn btn-success btn-sm" href="{{ url('administrator/compare/create') }}">
                    <i class="fas fa-plus mr-2"></i> Create New Specs</a>
                @endcan
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            @endif
            <div class="col-lg-12 mb-2">
                {!! Form::open(array('route' =>['compare.filter'],'method'=>'POST','class'=>'form-inline','files' => true)) !!}
                <div class="form-group mb-2">
                    <label for="lbl_userNo">Compare Specs: </label>
                    {!! Form::text("compare_name",old("compare_name"),array("class"=>"form-control form-control-flat ml-2")) !!}
                </div>
                <button type="submit" class="btn btn-primary btn-sm mb-2">Filter</button>
                {{Form::close()}}
                <table class="table table-bordered">
                    <tr>
                        <th>Compare Specs List</th>
                        <th>Sub Specs</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th width="200px">Action</th>
                    </tr>
                    @foreach ($compare as $key => $rows)
                    <tr>
                        <td>{{ $rows->title_specs_compare}}</td>
                        <td>{{$rows->sub_specs_compare}}</td>
                        <td>{{$rows->is_order}}</td>
                        <td>{!! ($rows->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                        <td>
                            @can('product-edit')
                                <a class="btn btn-primary btn-xs" href="{{ route('compare.edit',$rows->compare_id) }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $compare->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
