<style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      font-size: 18px;
      background: #fff;
      display: flex;
    }
</style>
<div class="hero-section d-flex gap-3">
    <div class="swiper mySwiper hero-slider">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
            <div class="swiper-slide">
            <img class="slider-images" src="{{ asset(SliderImage() . $slider->Background_Image) }}" alt="">
        </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    <x-frontend.image-gallery></x-frontend.image-gallery>
</div>
