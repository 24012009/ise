<div class="container py-3 {{$rows->css_class}}" id="{{str_replace(" ","-",$rows->section_title)}}">
    <div class="row">
        @foreach($rows->columns as $i=>$row)
            @if($row->title_col!="")
                <div class="col-lg-12 col-md-12 pb-3">
                    <h3 class="text-center">{{$row->title_col}}</h3>
                </div>
            @endif
        {!! $row->container !!}
        @endforeach
    </div>
</div>
