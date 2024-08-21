@extends('admin.master', ['menu' => 'products', 'submenu' => 'product'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Product') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Product') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.update') }}">
                                @csrf

                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">English</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Bangla</button>
                                </div>


                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row form-vertical__item bg-style">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="item-top mb-30">
                                                        <h2>{{ langString('en', false) . ':' }}</h2>
                                                    </div>
                                                    <input type="hidden" name="product_type" value="{{ PRODUCT_PHYSICAL }}">
                                                    <div class="input__group mb-25">
                                                        <label for="en-product-name">{{ __('Product Name') }}</label>
                                                        <input type="text" class="form-control" id="en-product-name"
                                                            name="en_product_name" value="{{ $product->en_Product_Name }}"
                                                            placeholder="Name">
                                                        @error('en_product_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                    <div class="input__group mb-25">
                                                        <label for="en_about">{{ __('About') }}</label>
                                                        <textarea name="en_about" id="en_about" class="form-control">{!! $product->en_About !!}</textarea>
                                                        @error('en_about')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="input__group mb-25">
                                                        <label for="en_description">{{ __('Description') }}</label>
                                                        <textarea name="en_description" id="summernote" class="form-control" placeholder="Description">{!! $product->en_description !!}</textarea>
                                                        @error('en_description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>



                                                    <div class="input__group mb-25 d-none">
                                                        <label for="en-product-slug">{{ __('Product Slug') }}</label>
                                                        <input type="text" class="form-control" id="en-product-slug"
                                                            name="en_product_slug" value="{{ $product->en_product_slugen_product_slug }}"
                                                            placeholder="Slug">
                                                        @error('en_product_slug')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>




                                                </div>
                                            </div>
                                        </div>




                                        {{-- additional info --}}

                                        <div class="row form-vertical__item bg-style">
                                            <div class="header-title mb-4"><h5>General setup</h5></div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="exampleInputEmail1">{{ __('Brand Name') }}</label>
                                                <select class="form-control" id="en_brand_name" name="en_brand_name">
                                                    <option value="">{{ __('---SELECT A BRAND---') }}</option>
                                                    @foreach (Brnad() as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $product->Brand_Id ? 'selected' : '' }}>
                                                            {{ $item->en_BrandName }}</option>
                                                    @endforeach
                                                </select>
                                                @error('en_brand_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="exampleInputEmail1">{{ __('Category Name') }}</label>
                                                <select class="form-control" id="en_category_name" name="en_category_name">
                                                    <option value="">{{ __('---SELECT A CATEGORY---') }}</option>
                                                    @foreach (Category() as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $product->Category_Id ? 'selected' : '' }}>
                                                            {{ $item->en_Category_Name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('en_category_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3 d-none">
                                                <label for="exampleInputEmail1">{{ __('Prod Tag') }}</label>
                                                <select class="form-control" id="item_teg" name="item_teg">
                                                    <option value="">{{ __('---Select item---') }}</option>
                                                    @foreach ($item_tags as $it)
                                                        <option value="{{ $it->name }}">{{ $it->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('item_teg')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>





                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="select2Multiple">{{ __('Product Color') }}</label>
                                                <select class="select2-multiple form-control tag_two" name="color[]"
                                                    multiple="multiple">
                                                    @foreach ($colors as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ colorSelected($product->id, $item->id) == 1 ? 'selected' : '' }}>
                                                            {{ $item->Name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('color')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="select2Multiple">{{ __('Product Size') }}</label>
                                                <select class="select2-multiple form-control tag_one" name="size[]"
                                                    multiple="multiple">
                                                    @foreach ($sizes as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ sizeSelected($product->id, $item->id) == 1 ? 'selected' : '' }}>
                                                            {{ $item->Size }}</option>
                                                    @endforeach
                                                </select>
                                                @error('size')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="qty">{{ __('Quantity') }}</label>
                                                <input type="text" class="form-control" id="qty" name="qty"
                                                value="{{ $product->Quantity }}" placeholder="Quantity">
                                                @error('qty')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="price">{{ __('Price') }}</label>
                                                <input type="number" min="0" class="form-control" id="price"
                                                    name="price" value="{{ $product->Price }}" placeholder="Price">
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="discount">{{ __('Discount (in Percentage)') }}</label>
                                                <input type="number" class="form-control" id="discount"
                                                    name="discount" value="{{ old('discount') ?? 0 }}"
                                                    placeholder="Discount">
                                                @error('discount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="discount">{{ __('Discount (in Amount)') }}</label>
                                                <input type="number" class="form-control" id="discountpp"
                                                    name="discountpp" value="{{ old('discount') ?? 0 }}"
                                                    placeholder="Discount">
                                                @error('discount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="discount_price">{{ __('Discount Price') }}</label>
                                                <input type="number" class="form-control" id="discount_price"
                                                    name="discount_price" value="{{ $product->Discount_Price }}" readonly>
                                                @error('discount_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="exampleInputEmail1">{{ __('Product Offer Section') }}</label>
                                                <select class="form-control" id="item_teg" name="item_teg">
                                                    <option value="">{{ __('---Select item---') }}</option>
                                                    @foreach ($offers as $it)
                                                        <option value="{{ $it->id }}">{{ $it->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('item_teg')offers
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>




                                        </div>


                                        <div class="row form-vertical__item bg-style">
                                            <div class="header-title mb-4"><h5>Product Images</h5></div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="primary_image">{{ __('Primary Image') }}</label>
                                                <input type="file" class="form-control putImage1" name="primary_image"
                                                    id="primary_image">
                                                    <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                                    id="target1" />
                                                @error('primary_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="image_two">{{ __('Image 2') }}</label>
                                                <input type="file" class="form-control putImage2" name="image_two"
                                                    id="image_two">
                                                    <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image2) }}"
                                                    id="target2" />
                                                @error('image_two')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="image_three">{{ __('Image 3') }}</label>
                                                <input type="file" class="form-control putImage3" name="image_three"
                                                    id="image_three">
                                                    <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image3) }}"
                                                    id="target3" />
                                                @error('image_three')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="image_four">{{ __('Image 4') }}</label>
                                                <input type="file" class="form-control putImage4" name="image_four"
                                                    id="image_four">
                                                    <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image4) }}"
                                                    id="target4" />
                                                @error('image_four')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <label for="image_five">{{ __('Image 5') }}</label>
                                                <input type="file" class="form-control putImage5" name="image_five"
                                                    id="image_five">
                                                    <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image5) }}"
                                                    id="target5" />
                                                @error('image_five')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row form-vertical__item bg-style">
                                            <div class="header-title mb-4"><h5>Product Showing Section</h5></div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->Status == 1 ? 'checked' : '' }} name="status"
                                                        class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label"
                                                        for="customSwitch1">{{ __('Activate Product') }}</label>
                                                </div>
                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->Featured_Product == 1 ? 'checked' : '' }} name="feature"
                                                        class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label"
                                                        for="customSwitch2">{{ __('Just For You') }}</label>
                                                </div>
                                                @error('feature')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->Best_Selling == 1 ? 'checked' : '' }} name="best_sale"
                                                        class="custom-control-input" id="customSwitch4">

                                                    <label class="custom-control-label"
                                                        for="customSwitch3">{{ __('Best Selling') }}</label>
                                                </div>
                                                @error('best_sale')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <div class="custom-control custom-switch">

                                                    <input type="checkbox" value="1"
                                                        {{ $product->On_Sale == 1 ? 'checked' : '' }} name="on_sale"
                                                        class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label"
                                                        for="customSwitch4">{{ __('Flash Sale') }}</label>
                                                </div>
                                                @error('on_sale')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25 col-md-6 col-lg-4 col-xl-3">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->New_Arrival == 1 ? 'checked' : '' }} name="on_arrival"
                                                        class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label"
                                                        for="customSwitch5">{{ __('New Arrival') }}</label>
                                                </div>
                                                @error('on_arrival')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>





                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                        <div class="row form-vertical__item bg-style">
                                            <div class="col-md-12">
                                                <div>
                                                    <div class="item-top mb-30">
                                                        <h2>{{ langString('bn', false) . ':' }}</h2>
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="fr-product-name">{{ __('Product Name') }}</label>
                                                        <input type="text" class="form-control" id="fr-product-name"
                                                            name="fr_product_name" value="{{ $product->fr_Product_Name }}"
                                                            placeholder="{{ __('Name') }}">
                                                        @error('fr_product_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25 d-none">
                                                        <label for="fr-product-slug">{{ __('Product Slug') }}</label>
                                                        <input type="text" class="form-control" id="fr-product-slug"
                                                            name="fr_product_slug" value="{{ $product->fr_product_slug }}"
                                                            placeholder="{{ __('Slug') }}">
                                                        @error('fr_product_slug')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="fr_about">{{ __('About') }}</label>
                                                        <textarea name="fr_about" id="fr_about" class="form-control" placeholder="About">{{ $product->fr_about }}</textarea>
                                                        @error('fr_about')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="input__group mb-25">
                                                        <label for="fr_description">{{ __('Description') }}</label>
                                                        <textarea name="fr_description" id="summernote4" class="form-control">{{ $product->fr_description }}</textarea>
                                                        @error('fr_description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  </div>
                                <div class="input__button">
                                    <button type="submit" class="btn btn-blue">{{ __('Add Product') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('post_scripts')
    <script src="{{ asset('backend/js/admin/products/physical-edit.js') }}"></script>
    <script>
        "use strict";
        $(document).ready(function() {
            $("#summernote").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

        $(document).ready(function() {
            $("#summernote2").summernote({
                placeholder: 'Shipping Return',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote3").summernote({
                placeholder: 'Additional Information',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote4").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

        $(document).ready(function() {
            $("#summernote5").summernote({
                placeholder: 'Shipping Return',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote6").summernote({
                placeholder: 'Additional Information',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
