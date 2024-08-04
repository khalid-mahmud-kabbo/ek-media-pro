<div class="brands-wrapper mt-5">
    <div class="brands">
        <h2 class="text-black mb-4">Most Popular Brands</h2>

        <div class="brand-slider-area swiper brandSwiper d-flex gap-5 p-5">
            <div class="swiper-wrapper">
            @foreach ($brands as $brand)
            <div class="sigle-brad swiper-slide" style="width: 180px;">
                <img style="width: 100%; height: 100%;" src="{{ asset(BrandImage() . $brand->BrandImage) }}" alt="brad image" />
            </div>
        @endforeach
        </div>
    </div>
    </div>
    </div>
