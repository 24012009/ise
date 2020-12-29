@extends("layouts.admin")
@section("head")
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section("content")
    <div class="row">
        <div class="col-lg-5">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            {!! Form::open(array('route' =>'menu.store','method'=>'POST',"id"=>'frm')) !!}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email2">Choose page</label>
                                    {!! Form::select('sl_page',$page,null, array('class' =>'selectpicker show-menu-arrow form-control','data-style'=>'btn-light btn-border','data-live-search'=>'true')) !!}
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="lbl_menuName">Menu name</label>
                                    <input type="text" name="txt_menuName" class="form-control" id="menuName">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email2">Link target</label>
                                    {!! Form::select('sl_target',$link_target,1, array('class' =>'selectpicker show-menu-arrow form-control','data-style'=>'btn-light btn-border')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email2">Menu position</label>
                                    {!! Form::select('sl_block',$menu_block,1, array('class' =>'selectpicker show-menu-arrow form-control','data-style'=>'btn-light btn-border','data-live-search'=>'true')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lbl_baseURL">Customize URL</label>
                                    <input type="text" name="txt_baseURL" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lbl_icon">Icon</label>
                                    <input type="text" name="txt_icon" class="form-control">
                                    <input type="hidden" name="txt_orderby" value="{{$orderby}}" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                @can("menu-create")
                                    <button type="button" class="btn btn-sm btn-primary btnSaveReload" id="btnSaveReload">
                                        Save & load
                                    </button>
                                @endcan
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-2 h-100">
                            <div class="dd" id="nestable3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="//cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            reload();
            $('select').selectpicker();
            //
            frmmenu("#frm");
            $("#btnSaveReload").on("click", function () {
                $("#frm").submit();
            });
        });
        //refresh data
        function reload(){
            $("#nestable3").load("menu/show");
        }
        function frmmenu(frm){
            $(frm).on('submit', function (e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                url = $(this).attr('action');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    async: false,
                    success: function (rows) {
                        //Notify
                        $(frm)[0].reset();
                        reload();
                        return false;
                    },
                    error: function (result) {
                        setTimeout(function () {
                        }, 500);
                        return false;
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
                return false;
            });
        }
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
        function updateOutput(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{url("/administrator/menu/update")}}",
                method: "PUT",
                data: {
                    list: list.nestable('serialize')
                },
                success:function(result){
                    reload();
                }
            }).fail(function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR, textStatus, errorThrown);
            });
        }
    </script>
@endsection
