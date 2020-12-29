@extends("layouts.admin")
@section("content")
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
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
                                <td>{{ $section->section_title }}</td>
                                <td>{{$section->pageHasone->page_name}}</td>
                                <td>{{$section->order_by}}</td>
                                <td>{!! ($section->is_active=1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                                <td>
                                    @can('pages-edit')
                                        <a class="btn btn-primary btn-xs" href="{{ url("administrator/section/{$section->section_id}/create") }}" data-toggle="tooltip" data-placement="top" title="Go to Section"><i class="fas fa-edit"></i></a>
                                    @endcan
                                    @can('pages-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['pages.destroy', $section->section_id],'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="delete">
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
