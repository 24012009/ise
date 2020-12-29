<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="media">
                <img src="{{asset($singleProduct->logo)}}" class="mr-3" alt="{{$singleProduct->product_title}}">
                <div class="media-body">
                    <h5 class="mt-0">{{$singleProduct->product_title}}</h5>
                    <h5>Our Price: <span class="text-danger">${{number_format($singleProduct->custom_field,2,".",",")}}</span></h5>
                    {!! $singleProduct->description !!}
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @foreach($singleProduct->features() as $i=>$rows)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{$i==0?'active':''}}" id="pills-{{str_replace(" ","-",$rows->feature_title)}}-tab" data-toggle="pill" href="#pills-{{str_replace(" ","-",$rows->feature_title)}}" role="tab" aria-controls="pills-{{str_replace(" ","-",$rows->feature_title)}}" aria-selected="true">{{$rows->feature_title}}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($singleProduct->features() as $i=>$rows)
                <div class="tab-pane fade {{$i==0?'show active':''}}" id="pills-{{str_replace(" ","-",$rows->feature_title)}}" role="tabpanel" aria-labelledby="pills-{{str_replace(" ","-",$rows->feature_title)}}-tab">
                    {!! $rows->details !!}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
