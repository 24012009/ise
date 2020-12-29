<div class="container py-5 {{$rows->class_css}}">
    <div class="row">
        @foreach($rows->columns as $i=>$row)
            @if($i==1)
                <div class="col-lg-6 col-md-6 pt-5">
                    <img src="{{asset($row->thumbnail)}}" class="img-fluid" alt="">
                </div>
            @else
                <div class="col-lg-6 col-md-6 pt-5">
                    <h3 class="font-md-11">{{$row->title_col}}</h3>
                    <p class="font-md-6">
                        {!! $row->container !!}
                    </p>
                </div>
            @endif
        @endforeach
    </div>
</div>
