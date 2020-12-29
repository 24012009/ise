@extends('layouts.admin')
@section('content')
<div class="card shadow-none">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="pull-right">
                @can('pages-create')
                    <a class="btn btn-success btn-sm" href="{{ url('administrator/pages/create') }}">
                    <i class="fas fa-plus mr-2"></i>Create New Page</a>
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
                {!! Form::open(array('route' =>['pages.filter'],'method'=>'POST','class'=>'form-inline','files' => true)) !!}
                    <div class="form-group mb-2">
                        <label for="lbl_userNo">Page Name: </label>
                        {!! Form::text("pageName",old("pageName"),array("class"=>"form-control form-control-flat ml-2")) !!}
                    </div>
                    <div class="form-group mb-2">
                        <label for="lbl_userNo">Template: </label>
                        {!! Form::select("sl_template",$template,null,array("placeholder"=>"Choose template","class"=>"form-control form-control-flat ml-2")) !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mb-2">Filter</button>
                {{Form::close()}}
                <table class="table table-bordered">
                    <tr>
                        <th>Page Name</th>
                        <th>Sub title</th>
                        <th>Slug</th>
                        <th>Sub Link</th>
                        <th>Template</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th width="200px">Action</th>
                    </tr>
                    @if(isset($data))
                        @foreach ($data as $key => $page)
                        <tr>
                            <td>{{$page->page_name }}</td>
                            <td>{{ substr($page->sub_title,0,50) }}</td>
                            <td>{{ $page->slug  }}</td>
                            <td>
                                @if($page->sub()->count()>0)
                                    @foreach($page->sub() as $rows)
                                        <a href="{{url("/administrator/subpages/edit/{$rows->sub_page_id}")}}"><span class="badge badge-info">{{$rows->title_subpage}}</span></a>
                                    @endforeach
                                @else
                                    None
                                @endif
                            </td>
                            <td>{{$page->template()->first()->template_name}}</td>
                            <td>{{$page->order_by}}</td>
                            <td>{!! ($page->is_active==1)?"<span class='badge badge-primary'>Publish</span>":"<span class='badge badge-danger'>Private</span>"!!}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{{ url("administrator/pages/{$page->page_id}/section/list") }}"><i class="fas fa-eye"></i></a>
                                @can('pages-edit')
                                    <a class="btn btn-primary btn-xs" href="{{ route('pages.edit',$page->page_id) }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-edit"></i></a>
                                @endcan
                                @can('page-slide-list')
                                    <a class="btn btn-default btn-xs" href="{{ url('administrator/pages/'.$page->page_id.'/slide') }}" data-toggle="tooltip" data-placement="top" title="Slide"><i class="fas fa-images"></i></a>
                                @endcan
                                @can('pages-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['pages.destroy', $page->page_id],'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </table>
                @if(isset($data))
                {!! $data->links() !!}
                @endif
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".button-delete").on("click", function () {
            id = $(this).attr("data-id");
            swal("Warring!","Are you sure you want to destroy this menu?",'warning', {
                buttons: {
                    cancel: "No",
                    catch: {
                        text: "Yes",
                        value: "yes",
                    }
                },
            }).then((value) => {
                switch (value) {
                    case "No":
                        break;
                    case "yes":
                        url = "menu/destroy/"+id;
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            type: 'DELETE',
                            dataType: "JSON",
                            success: function (result){
                                reload();
                                msg(result);
                            }
                        });
                        break;
                }
            });
        });
</script>
@endsection
