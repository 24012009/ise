<div class="container-fluid bg-lochmara">
<div class="swiper-container slider-vertical">
    <div class="swiper-wrapper" style="height: 28px">
    @if(isset($promotions))
        @foreach ($promotions as $item)
        <div class="swiper-slide">
                <h3 id="promo-title" data-id="{{$item->custom_field1}}" class="text-bold text-one_line">{{$item->promotion_title}}</h3>
        </div>
        @endforeach
    @endif
    </div>
</div>
</div>
