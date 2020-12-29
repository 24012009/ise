@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="pull-right">
                @can('product-create')
                    <a class="btn btn-success btn-sm" href="{{ url('administrator/products/create') }}">
                    <i class="fas fa-plus mr-2"></i> Create New Product</a>
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
                {!! Form::open(array('route' =>['products.filter'],'method'=>'POST','class'=>'form-inline','files' => true)) !!}
                <div class="form-group mb-2">
                    <label for="lbl_userNo">Product Name: </label>
                    {!! Form::text("product_name",old("product_name"),array("class"=>"form-control form-control-flat ml-2")) !!}
                </div>
                <div class="form-group mb-2">
                    <label for="lbl_userNo">Category: </label>
                    {!! Form::select("sl_category",$category,null,array("placeholder"=>"Choose Category","class"=>"form-control form-control-flat ml-2")) !!}
                </div>
                <button type="submit" class="btn btn-primary btn-sm mb-2">Filter</button>
                {{Form::close()}}

                <table class="table table-bordered">
                    <tr>
                        <th>Product Name</th>
                        <th>Years</th>
                        <th>Category</th>
                        <th>Slug name</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($product as $key => $rows)
                    <tr>
                        <td>{{ $rows->product_title}}</td>
                        <td>{{$rows->custom_field}}</td>
                        <td>{{$rows->category->category_name}}</td>
                        <td>
                            <span class='badge badge-danger'>{{$rows->slug}}</span>
                        </td>
                        <td>{{$rows->order_by}}</td>
                        <td>{!! ($rows->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                        <td>
                            @can('product-edit')
                                <a class="btn btn-primary btn-xs" href="{{ route('products.edit',$rows->product_id) }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                            @endcan
                            <a class="btn btn-info btn-xs d-none" href="{{ route('products.comparation',$rows->product_id) }}" data-toggle="tooltip" data-placement="top" title="Compare">
                                <i class="fas fa-grip-vertical"></i>
                            </a>
                            <a class="btn btn-success btn-xs d-none" href="{{ route('products.pricelist',$rows->product_id) }}" data-toggle="tooltip" data-placement="top" title="Price List">
                                <i class="fas fa-hand-holding-usd"></i>
                            </a>
                            <a class="btn btn-dark btn-xs d-none" href="{{ route('version.index',$rows->product_id) }}" data-toggle="tooltip" data-placement="top" title="Version">
                                <i class="fas fa-code-branch"></i>
                            </a>
                            <a class="btn btn-secondary btn-xs" href="{{ route('feature.index',$rows->product_id) }}" data-toggle="tooltip" data-placement="top" title="Feature">
                                <i class="fas fa-tasks"></i>
                            </a>
                            <a class="btn btn-warning btn-xs d-none" href="{{ route('matching.index',$rows->product_id) }}" data-toggle="tooltip" data-placement="top" title="Comparision detail">
                                <i class="fas fa-stream"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $product->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
