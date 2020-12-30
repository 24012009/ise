<!-- Swiper -->
<div class="swiper-container header-top {{isset($promotions) && $promotions->isNotEmpty() ? 'header-top-promo' : ''}}" id="main-slide">
    <div class="swiper-wrapper">
        {{$slot}}
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>