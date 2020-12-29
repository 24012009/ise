@extends('layouts.admin')
@section('content')
{!! Form::open(array('route' =>'promotion.store','method'=>'POST','files' => true)) !!}
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a
                                class="btn btn-dark btn-sm"
                                href="{{ url("administrator/promotion") }}">
                                <i class="fas fa-undo-alt mr-2"></i>
                                Back</a>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-save mr-2"></i>
                                Submit</button>
                        </div>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>
                        There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Promotion name</label>
                            {!! Form::text('promotion_name', null, array('placeholder' => 'Name','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Promotion title</label>
                            {!! Form::text('promotion_title', null, array('placeholder' => 'title','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label>Product</label>
                            {!! Form::select('sl_product',$products,null, array('id'=>'slug','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label>Slug<a href="{{url("/administrator/pages")}}" class="btn-link" target="_blank">Go to</a> </label>
                            {!! Form::text("slug",null,array("class"=>"form-control form-control-flat",'data-role'=>'tagsinput','required'=>''))!!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label>Product Type</label>
                            {!! Form::select('sl_type',$types,null, array('id'=>'slug','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label>Promotion Type</label>
                            {!! Form::select('promotion_type',['Package','Users'], 1, array('id'=>'promotion_type','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 manualUsers">
                        <div class="form-group">
                            <label>Min dist <span class="min">(1-4 users)</span></label>
                            {!! Form::text('min_dist',0, array('placeholder' => '%','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 manualUsers">
                        <div class="form-group">
                            <label>Max Dist <span class="max">(5-30 users)</span></label>
                            {!! Form::text('max_dist',0, array('placeholder' => '%','class' =>'form-control')) !!}
                        </div>
                    </div>
                    <div class="manualPackage col-md-12 " style="display: none">
                        <div class="row">
                            @foreach($levels as $rows)
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>{{$rows->product_level}}</label>
                                        {!! Form::text("{$rows->product_level}",0, array('placeholder' => '%','class' =>'form-control')) !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Start date</label>
                            <div class="input-group">
                                {!! Form::text('start_date', null, array('id' => 'start_date','class' =>'form-control')) !!}
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar-check"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Expiration date</label>
                            <div class="input-group">
                                {!! Form::text('expiration_date', null, array('id' => 'expiration_date','class' =>'form-control')) !!}
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar-check"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Condition</label>
                            {!! Form::textarea('condition',null, array('class' =>'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="accordion accordion-secondary" id="accordionExample">
                    <div class="card mb-0 border rounded-0">
                        <div class="card-header p-2" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link"
                                    type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Status & Visibility
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse bg-white show " aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Visibility</label>
                                    <div class="col-sm-9">
                                        <select name="is_active" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lbl_orderby" class="col-sm-3 col-form-label">Order by</label>
                                    <div class="col-sm-9">
                                        {!! Form::text('order_by',0, array('class' =>'form-control','required'=>'')) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0  border-left  border-right border-bottom rounded-0">
                        <div class="card-header p-2" id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Images
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse bg-white" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body pt-0 pb-0">
                                <div class="form-group">
                                    <img class="img-upload-preview img-fluid" src="https://via.placeholder.com/1200x630.png" alt="preview">
                                    <div class="input-file input-file-image mt-2">
                                        <input type="text" class="form-control form-control-file file_thumbnail01" id="file_thumbnail01"
                                               name="file_upload" required>
                                        <label for="file_upload" class="label-input-file btn btn-dark btn-round file_upload">
                                            <span class="btn-label">
                                                <i class="fa fa-file-image"></i>
                                            </span>
                                            Banner
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <img class="img-thumbnail-preview img-fluid" src="https://via.placeholder.com/1200x630.png" alt="preview">
                                    <div class="input-file input-file-image mt-2">
                                        <input type="text" class="form-control form-control-file file_thumbnail02" id="file_thumbnail02"
                                               name="file_thumbnail" required>
                                        <label for="file_thumbnail" class="label-input-file btn btn-dark btn-round file_thumbnail">
                                            <span class="btn-label">
                                                <i class="fa fa-file-image"></i>
                                            </span>
                                            Thumbnail
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
@section("head")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha256-yMjaV542P+q1RnH6XByCPDfUFhmOafWbeLPmqKh11zo=" crossorigin="anonymous" />
@endsection
@section("script")
    <script src="{{URL::asset("ckfinder/ckfinder.js")}}"></script>
    <!-- DateTimePicker -->
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".wrapper").addClass("sidebar_minimize");
            $('#start_date').datetimepicker({
                format: 'MM/DD/YYYY',
            });
            $('#expiration_date').datetimepicker({
                format: 'MM/DD/YYYY',
                useCurrent: false //Important! See issue #1075
            });
            $("#start_date").on("dp.change", function (e) {
                $('#expiration_date').data("DateTimePicker").minDate(e.date);
            });
            $("#expiration_date").on("dp.change", function (e) {
                $('#start_date').data("DateTimePicker").maxDate(e.date);
            });
            $("#promotion_type").on("change",function(){
                $typeID=$("#promotion_type").val();
                $proID=$("#slug").val();
                console.log($typeID,$proID);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"/administrator/promotion/tpromotion",
                    type:"post",
                    data:{proID:$proID,typeID:$typeID},
                    dataType:"json",
                    success:function($data){
                        if($data.is_status==false){
                            $(".manualPackage").hide();
                            $(".manualUsers").show()
                        }else{
                            if($typeID=="0") {
                                $(".manualPackage").show();
                                $(".manualUsers").hide();
                                // $("#package").children().clone().appendTo(".manualPackage").show();
                            }else{
                                $(".manualPackage").hide();
                                $(".manualUsers").show()
                            }
                        }
                    }
                });
            });
            $(".file_upload").on("click",function(){
                selectFileWithCKFinder("file_thumbnail01",'.img-upload-preview');
            });
            $(".file_thumbnail").on("click",function(){
                selectFileWithCKFinder("file_thumbnail02",'.img-thumbnail-preview');
            });
        });

        function selectFileWithCKFinder( elementId,elementClss ) {
            CKFinder.modal( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    console.log(finder);
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( elementId );
                        output.value = file.getUrl();
                        $(elementClss).attr('src', file.getUrl());
                    });

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
    </script>
@endsection
