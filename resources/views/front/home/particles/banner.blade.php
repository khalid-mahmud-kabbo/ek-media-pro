@if (SpecialOffer()->status)
<div class="product-banner">
            <div class="offer-image">
                <img class="thumbnail-image" width="100%" src="{{ asset(offerImage() . SpecialOffer()->image) }}"
                    alt="offer-image" />
            </div>
</div>
@endif
