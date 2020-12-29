@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="pull-right">
                @can('page-slide-create')
                    <a class="btn btn-dark btn-sm" href="{{ url('administrator/pages') }}">
                        <i class="fas fa-undo-alt mr-2"></i> Back</a>
                    <a class="btn btn-success btn-sm" href="{{ url("administrator/pages/{$page_id}/slide/create") }}">
                    <i class="fas fa-plus mr-2"></i> Create New Slide</a>
                    @endcan
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="col-lg-12">
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            @endif
            <div class="col-lg-12 mb-2">
                <table class="table table-bordered">
                    <tr>
                        <th style="width:350px;">Slide Name</th>
                        <th>Image</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th width="120px">Action</th>
                    </tr>
                    @foreach ($slidepages as $key => $slide)
                    <tr>
                        <td>{{ $slide->slider_name }}</td>
                        <td>
                            <div class="avatar avatar-sm">
                                <img src="{{ url("{$slide->thumbnail}") }}" class="avatar-img rounded-circle"/>
                            </div>
                        </td>
                        <td>{{ $slide->is_order }}</td>
                        <td>{!! ($slide->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                        <td>
                            @can('page-slide-edit')
                                <a class="btn btn-primary btn-xs" href="{{url("administrator/pages/{$slide->page_id}/slide/{$slide->slide_id}/edit")}}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('page-slide-delete')
                                {!! Form::open(['method' => 'DELETE','url' =>"administrator/pages/{$slide->page_id}/slide/{$slide->slide_id}",'style'=>'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $slidepages->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection
