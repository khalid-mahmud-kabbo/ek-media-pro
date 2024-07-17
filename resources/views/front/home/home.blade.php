<div class="hero-section">
    <div class="hero-slider">
        @foreach ($sliders as $slider)
            <div class="signle-slide"
                style="background-image: url('{{ asset(SliderImage() . $slider->Background_Image) }}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    {{ langConverter($slider->en_Sub_Title, $slider->fr_Sub_Title) }}</h2>
                                <h1 class="slider-title">
                                    {{ langConverter($slider->en_Title, $slider->fr_Title) }}
                                </h1>
                                <p class="slider-text">
                                    {{ langConverter($slider->en_Description, $slider->fr_Description) }}</p>
                                <div class="slider-btn">
                                    <a href="{{ route('all.product') }}"
                                        class="secondary-btn">{{ langConverter($slider->en_Button_Text, $slider->fr_Button_Text) }}
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="{{ asset(SliderImage() . $slider->Thumbnail) }}"
                                    alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>