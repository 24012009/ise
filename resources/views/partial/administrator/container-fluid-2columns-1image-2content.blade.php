@php
    if(isset($id)){
        //dd($section->columns);
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
                    @foreach($section->columns as $i=>$rows)
                    <div class="col-xs-{{($i==0)?'4':'8'}} col-sm-{{($i==0)?'4':'8'}} col-md-{{($i==0)?'4':'8'}}">
                        <div class="row">
                            <div class="form-group col-md-6 {{($i==0)?' d-none':null}}">
                                <label>Column name</label>
                                {!! Form::text('col_name[]', $rows->col_name, array('class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 {{($i==0)?' d-none':null}}">
                                <label>Column Title</label>
                                {!! Form::text('title_col[]', $rows->title_col, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Label name</label>
                                {!! Form::text('labels_link[]', $rows->labels_link, array('class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6 d-none">
                                <label>Link URL</label>
                                {!! Form::text('link[]', $rows->link, array('placeholder' => 'http://domainname.com','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-12 {{($i==1)?' d-none':null}}">
                                <img class="img-thumb-col2-preview img-fluid"
                                    src="{{($thumbnail!="")?asset($thumbnail):'https://via.placeholder.com/435x275.png'}}"
                                    alt="preview">
                            </div>
                            <div class="form-group col-md-12 {{($i==1)?' d-none':null}}">
                                <label for="basic-url">Thumbnail</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="file_upload[]" value="{{$rows->thumbnail}}" class="form-control" id="thumb-col{$i}" aria-describedby="basic-addon3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="input-group-text btn-thumb-col{$i}" id="btn-thumb-col{$i}">Browse</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 d-none">
                                <label>Label</label>
                                {!! Form::text('label[]', $labels, array('placeholder' => 'labels','class' =>'form-control')) !!}
                            </div>
                            <div class="form-group col-md-12 {{($i==0)?' d-none':null}}">
                                {!! Form::textarea('articlebody[]', $rows->container, ['class' => 'form-control basictools','id'=>"col{$i}", 'rows' =>5]) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
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

        $(".btn-browse").on("click",function(){
            selectFileWithCKFinder("file_upload",'.img-thumb-col1-preview');
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
