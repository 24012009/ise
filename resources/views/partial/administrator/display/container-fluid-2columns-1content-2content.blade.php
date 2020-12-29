<div class="container-fluid {{$rows->class_css}}">
    <div class="row">
        @foreach($rows->columns as $i=>$row)
        <div class="{{$row->class}}">
            <img src="{{asset($row->thumbnail)}}" class="img-pluid my-3"/>
            <h3 class="my-2">{{$row->title_col}}</h3>
            {!! $row->container !!}
        </div>
        @endforeach
    </div>
</div>
