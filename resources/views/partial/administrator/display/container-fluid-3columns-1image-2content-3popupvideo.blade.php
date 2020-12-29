@foreach($rows->columns as $i=>$row)
@if($i==0)
<div class="container-fluid d-flex align-items-center background-size-qb-certified-user" style="min-height:555px; background: url('{{asset("/uploads/images/bg/bg.jpg")}}'); position: relative">
    <div class="w-90 m-auto">
        <div class="row">
            <div class="col-md-4">
                <div id="video-popup" style="display: none">
                    {!! $row->container !!}
                </div>
            </div>
            @else
                <div class="col-md-4">
                    <div class="practice-ul">
                        <h3>{{$row->title_col}}</h3>
                        {!! $row->container !!}
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <a href="javascript:void(0);" class="intro-banner-vdo-play-btn whiteBg">
                        <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-play-fill text-success" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                        </svg>
                        <span class="ripple whiteBg"></span>
                        <span class="ripple whiteBg"></span>
                        <span class="ripple whiteBg"></span>
                    </a>
                    <img src="{{asset($row->thumbnail)}}" class="img-fluid btn-video">
                </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalpopupVideo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>
@section("script")
    <script type="text/javascript">
        $(".intro-banner-vdo-play-btn").on("click",function(){
            $videoIframe=$("#video-popup").html();
            $(".modal-body").html($videoIframe);
            $("#modalpopupVideo").modal("show");
        });
    </script>
@endsection
