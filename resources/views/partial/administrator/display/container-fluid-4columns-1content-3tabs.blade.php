<div class="container-fluid ise-bg-blue p-0">
    <div class="container py-5">
        @foreach($rows->columns as $i=>$row)
            @if($i==0)
            <div class="row">
                <div class="col-md-12 py-5">
                    <h2 class="text-center">{{$row->title_col}}</h2>
                    <p class="text-center">
                        {!! $row->container !!}
                    </p>
                </div>
            </div>
            @endif
        @endforeach
        <div class="w-100 position-relative set-index-3">
            <ul class="nav nav-tabs" id="ise-custom-tabs" role="tablist">
                @foreach($rows->columns as $s=>$row)
                    @if($s!=0)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{($s==1)?'active':''}}" id="{{str_replace(" ","",$row->title_col)}}-tab" data-toggle="tab" href="#{{str_replace(" ","",$row->title_col)}}" role="tab" aria-controls="{{str_replace(" ","",$row->title_col)}}" aria-selected="true">
                                <img src="{{asset($row->thumbnail)}}"/>
                                <span style="width:100%; display: block">{{$row->title_col}}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="tab-content tab-content-costomize" id="myTabContent">
                @foreach($rows->columns as $s=>$row)
                    @if($s!=0)
                        <div class="tab-pane fade {{($s==1)?'show active':''}}" id="{{str_replace(" ","",$row->title_col)}}" role="tabpanel" aria-labelledby="{{str_replace(" ","",$row->title_col)}}-tab">
                            <div class="card-deck card-customize">
                                @foreach($row->getPages($row->labels) as $k=>$rows)
                                    <div class="card">
                                        <img src="{{asset($rows->og_image)}}" class="card-img-top"
                                             alt="Core classroom training">
                                        <div class="card-body">
                                        <span class="card-no">
                                            <b>{{$k+1}}</b>
                                            <span class="cicle"></span>
                                        </span>
                                            <h5 class="card-title">{{$rows->og_title}}</h5>
                                            <p class="card-text">
                                                {!! $rows->og_description !!}
                                            </p>
                                            <p class="card-text">
                                                <a href="{{asset($rows->slug)}}" class="text-muted">
                                                    Learn More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0087dc" fill-opacity="0.25"
                  d="M0,128L40,133.3C80,139,160,149,240,138.7C320,128,400,96,480,96C560,96,640,128,720,149.3C800,171,880,181,960,186.7C1040,192,1120,192,1200,176C1280,160,1360,128,1400,112L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
</div>
@section("script")
    <script>
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endsection
