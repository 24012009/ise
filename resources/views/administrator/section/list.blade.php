@extends("layouts.admin")
@section("head")
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.css">
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12 mb-2 text-right">
            <a href="{{url("administrator/section/{$page_id}/create")}}" class="btn btn-xs btn-success">
                <i class="fas fa-plus"></i>
                Add new section
            </a>
        </div>
        @if ($message = Session::get('success'))
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif
        <div class="col-md-12">
            <div class="dd" id="nestable3">
                <ol class="dd-list">
{{--                    {{dd($section->)}}--}}
                    @foreach($section as $rows)
                        <li class="dd-item" data-id="{{$rows->section_id}}">
                            <div class="card no-box-shadow rounded-0">
                                <div class="card-header p-2">
                                    <div class="card-head-row">
                                        <h4 class="card-title">
                                            <a class="dd-handle bg-light btn border p-2 mr-2 btn-move">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <span style="margin-top:10px; display: inline-block; font-size: 16px;" data-view="{{$rows->templateSection()->first()->backend_view}}">
                                                {{$rows->section_title}} ({{$rows->templateSection()->first()->template_name}})
                                            </span>
                                        </h4>
                                        <div class="card-tools">
                                            <button class="btn btn-icon btn-link btn-warning btn-xs" data-toggle="collapse" href="#section-{{$rows->section_id}}" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-angle-down"></span></button>
                                            <button type="button" class="btn btn-icon btn-link btn-danger btn-xs btn-section-delete" data-id="{{$rows->section_id}}"><span class="fa fa-times"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="section-{{$rows->section_id}}">
                                    <div class="card-body">
                                        @include($rows->templateSection->backend_view,[$rows])
                                    </div>
                                    <div class="card-footer text-muted text-right bg-dark">
                                        <a href="{{url("/administrator/section/{$rows->section_id}/edit")}}" class="btn btn-sm btn-white btn-border btn-round mr-2">
											<span class="btn-label">
												<i class="fa fa-edit"></i>
											</span>
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
    <style>
        .btn-move{cursor: move !important;}
        .dd {max-width:100%;}
        .dd-handle {
            width:35px;
            height:45px !important;
            margin-right: 20px !important;
            background: #f0f0f0!important;
            border-radius: 0 !important;
            border: 1px solid #ccc !important;
            padding: 10px !important;
            float: left;
        }
        .card, .card-light{
            margin-bottom:-3px;
        }
    </style>
@endsection
@section("script")
    <script src="//cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target), output = list.data('output');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{url("/administrator/section/sortlist")}}",
                    method: "POST",
                    data: {
                        list: list.nestable('serialize')
                    },
                    success: function (data) {
                        msg(data);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    alert("Unable to save new list order: " + errorThrown);
                });
            };
            $('#nestable3').nestable({
                maxDepth: 1
            }).on('change', updateOutput);
            $(".btn-section-delete").on("click",function(){
                elem=$(this).parent().parent().parent().parent().parent();
                id=$(this).attr("data-id");
                url="/administrator/section/"+id+"/delete";
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                               url:url,
                               type:'delete',
                                success:function(){
                                    swal("testing", {
                                        icon: "success",
                                    });
                                    elem.remove();
                                }
                            });
                        }
                    });
            });
        });
        function msg(data){
            $.notify({
                icon: 'flaticon-alarm-1',
                title:data.title,
                message: data.message,
            },{
                type: 'info',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                time: 1000,
            });
        }
    </script>
@endsection
