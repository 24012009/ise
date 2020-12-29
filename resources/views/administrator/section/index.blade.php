@extends("layouts.admin")
@section("head")
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section("content")
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="pull-right">
                        @can('pages-create')
                            <a class="btn btn-success btn-sm" href="{{ url('administrator/section/create') }}">
                                <i class="fas fa-plus mr-2"></i> Create New Section</a>
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
                    <table class="table table-bordered">
                        <tr>
                            <th>Section title</th>
                            <th>Page name</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th width="200px">Action</th>
                        </tr>
                        @foreach ($sections as $key => $section)
                            <tr>
                                <td>{{ $section->section_name }}</td>
                                <td></td>
                                <td></td>
                                <td>{{$section->order_by}}</td>
                                <td>{!! ($section->is_active=1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('pages.show',$section->section_id) }}"><i class="fas fa-eye"></i></a>
                                    @can('pages-edit')
                                        <a class="btn btn-primary btn-sm" href="{{ route('pages.edit',$section->section_id) }}"><i class="fas fa-edit"></i></a>
                                    @endcan
                                    @can('pages-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['pages.destroy', $section->section_id],'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $sections->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
