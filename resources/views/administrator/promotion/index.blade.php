@extends("layouts.admin")
@section("content")
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="pull-right">
                        @can('category-create')
                            <a class="btn btn-success btn-sm" href="{{ url('administrator/promotion/create') }}">
                                <i class="fas fa-plus mr-2"></i> Create New Promotion</a>
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
                            <th>Code</th>
                            <th>Promotion Name</th>
                            <th class="d-none">Promotion title</th>
                            <th width="150px">Product</th>
                            <th>Start date</th>
                            <th>Expiration date</th>
                            <th class="d-none">Min %</th>
                            <th class="d-none">Max %</th>
                            <th width="150px" class="d-none">Order</th>
                            <th width="150px">Status</th>
                            <th width="150px">Action</th>
                        </tr>
                        @foreach ($Promotion as $key => $rows)
                            <tr>
                                <td>{{$rows->code}}</td>
                                <td>{{ $rows->promotion_name }}</td>
                                <td class="d-none">{{$rows->promotion_title}}</td>
                                <td>
                                    <span class='badge badge-danger'>{{($rows->product()->count()>0)?$rows->product()->product_title:"null"}}</span>
                                </td>
                                <td>{{date("d,M y",strtotime($rows->start_date))}}</td>
                                <td>{{date("d,M y",strtotime($rows->expiration_date))}}</td>
                                <td class="d-none">{{$rows->min_discount}}%</td>
                                <td class="d-none">{{$rows->max_discount}}%</td>
                                <td class="d-none">{{$rows->order_by}}</td>
                                <td>{!! ($rows->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                                <td>
                                    @can('category-edit')
                                        <a class="btn btn-primary btn-xs" href="{{ url("administrator/promotion/edit/{$rows->id}") }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $Promotion->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
