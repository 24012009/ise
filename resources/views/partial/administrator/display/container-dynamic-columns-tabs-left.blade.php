<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 pt-5">
                <div class="row">
                    <div class="col-3 p-0">
                        <div class="nav flex-column nav-pills custom-tabs-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($rows->columns as $i=>$row)
                                @if($row->title_col!="")
                                    <a class="nav-link {{($i==0)?'active':''}}" id="v-pills-{{str_replace(" ","-",$row->title_col)}}-tab" data-toggle="pill" href="#v-pills-{{str_replace(" ","-",$row->title_col)}}" role="tab" aria-controls="v-pills-{{str_replace(" ","-",$row->title_col)}}" aria-selected="true">{{$row->title_col}}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-9 p-0">
                        <div class="tab-content custom-tab-content" id="v-pills-tabContent">
                            @foreach($rows->columns as $i=>$row)
                                @if($row->title_col!="")
                                    <div class="tab-pane fade {{($i==0)?'show active':''}} p-5" id="v-pills-{{str_replace(" ","-",$row->title_col)}}" role="tabpanel" aria-labelledby="v-pills-{{str_replace(" ","-",$row->title_col)}}-tab">
                                {!! $row->container !!}
                                @if(!empty($row->labels))
                                    @foreach($row->getCourseStudy($row->labels) as $s=>$rows)
                                        <div class="w-100 border-bottom">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <img src="{{asset($rows->logo)}}" class="img-fluid my-3 mx-auto d-block"/>
                                                    <p>Our Price: <span class="text-danger">${{$rows->custom_field}}</span></p>
                                                </div>
                                                <div class="col-md-8 py-3">
                                                    <h5 class="font-md-6"><a href="javascript:void(0);" data-id="{{$rows->product_id}}" class="btn-learnMore">{{$rows->product_title}}</a></h5>
                                                    <p class="font-weight-normal-light">
                                                        {!! $rows->description !!}
                                                    </p>
                                                    <a href="javascript:void(0);" data-id="{{$rows->product_id}}" class="btn btn-link text-success btn-learnMore">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalLearnMore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
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
        $(".btn-learnMore").on("click",function(){
            $('#ModalLearnMore').modal('show');
            $id=$(this).attr("data-id");
            modalOpen("{{URL::current()}}/course/"+$id);
        });
        function modalOpen($url) {
            $('.modal-body').load($url);
            $('#ModalLearnMore').on('show.bs.modal', function (event) {
                var modal = $(this);
            });
        }
    </script>
@endsection
