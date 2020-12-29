<div class="container-fluid p-5 {{$rows->class_css}}">
    <div class="row d-flex align-items-center">
        @foreach($rows->columns as $i=>$row)
            @if($i==0)
                <div class="col-lg-5 col-md-5 pb-5 text-right">
                    <img src="{{asset($row->thumbnail)}}" class="img-fluid" alt="">
                </div>
            @else
                <div class="col-lg-7 col-md-7 pb-5">
                    <h3 class="ise-header-line">{{$row->title_col}}</h3>
                    <p class="mt-5">
                        {!! $row->container !!}
                    </p>
                </div>
            @endif
        @endforeach
    </div>
</div>
