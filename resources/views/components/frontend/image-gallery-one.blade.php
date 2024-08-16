                  <div class="single-galary">
                  @foreach ($image_gallery->take(2) as $key => $item)
                        @if ($key == 0)
                            <div class="single-gallery mb-3">
                                <a href="{{ $item->product_link}}">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                                </a>
                            </div>
                        @else
                            <div class="single-gallery">
                                <a href="{{ $item->product_link}}">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
