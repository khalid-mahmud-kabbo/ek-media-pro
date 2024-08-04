{{-- <div class="brands-wrapper mt-5">
    <div class="brands">
        <h2 class="text-black mb-4">Most Popular Brands</h2>

        <div class="brand-slider-area swiper brandSwiper d-flex gap-5 p-5">
            <div class="swiper-wrapper">
                @foreach (Category_Des_Icon() as $item)
                    <a class="single-categorie" href="{{ route('category.product', $item->id) }}">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="{{ $item->Category_Icon }}"></i>

                                <h3 class="categorie-name">
                                    {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</h3>
                                </div>
                        </div>
                    </a>
                </div>
            @endforeach
    </div>
    </div>
    </div> --}}






    <section class="brands-wrapper mt-5">
        <div class="card__container">
            <h2 class="text-black mb-4">Categories</h2>
           <div class="card__content swiper CategorySwiper">
              <div class="swiper-wrapper">

                @foreach (Category_Des_Icon() as $item)
                 <article class="card__article swiper-slide">
                     <a href="{{ route('category.product', $item->id) }}" style="color: #000;">
                    <div class="card__data">
                    <div class="card_img_conteiner">
                       <img src="{{ $item->Category_Icon }}" class="slider_img" />

                       {{-- <i class="{{ $item->Category_Icon }}"></i> --}}
                       </div>
                       <h4 class="card__description">
                        {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}
                       </h4>
                    </div>
                    </a>
                 </article>
                 @endforeach
        </div>
     </section>
