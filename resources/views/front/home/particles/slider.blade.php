<style>
    .swiper {
      width: 100%;
    }

    .swiper-slide {
      font-size: 18px;
      background: #fff;
      display: flex;
    }
</style>
<div class="hero-section d-flex gap-4">
    <div class="swiper mySwiper hero-slider">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
            <a href="{{ $slider->en_Title}}" class="swiper-slide hero">

            <img class="slider-images" src="{{ asset(SliderImage() . $slider->Background_Image) }}" alt="">
            </a>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    <x-frontend.image-gallery></x-frontend.image-gallery>
</div>
