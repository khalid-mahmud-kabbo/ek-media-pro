<style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      /* text-align: center; */
      font-size: 18px;
      background: #fff;
      display: flex;
      /* justify-content: center;
      align-items: center; */
    }
</style>
<div class="hero-section d-flex gap-3">
    <div class="swiper mySwiper hero-slider">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
            <img class="swiper-slide" src="{{ asset(SliderImage() . $slider->Background_Image) }}" alt="">
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    <x-frontend.image-gallery></x-frontend.image-gallery>
</div>
