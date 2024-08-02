<div class="brands-wrapper mt-5">
    <div class="arrivals p-3">
        <div class="row">


<div class="col-md-2">

</div>

<div class="col-md-10">

<h2>New Arrivals</h2>
            <div class="d-flex gap-5 flex-wrap mt-4">

                @foreach ($products->take(3) as $key => $item)
                @if ($key == 0)

                <a href="{{ route('single.product', $item->en_Product_Slug) }}" class="card" style="width: 38rem; border-radius: .5rem">
                    <div class="card-wrapper d-flex gap-2">
                    <div class="p-image p-3">
                    <img class="card-img-top" style="width: 100%; height: 100%; overflow:hidden; border-radius: 1rem;" src="{{ asset(ProductImage() . $item->Primary_Image) }}" alt="{{ __('product') }}">
                </div>
                    <div class="card-body">
                      <h3 class="card-title text-black">{{ langConverter($item->en_Product_Name, $item->fr_Product_Name) }}</h3>
                      <div class="product-price mt-3">
                        <h4 class="price text-black">{{ currencyConverter($item->Discount_Price) }}</h4>
                    </div>
                    </div>
                </div>
                </a>

                @else

                <a href="{{ route('single.product', $item->en_Product_Slug) }}" class="card" style="width: 38rem; border-radius: .5rem">
                    <div class="card-wrapper d-flex gap-2">
                    <div class="p-image p-3">
                    <img class="card-img-top" style="width: 100%; height: 100%; overflow:hidden; border-radius: 1rem;" src="{{ asset(ProductImage() . $item->Primary_Image) }}" alt="{{ __('product') }}">
                </div>
                    <div class="card-body">
                      <h3 class="card-title text-black">{{ langConverter($item->en_Product_Name, $item->fr_Product_Name) }}</h3>
                      <div class="product-price mt-3">
                        <h4 class="price text-black">{{ currencyConverter($item->Discount_Price) }}</h4>
                    </div>
                    </div>
                </div>
                </a>
                @endif
                @endforeach

            </div>





</div>




        </div>
    </div>
</div>
