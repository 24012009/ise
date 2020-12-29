@extends('layouts.admin')
@section("head")
<link rel="stylesheet" href="{{asset("admin/css/tagsinput.css")}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
@endsection
@section('content')
    <div class="loadPartial">
        @include($section->templateSection->backend_partial,[$id,$section])
    </div>
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
        $(".wrapper").addClass("sidebar_minimize");
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
    function loadpartial(url){
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
        id="{{$id}}";
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
