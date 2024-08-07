@if (SpecialOffer()->status)
<div class="product-banner brands">
            <div class="offer-image">
                <a href="{{SpecialOffer()->url}}">
                <img class="thumbnail-image" width="100%" src="{{ asset(offerImage() . SpecialOffer()->image) }}"
                    alt="offer-image" />
                    </a>
            </div>
</div>
@endif
