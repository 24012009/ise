@foreach($rows->columns as $i=>$row)
    <div class="container-fluid" style="background: url({{asset($row->thumbnail)}});background-position: center;
        max-height: 340px;">
        <div class="container container-gmetrix py-5 text-white">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="font-lg-12 font-default font-weight-bold">{{$row->col_title}}</h3>
                    {!! $row->container !!}
                </div>
            </div>
        </div>
    </div>
@endforeach
