                  <div class="single-galary">
                  @foreach ($image_gallery->take(2) as $key => $item)
                        @if ($key == 0)
                            <div class="single-gallery mb-3">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                            </div>
                        @else
                            <div class="single-gallery">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                            </div>
                        @endif
                    @endforeach
                </div>