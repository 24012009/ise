<div class="container-fluid bg-white">
    <div class="container container-gmetrix py-5">
        <div class="row">
            @foreach($rows->columns as $i=>$row)
                @if($i==0)
                    <div class="col-md-6">
                        <h1 class="font-lg-12 font-default font-weight-bold">{{$row->title_col}}</h1>
                        <img src="{{asset($row->thumbnail)}}" class="img-fluid"/>
                    </div>
                    <div id="popupvideo" style="display: none;">
                        {!! $row->container !!}
                    </div>
                @else
                    <div class="col-md-6">
                        <a href="#" class="intro-banner-vdo-play-btn whiteBg" target="_blank">
                            <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-play-fill text-success" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                            </svg>
                            <span class="ripple whiteBg"></span>
                            <span class="ripple whiteBg"></span>
                            <span class="ripple whiteBg"></span>
                        </a>
                        <img src="{{asset($row->thumbnail)}}" class="img-fluid"/>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
