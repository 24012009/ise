@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8 mb-2">
                {!! Form::open(array('route' =>['pricelist.filter',$pro_id],'method'=>'POST','class'=>'form-inline','files' => true)) !!}
                    <div class="form-group mb-2">
                        <label for="lbl_userNo">User No: </label>
                        <input type="text" name="userNo" class="form-control form-control-flat ml-2">
                    </div>
                    <div class="form-group mb-2">
                        <label for="lbl_userNo">Level: </label>
                        {{Form::select("sl_level",$levelList,null,array("class"=>"form-control form-control-flat ml-2"))}}
                    </div>
                    <div class="form-group mb-2">
                        <label for="lbl_userNo">Type: </label>
                        {{Form::select("sl_type",$typeList,null,array("class"=>"form-control form-control-flat ml-2"))}}
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mb-2">Filter</button>
                {{Form::close()}}
            </div>
            <div class="col-lg-4 mb-2">
                <div class="pull-right">
                    <a class="btn btn-dark btn-sm" href="{{ url("administrator/products") }}">
                        <i class="fas fa-undo-alt"></i> Back</a>
                @can('compare-create')
                    <a class="btn btn-success btn-sm" href="{{ url("administrator/pricelist/{$pro_id}/create") }}">
                    <i class="fas fa-plus mr-2"></i> Create New Price</a>
                @endcan
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="col-md-12">
                    <div class="alert alert-success no-box-shadow">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            @endif
            <div class="col-lg-12 mb-2">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>User No</th>
                        <th>Product Level</th>
                        <th>Product Type</th>
                        <th>Basic Price</th>
                        <th>CPN Price</th>
                        <th width="200px">Action</th>
                    </tr>
                    @foreach ($priceList as $key => $rows)
                    <tr>
                        <td>{{$rows->user}}</td>
                        <td>{{($rows->levels()!=null)?$rows->levels()->product_level:"None"}}</td>
                        <td>{{$rows->protype()['type_name']}}</td>
                        <td>{{ $rows->base_amount}}</td>
                        <td>{{$rows->cpn_amount}}</td>
                        <td>
                            @can('product-edit')
                                <a class="btn btn-primary btn-xs" href="{{ url("/administrator/pricelist/{$pro_id}/edit/{$rows->id}") }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('product-edit')
                                    {!! Form::open(['method' => 'DELETE','route' => ['pricelist.destroy', $rows->id],'style'=>'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $priceList->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
