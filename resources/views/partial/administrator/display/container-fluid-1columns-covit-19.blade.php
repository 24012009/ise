@foreach($rows->columns as $i=>$row)
    <div class="container position-relative bg-emerald set-height-80 set-z-index-top set-border-radius-82 clear-border-radius-xs-0 cpadding">
        <div class="row">
            <div class="col-md-12 text-center {{$row->col_title}}">
                {!! $row->container !!}
            </div>
        </div>
    </div>
@endforeach