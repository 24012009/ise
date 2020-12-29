@php
    if(isset($id)){
        $rows=$section->columns->first();
        $colName=$rows->col_name;
        $colTitle=$rows->title_col;
        $thumbnail=$rows->thumbnail;
        $labels_link=$rows->labels_link;
        $link=$rows->link;
        $labels=$rows->labels;
        $class=$rows->class;
        $container=$rows->container;
        $events=$id;
        $method="PUT";
    }else{
        $colName="";
        $colTitle="";
        $thumbnail="";
        $labels_link="";
        $link="";
        $labels="";
        $class="";
        $container="";
        $events="";
        $method="POST";
    }
@endphp
{!! Form::open(array('url' =>url("administrator/columns/{$section->section_id}/{$events}"),'method'=>'POST','name'=>'frmColumns','id'=>'frmColumns','files' => true)) !!}
@method("{$method}")
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-none">
            <div class="card-body">
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
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Column name</label>
                                {!! Form::text('col_name[]', $colName, array('class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label>Column Title</label>
                                {!! Form::text('title_col[]', $colTitle, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Label name</label>
                                {!! Form::text('labels_link[]', $labels_link, array('class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Link URL</label>
                                {!! Form::text('link[]', $link, array('placeholder' => 'http://domainname.com','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-4 d-none">
                                <img
                                    class="img-thumb-col2-preview img-fluid"
                                    src="{{($thumbnail!="")?asset($thumbnail):'https://via.placeholder.com/235x94.png'}}"
                                    alt="preview">
                            </div>
                            <div class="form-group col-md-8 d-none">
                                <label for="basic-url">Logo <small>Sage</small></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="file_upload[]" value="{{$thumbnail}}" class="form-control" id="thumb-col2" aria-describedby="basic-addon3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="input-group-text btn-thumb-col2" id="btn-thumb-col2">Browse</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 d-none">
                                <label>Label</label>
                                {!! Form::text('label[]', $labels, array('placeholder' => 'labels','class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::textarea('articlebody[]', $container, ['class' => 'form-control basictools','id'=>'col02', 'rows' =>10]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="form-group col-md-6 d-none">
                                <label>Column name</label>
                                {!! Form::text('col_name[]', $colName, array('class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Column Title</label>
                                {!! Form::text('title_col[]', $colTitle, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Label name</label>
                                {!! Form::text('labels_link[]', $labels_link, array('class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Link URL</label>
                                {!! Form::text('link[]', $link, array('placeholder' => 'http://domainname.com','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-12">
                                <img
                                    class="img-thumb-col1-preview img-fluid"
                                    src="{{($thumbnail!="")?asset($thumbnail):'https://via.placeholder.com/435x275.png'}}"
                                    alt="preview">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="basic-url">Image</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="file_upload[]" value="{{$thumbnail}}" class="form-control" id="thumb-col1" aria-describedby="basic-addon3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="input-group-text btn-thumb-col1" id="btn-thumb-col1">Browse</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 d-none">
                                <label>Label</label>
                                {!! Form::text('label[]', $labels, array('placeholder' => 'labels','class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-12 d-none">
                                {!! Form::textarea('articlebody[]', $container, ['class' => 'form-control basictools','id'=>'col01', 'rows' =>5]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="pull-right">
                    <a
                        class="btn btn-dark btn-sm"
                        href="{{ url("administrator/pages") }}">
                        <i class="fas fa-undo-alt mr-2"></i>
                        Back</a>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fas fa-save mr-2"></i>
                        Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="section_id" value="{{$section->section_id}}"/>
{!! Form::close() !!}
<script type="text/javascript">
    $(document).ready(function(){
        CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
        $('textarea.basictools').each( function() {
            var editor = CKEDITOR.replace($(this).attr('id'),{
                filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserWindowWidth: '1000',
                filebrowserWindowHeight: '700',
                height: $(this).attr('rows')*20,
                extraPlugins: 'uploadimage,image,html5video,justify,collapsibleItem',
                toolbar:[
                    { name: 'document', items: [ 'Source', 'Format'] },
                    { name: 'tools', items: [ 'Maximize' ] },
                    { name: 'insert', items: ['Live'] },
                    { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] },
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent','JustifyLeft', 'JustifyCenter', 'JustifyRight'] },
                    { name: 'links', items: ['CreateDiv','Link', 'Unlink','CollapsibleItem'] }
                ]
            });
            CKFinder.setupCKEditor( editor );
        });

        $(".btn-thumb-col1").on("click",function(){
            selectFileWithCKFinder("thumb-col1",'.img-thumb-col1-preview');
        });
        $(".btn-thumb-col2").on("click",function(){
            selectFileWithCKFinder("thumb-col2",'.img-thumb-col2-preview');
        });
        $(".btn-thumb-col3").on("click",function(){
            selectFileWithCKFinder("thumb-col3",'.img-thumb-col3-preview');
        });
        $(".btn-thumb-col4").on("click",function(){
            selectFileWithCKFinder("thumb-col4",'.img-thumb-col4-preview');
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
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var output = document.getElementById( elementId );
                    output.value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>
