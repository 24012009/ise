@foreach($rows->columns as $i=>$row)
    @if($i==0)
<div class="container-fluid background-size-qb-certified-user"
     style="min-height:555px; background: url('{{asset("/uploads/images/section/img-02.png")}}'); position: relative">
    @else
    <a href="javascript:void(0);" class="intro-banner-vdo-play-btn pinkBg btn-popupvideo">
        <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-play-fill text-white" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
        </svg>
        <span class="ripple pinkBg"></span>
        <span class="ripple pinkBg"></span>
        <span class="ripple pinkBg"></span>
    </a>
    <div class="ise-block-play-sm py-3">
        <h3>{{$row->title_col}}</h3>
    </div>
    <div class="d-none" id="blockvideo">
        {!! $row->container !!}
    </div>
    @endif
@endforeach
        <div class="modal" id="popupVideo" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header p-2 border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-popupVideo">
                        <p>Modal body text goes here.</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@section("script")
    <script type="text/javascript">
        $(".btn-popupvideo").on("click",function(){
            $htmlVideo=$("#blockvideo").html();
            $("#modal-popupVideo").empty().html($htmlVideo);
           $("#popupVideo").modal('show');
        });
    </script>
@endsection
