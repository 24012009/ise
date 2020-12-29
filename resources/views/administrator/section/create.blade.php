@extends('layouts.admin')
@section('content')
<div class="loadPartial">

</div>
<!-- Modal -->
<div class="modal fade" id="sectionDialog" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Choose section template</h5>
            </div>
            <div class="modal-body" style="max-height: 450px; overflow-y:scroll;">
                {!! Form::open(array("url" => "administrator/section/{$page_id}",'id'=>'frmSection', 'name'=>"frmSection",'method'=>'POST',"files"=>true))!!}
                    @csrf
                    <div id="block-other-body" style="width:100%; padding:0px; position: fixed; right:-100%; z-index: 1060 !important; background-color: #f1f1f1; border-radius: 0 5px 5px 0;">
                        <div class="row">
                            <div class="col-md-12" style="padding:10px 30px;">
                                <a href="#" class="btn-arrow-left" style="font-size:18px;">
                                    <i class="far fa-caret-square-left"></i>
                                </a>
                            </div>
                            <div class="col-md-12 block-body">
                                <div style="padding:20px; background-color: #fbfbfb; border-radius: 0 0 5px 0;">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email2">Choose page</label>
                                            {!! Form::select('sl_page',$pages,$page_id, array('class' =>'selectpicker show-menu-arrow form-control')) !!}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lbl_sectionName">Section name</label>
                                            <input type="text" name="txt_sectionName" class="form-control" id="sectionName" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lbl_style">Style</label>
                                            <input type="text" name="txt_style" class="form-control" id="txt_style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lbl_sectionName">Class css</label>
                                            <input type="text" name="txt_class_css" class="form-control" id="txt_classcss">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="lbl_sectionName">Custom</label>
                                            <input type="text" name="txt_custom" class="form-control" id="txt_custom">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="lbl_sectionName">Custom 1</label>
                                            <input type="text" name="txt_custom1" class="form-control" id="txt_custom1">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="lbl_sectionName">Custom 2</label>
                                            <input type="text" name="txt_custom2" class="form-control" id="txt_custom2">
                                        </div>
                                        <div id="block-background" style="display: none;">
                                            <div class="form-group col-md-12">
                                                <img
                                                    class="img-upload-preview img-fluid"
                                                    src="https://via.placeholder.com/1600x530.png"
                                                    alt="preview">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Background image</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($SectionTemplate as $rows)
                        <div class="col-md-6">
                            <label class="imagecheck mb-4">
                                <input name="imagecheck" type="radio" value="{{$rows->section_temp_id}}" class="imagecheck-input" {{($rows->section_temp_id==1)?"checked":""}} >
                                <figure class="imagecheck-figure">
                                    <img src="{{asset($rows->thumbnail)}}" alt="{{$rows->template_name}}" class="imagecheck-image">
                                </figure>

                            </label>
                        </div>
                        @endforeach
                    </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <a href="{{url()->previous()}}" type="button" class="btn btn-default btn-sm">Back</a>
                <button type="button" class="btn btn-primary btn-sm btn-save">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("head")
<link rel="stylesheet" href="{{asset("admin/css/tagsinput.css")}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
@endsection
@section("script")
<script src="{{URL::asset("admin/js/bootstrap-tagsinput.js")}}"></script>

<script src="{{URL::asset("admin/ckeditor/ckeditor.js")}}"></script>
<script src="{{URL::asset("ckfinder/ckfinder.js")}}"></script>
<script type="text/javascript">
    (function($) {
        $.fn.clickToggle = function(func1, func2) {
            var funcs = [func1, func2];
            this.data('toggleclicked', 0);
            this.click(function() {
                var data = $(this).data();
                var tc = data.toggleclicked;
                $.proxy(funcs[tc], this)();
                data.toggleclicked = (tc + 1) % 2;
            });
            return this;
        };
    }(jQuery));

    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
        if(is_status()==false) {
            $("#sectionDialog").modal("show");
        }else{
            $(".wrapper").addClass("sidebar_minimize");
            loadpartial("{{url("administrator/section/{$page_id}/loadpartial")}}");
        }
        $("#file_upload").change(function() {
            readURL(this);
        });
        $(".btn-arrow-left").clickToggle(function(){
            $(".block-body").hide();
            $("#block-other-body").animate({
                width: '-=90%',
                right:'+=90%'
            }, 100);
        },function(){
            $(".block-body").show();
            $("#block-other-body").animate({
                width: '+=90%',
                right:'-=90%'
            }, 100);
        });
        frmsubmitSection("#frmSection");
        $(".btn-save").on("click",function(){
            $("#frmSection").submit();
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.img-upload-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    function frmsubmitSection(frm){
        $(frm).validate({
            submitHandler: function(form) {
                formData = new FormData($(frm)[0]);
                url = $(frm).attr('action');
                $.ajax({
                    url: url,
                    type: 'post',
                    data: formData,
                    async: false,
                    success: function (rows) {
                        $(frm)[0].reset();
                        msg(rows);
                        $("#sectionDialog").modal("hide");
                        loadpartial(rows.url);
                        window.location.reload();
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
            }
        });
    }
    //
    function loadpartial(url)
    {
        $(".loadPartial").load(url);
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
    is_status = function(){
        id="{{$page_id}}";
        var isStatus;
        $.ajax({
            url:"/administrator/section/"+id+"/checksection",
            async: false,
            type:"get",
            dataType: "json",
            success:function(response){
                isStatus = response.status;
            }
        });
        return isStatus;
    };
</script>
@endsection
