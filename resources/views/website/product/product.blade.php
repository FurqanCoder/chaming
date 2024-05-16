@extends('website.layout.app')
@section('web-content')
    <main id="content" class="wrapper layout-page">
        <section class="z-index-2 position-relative pb-2 mb-12">
            <div class="bg-body-secondary mb-3">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1 mb-0">
                            <li class="breadcrumb-item"><a title="Home" href="../index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a title="Shop"
                                    href="shop-layout-v2.html">{{ $data->category }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container pt-6 pb-13 pb-lg-20">
            <div class="row ">
                <div class="col-md-6 pe-lg-13">
                    <div class="row">
                        <div class="col-xl-2 pe-xl-0 order-1 order-xl-0 mt-5 mt-xl-0">
                            <div id="vertical-slider-thumb" class="slick-slider slick-slider-thumb ps-1 ms-n3 me-n4 mx-xl-0"
                                data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#vertical-slider-slides&#34;,&#34;dots&#34;:false,&#34;focusOnSelect&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1260,&#34;settings&#34;:{&#34;vertical&#34;:false}}],&#34;slidesToShow&#34;:4,&#34;vertical&#34;:true}">
                                @foreach (json_decode($data->gallery, true) as $img)
                                    <img src="#" data-src="{{ asset('storage/' . $img) }}"
                                        class="cursor-pointer lazy-image mx-3 mx-xl-0 px-0 mb-xl-7" width="75"
                                        height="100" title alt>
                                @endforeach


                                {{-- <div class="position-relative cursor-pointer mx-3 mx-xl-0 px-0 mb-xl-7">
                                    <img src="#" data-src="../assets/images/shop/product-gallery-08-154x205.jpg"
                                        class="w-100 lazy-image" alt="product gallery" width="75" height="100">
                                    <div
                                        class="card-img-overlay d-inline-flex flex-column align-items-center justify-content-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center rounded-circle product-gallery-video-thumb text-body-emphasis bg-body">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-10 ps-xl-8 pe-xl-0 order-0 order-xl-1">
                            <div id="vertical-slider-slides"
                                class="slick-slider slick-slider-arrow-inside slick-slider-dots-inside slick-slider-dots-light g-0"
                                data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#vertical-slider-thumb&#34;,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1,&#34;vertical&#34;:true}">
                                @foreach (json_decode($data->gallery, true) as $img)
                                    <a href="{{ asset('storage/' . $img) }}" data-gallery="product-gallery"><img
                                            src="#" data-src="{{ asset('storage/' . $img) }}" width="540"
                                            height="720" title class="h-auto lazy-image" alt></a>
                                @endforeach


                                {{-- <div class="position-relative">
                                    <img src="#" data-src="../assets/images/shop/product-gallery-08.jpg"
                                        width="540" height="720" title class="h-auto lazy-image" alt>
                                    <div
                                        class="card-img-overlay d-inline-flex flex-column align-items-center justify-content-center">
                                        <a href="https://www.youtube.com/watch?v=6v2L2UGZJAM"
                                            class="view-video d-flex justify-content-center align-items-center rounded-circle product-gallery-video btn btn-white">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-md-0 pt-10">
                    <p class="d-flex align-items-center mb-6">
                        {{-- <span class="text-decoration-line-through">39.00</span> --}}
                        <span class="fs-18px text-body-emphasis ps-6 fw-bold">RS.{{ $data->price }}</span>
                        <span class="badge text-bg-primary fs-6 fw-semibold ms-7 px-6 py-3">20%</span>
                    </p>
                    <h1 class="mb-4 pb-2 fs-4">{{ $data->title }}</h1>
                    <div class="d-flex align-items-center fs-15px mb-6">
                        <p class="mb-0 fw-semibold text-body-emphasis overall-rating"></p>
                        <div class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars fill">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="border-start ps-6 text-body review-count"></a>
                    </div>
                    <p class="fs-15px">{!! $data->description !!}</p>
                    <form class="product-info-custom">
                        <div class="form-group shop-swatch mb-7 d-flex align-items-center">
                            <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Availability:</span>
                                    @if ($data->stock > 0)
                                        <span class="ps-4">In Stock</span>
                                    @else
                                        <span class="ps-4">Out Off Stock</span>
                                    @endif

                                </li>
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Sku:</span>
                                    <span class="ps-4">SF09281</span>
                                </li>
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Categories:</span>
                                    <span class="ps-4">Makeup, Skincare</span>
                                </li>
                                <li class="d-flex mb-4 pb-2 align-items-center">
                                    <span class="text-body-emphasis fw-semibold fs-14px">Share:</span>
                                    <ul class="list-inline d-flex align-items-center mb-0 col-8 col-lg-10 ps-4">
                                        <li class="list-inline-item me-7">
                                            <a href="#" class="fs-14px text-body product-info-share"
                                                data-bs-toggle="tooltip" data-bs-title="Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item me-7">
                                            <a href="#" class="fs-14px text-body product-info-share"
                                                data-bs-toggle="tooltip" data-bs-title="Facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item me-7">
                                            <a href="#" class="fs-14px text-body product-info-share"
                                                data-bs-toggle="tooltip" data-bs-title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="fs-14px text-body product-info-share"
                                                data-bs-toggle="tooltip" data-bs-title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        {{-- @livewire('product.productcart') --}}
                    </form>
                    <div class="d-flex align-items-center flex-wrap">
                        {{-- <a href="compare.html"
                        class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                        <svg class="icon fs-5">
                            <use xlink:href="#icon-arrows-left-right-light"></use>
                        </svg>
                       
                    </a> --}}
                        <a href="#"
                            class="text-decoration-none fw-semibold fs-6 me-9 pe-2 d-flex align-items-center">
                            <svg class="icon fs-5">
                                <use xlink:href="#icon-star-light"></use>
                            </svg>
                            <span class="ms-4 ps-2">Add to wishlist</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        @if (isset($data->details))
        <div class="border-top w-100"></div>
        <section class="container pt-15 pb-12 pt-lg-17 pb-lg-20">
            <div class="collapse-tabs">
                <ul class="nav nav-tabs border-0 justify-content-center pb-12 d-none d-md-flex" id="productTabs"
                    role="tablist">
                    @if (isset($data->details))
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis active"
                                id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details"
                                type="button" role="tab" aria-controls="product-details"
                                aria-selected="true">Product
                                Details
                            </button>
                        </li>
                    @endif
                    @if (isset($data->how))
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis"
                                id="how-to-use-tab" data-bs-toggle="tab" data-bs-target="#how-to-use" type="button"
                                role="tab" aria-controls="how-to-use" aria-selected="false">How To Use
                            </button>
                        </li>
                    @endif
                    @if (!empty($data->ing_name))
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis"
                                id="ingredients-tab" data-bs-toggle="tab" data-bs-target="#ingredients" type="button"
                                role="tab" aria-controls="ingredients" aria-selected="false">Ingredients
                            </button>
                        </li>
                    @endif

                </ul>
                <div class="tab-content">
                    <div class="tab-inner">
                        @if (isset($data->details))
                            <div class="tab-pane fade active show" id="product-details" role="tabpanel"
                                aria-labelledby="product-details-tab" tabindex="0">
                                <div class="card border-0 bg-transparent">
                                    <div
                                        class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                        <h5 class="mb-0">
                                            <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-product-detail" aria-expanded="false"
                                                aria-controls="collapse-product-detail">
                                                Product Detail
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show border-md-0 border p-md-0 p-6" id="collapse-product-detail">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 pe-lg-10 pe-xl-20">
                                                <img src="#"
                                                    data-src="../assets/images/shop/product-details-img.jpg"
                                                    class="w-100 lazy-image" alt width="470" height="540">
                                            </div>
                                            <div class="pb-3 col-12 col-lg-6 pt-12 pt-lg-0">
                                                <p class="fw-semibold text-body-emphasis mb-2 pb-4">For Normal, Oily,
                                                    Combination Skin
                                                    Types</p>
                                                <p class="mb-2 pb-4">Complexion-perfecting natural foundation enriched with
                                                    antioxidant-packed superfruits, vitamins, and other skin-nourishing
                                                    nutrients. Creamy liquid formula sets with a pristine matte finish
                                                    for soft, velvety smooth skin.</p>
                                                <p class="mb-9">Say hello to flawless, long-lasting foundation that
                                                    comes in 7
                                                    melt-into-your-skin shades. This lightweight, innovative formula
                                                    creates a smooth, natural matte finish that won’t settle into lines.
                                                    It’s the perfect fit for your skin. 1 fl. oz.</p>
                                                <p class="fw-semibold text-body-emphasis mb-2 pb-4">Benefits</p>
                                                <ul class="mb-7 ps-6">
                                                    <li class="mb-1">Buildable medium-to-full coverage</li>
                                                    <li class="mb-1">Weightless, airy feel—no caking!</li>
                                                    <li class="mb-1">Long-wearing</li>
                                                    <li class="mb-1">Evens skin tone</li>
                                                    <li>Available in 07 shades (all exclusive to Makeaholic!)</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-1.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-1.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-2.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-2.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-3.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-3.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-4.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-4.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (isset($data->how))
                            <div class="tab-pane fade" id="how-to-use" role="tabpanel" aria-labelledby="how-to-use-tab"
                                tabindex="0">
                                <div class="card border-0 bg-transparent">
                                    <div
                                        class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                        <h5 class="mb-0">
                                            <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-to-use" aria-expanded="false"
                                                aria-controls="collapse-to-use">How To Use
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse border-md-0 border p-md-0 p-6" id="collapse-to-use">
                                        <div class="pb-3">
                                            <p class="fw-semibold text-body-emphasis mb-2 pb-4">Follow these safety
                                                guidelines
                                                when
                                                using cosmetics products of any type:</p>
                                            <ul class="ps-6 mb-8">
                                                <li class="mb-3">Read the label.
                                                    Follow all directions and heed all warnings.
                                                </li>
                                                <li class="mb-3">Wash your hands
                                                    before you use the product.
                                                </li>
                                                <li class="mb-3">Do not share
                                                    makeup.
                                                </li>
                                                <li class="mb-3">Keep the
                                                    containers clean and tightly closed when not in use,
                                                    and protect them from temperature extremes.
                                                </li>
                                                <li class="mb-3">Throw away
                                                    cosmetics if there are changes in color or smell.
                                                </li>
                                                <li>Use aerosols or sprays cans in well-ventilated areas. Do not use them
                                                    while
                                                    you are smoking or near an open flame. It could start a fire.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($data->ing_name))
                            <div class="tab-pane fade" id="ingredients" role="tabpanel"
                                aria-labelledby="ingredients-tab" tabindex="0">
                                <div
                                    class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                    <h5 class="mb-0">
                                        <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-ingredients" aria-expanded="false"
                                            aria-controls="collapse-ingredients">How To Use
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse border-md-0 border p-md-0 p-6" id="collapse-ingredients">
                                    <div class="pb-3">
                                        <div class="table-responsive mb-5">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">CAS
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            92128-82-0, 9057-02-7
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            INCI
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Nannochloropsis Oculata (micro algae)
                                                            extract, pullulan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Composition
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Nannochloropsis Oculata (micro algae)
                                                            extract, pullulan, water, ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Appearance
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Yellow to amber, viscous liquid
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Solubility
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Soluble in water &amp; ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Storage
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Store refrigerated (4-8oC / 39-46oF)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="mb-0">
                                            Perfect for Equestrian homes or every horse lover. Designer premium
                                            signature aluminum alloy all Arthur Court is compliance with FDA
                                            regulations. Aluminum Serveware can be chilled in the freezer or
                                            refrigerator and warmed in the oven to 350. Wash by hand with mild dish
                                            soap and dry immediately – do not put in the dishwasher. Comes in Gift
                                            Box perfect for Equestrian home or Horse lover in your life.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
        @elseif (isset($data->how))
        <div class="border-top w-100"></div>
        <section class="container pt-15 pb-12 pt-lg-17 pb-lg-20">
            <div class="collapse-tabs">
                <ul class="nav nav-tabs border-0 justify-content-center pb-12 d-none d-md-flex" id="productTabs"
                    role="tablist">
                    @if (isset($data->details))
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis active"
                                id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details"
                                type="button" role="tab" aria-controls="product-details"
                                aria-selected="true">Product
                                Details
                            </button>
                        </li>
                    @endif
                    @if (isset($data->how))
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis"
                                id="how-to-use-tab" data-bs-toggle="tab" data-bs-target="#how-to-use" type="button"
                                role="tab" aria-controls="how-to-use" aria-selected="false">How To Use
                            </button>
                        </li>
                    @endif
                    @if (empty($data->ing_name))
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis"
                                id="ingredients-tab" data-bs-toggle="tab" data-bs-target="#ingredients" type="button"
                                role="tab" aria-controls="ingredients" aria-selected="false">Ingredients
                            </button>
                        </li>
                    @endif

                </ul>
                <div class="tab-content">
                    <div class="tab-inner">
                        @if (isset($data->details))
                            <div class="tab-pane fade active show" id="product-details" role="tabpanel"
                                aria-labelledby="product-details-tab" tabindex="0">
                                <div class="card border-0 bg-transparent">
                                    <div
                                        class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                        <h5 class="mb-0">
                                            <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-product-detail" aria-expanded="false"
                                                aria-controls="collapse-product-detail">
                                                Product Detail
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show border-md-0 border p-md-0 p-6" id="collapse-product-detail">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 pe-lg-10 pe-xl-20">
                                                <img src="#"
                                                    data-src="../assets/images/shop/product-details-img.jpg"
                                                    class="w-100 lazy-image" alt width="470" height="540">
                                            </div>
                                            <div class="pb-3 col-12 col-lg-6 pt-12 pt-lg-0">
                                                <p class="fw-semibold text-body-emphasis mb-2 pb-4">For Normal, Oily,
                                                    Combination Skin
                                                    Types</p>
                                                <p class="mb-2 pb-4">Complexion-perfecting natural foundation enriched with
                                                    antioxidant-packed superfruits, vitamins, and other skin-nourishing
                                                    nutrients. Creamy liquid formula sets with a pristine matte finish
                                                    for soft, velvety smooth skin.</p>
                                                <p class="mb-9">Say hello to flawless, long-lasting foundation that
                                                    comes in 7
                                                    melt-into-your-skin shades. This lightweight, innovative formula
                                                    creates a smooth, natural matte finish that won’t settle into lines.
                                                    It’s the perfect fit for your skin. 1 fl. oz.</p>
                                                <p class="fw-semibold text-body-emphasis mb-2 pb-4">Benefits</p>
                                                <ul class="mb-7 ps-6">
                                                    <li class="mb-1">Buildable medium-to-full coverage</li>
                                                    <li class="mb-1">Weightless, airy feel—no caking!</li>
                                                    <li class="mb-1">Long-wearing</li>
                                                    <li class="mb-1">Evens skin tone</li>
                                                    <li>Available in 07 shades (all exclusive to Makeaholic!)</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-1.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-1.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-2.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-2.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-3.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-3.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-4.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-4.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (isset($data->how))
                            <div class="tab-pane fade" id="how-to-use" role="tabpanel" aria-labelledby="how-to-use-tab"
                                tabindex="0">
                                <div class="card border-0 bg-transparent">
                                    <div
                                        class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                        <h5 class="mb-0">
                                            <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-to-use" aria-expanded="false"
                                                aria-controls="collapse-to-use">How To Use
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse border-md-0 border p-md-0 p-6" id="collapse-to-use">
                                        <div class="pb-3">
                                            <p class="fw-semibold text-body-emphasis mb-2 pb-4">Follow these safety
                                                guidelines
                                                when
                                                using cosmetics products of any type:</p>
                                            <ul class="ps-6 mb-8">
                                                <li class="mb-3">Read the label.
                                                    Follow all directions and heed all warnings.
                                                </li>
                                                <li class="mb-3">Wash your hands
                                                    before you use the product.
                                                </li>
                                                <li class="mb-3">Do not share
                                                    makeup.
                                                </li>
                                                <li class="mb-3">Keep the
                                                    containers clean and tightly closed when not in use,
                                                    and protect them from temperature extremes.
                                                </li>
                                                <li class="mb-3">Throw away
                                                    cosmetics if there are changes in color or smell.
                                                </li>
                                                <li>Use aerosols or sprays cans in well-ventilated areas. Do not use them
                                                    while
                                                    you are smoking or near an open flame. It could start a fire.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (empty($data->ing_name))
                            <div class="tab-pane fade" id="ingredients" role="tabpanel"
                                aria-labelledby="ingredients-tab" tabindex="0">
                                <div
                                    class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                    <h5 class="mb-0">
                                        <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-ingredients" aria-expanded="false"
                                            aria-controls="collapse-ingredients">How To Use
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse border-md-0 border p-md-0 p-6" id="collapse-ingredients">
                                    <div class="pb-3">
                                        <div class="table-responsive mb-5">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">CAS
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            92128-82-0, 9057-02-7
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            INCI
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Nannochloropsis Oculata (micro algae)
                                                            extract, pullulan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Composition
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Nannochloropsis Oculata (micro algae)
                                                            extract, pullulan, water, ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Appearance
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Yellow to amber, viscous liquid
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Solubility
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Soluble in water &amp; ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Storage
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Store refrigerated (4-8oC / 39-46oF)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="mb-0">
                                            Perfect for Equestrian homes or every horse lover. Designer premium
                                            signature aluminum alloy all Arthur Court is compliance with FDA
                                            regulations. Aluminum Serveware can be chilled in the freezer or
                                            refrigerator and warmed in the oven to 350. Wash by hand with mild dish
                                            soap and dry immediately – do not put in the dishwasher. Comes in Gift
                                            Box perfect for Equestrian home or Horse lover in your life.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
        @elseif (!empty($data->ing_name))
        <div class="border-top w-100"></div>
        <section class="container pt-15 pb-12 pt-lg-17 pb-lg-20">
            <div class="collapse-tabs">
                <ul class="nav nav-tabs border-0 justify-content-center pb-12 d-none d-md-flex" id="productTabs"
                    role="tablist">
                    @if (isset($data->details))
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis active"
                                id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details"
                                type="button" role="tab" aria-controls="product-details"
                                aria-selected="true">Product
                                Details
                            </button>
                        </li>
                    @endif
                    @if (isset($data->how))
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis"
                                id="how-to-use-tab" data-bs-toggle="tab" data-bs-target="#how-to-use" type="button"
                                role="tab" aria-controls="how-to-use" aria-selected="false">How To Use
                            </button>
                        </li>
                    @endif
                    @if (empty($data->ing_name))
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-auto fw-semibold py-0 px-8 fs-4 fs-lg-3 border-0 text-body-emphasis"
                                id="ingredients-tab" data-bs-toggle="tab" data-bs-target="#ingredients" type="button"
                                role="tab" aria-controls="ingredients" aria-selected="false">Ingredients
                            </button>
                        </li>
                    @endif

                </ul>
                <div class="tab-content">
                    <div class="tab-inner">
                        @if (isset($data->details))
                            <div class="tab-pane fade active show" id="product-details" role="tabpanel"
                                aria-labelledby="product-details-tab" tabindex="0">
                                <div class="card border-0 bg-transparent">
                                    <div
                                        class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                        <h5 class="mb-0">
                                            <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-product-detail" aria-expanded="false"
                                                aria-controls="collapse-product-detail">
                                                Product Detail
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show border-md-0 border p-md-0 p-6" id="collapse-product-detail">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 pe-lg-10 pe-xl-20">
                                                <img src="#"
                                                    data-src="../assets/images/shop/product-details-img.jpg"
                                                    class="w-100 lazy-image" alt width="470" height="540">
                                            </div>
                                            <div class="pb-3 col-12 col-lg-6 pt-12 pt-lg-0">
                                                <p class="fw-semibold text-body-emphasis mb-2 pb-4">For Normal, Oily,
                                                    Combination Skin
                                                    Types</p>
                                                <p class="mb-2 pb-4">Complexion-perfecting natural foundation enriched with
                                                    antioxidant-packed superfruits, vitamins, and other skin-nourishing
                                                    nutrients. Creamy liquid formula sets with a pristine matte finish
                                                    for soft, velvety smooth skin.</p>
                                                <p class="mb-9">Say hello to flawless, long-lasting foundation that
                                                    comes in 7
                                                    melt-into-your-skin shades. This lightweight, innovative formula
                                                    creates a smooth, natural matte finish that won’t settle into lines.
                                                    It’s the perfect fit for your skin. 1 fl. oz.</p>
                                                <p class="fw-semibold text-body-emphasis mb-2 pb-4">Benefits</p>
                                                <ul class="mb-7 ps-6">
                                                    <li class="mb-1">Buildable medium-to-full coverage</li>
                                                    <li class="mb-1">Weightless, airy feel—no caking!</li>
                                                    <li class="mb-1">Long-wearing</li>
                                                    <li class="mb-1">Evens skin tone</li>
                                                    <li>Available in 07 shades (all exclusive to Makeaholic!)</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-1.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-1.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-2.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-2.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-3.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-3.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                    <div class="col-6 col-md-3 text-center mb-9 pb-2">
                                                        <img class="lazy-image light-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-3-4.png"
                                                            width="66" height="77" alt>
                                                        <img class="lazy-image dark-mode-img" src="#"
                                                            data-src="../assets/images/shop/product-info-white-3-4.png"
                                                            width="66" height="77" alt>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (isset($data->how))
                            <div class="tab-pane fade" id="how-to-use" role="tabpanel" aria-labelledby="how-to-use-tab"
                                tabindex="0">
                                <div class="card border-0 bg-transparent">
                                    <div
                                        class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                        <h5 class="mb-0">
                                            <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-to-use" aria-expanded="false"
                                                aria-controls="collapse-to-use">How To Use
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse border-md-0 border p-md-0 p-6" id="collapse-to-use">
                                        <div class="pb-3">
                                            <p class="fw-semibold text-body-emphasis mb-2 pb-4">Follow these safety
                                                guidelines
                                                when
                                                using cosmetics products of any type:</p>
                                            <ul class="ps-6 mb-8">
                                                <li class="mb-3">Read the label.
                                                    Follow all directions and heed all warnings.
                                                </li>
                                                <li class="mb-3">Wash your hands
                                                    before you use the product.
                                                </li>
                                                <li class="mb-3">Do not share
                                                    makeup.
                                                </li>
                                                <li class="mb-3">Keep the
                                                    containers clean and tightly closed when not in use,
                                                    and protect them from temperature extremes.
                                                </li>
                                                <li class="mb-3">Throw away
                                                    cosmetics if there are changes in color or smell.
                                                </li>
                                                <li>Use aerosols or sprays cans in well-ventilated areas. Do not use them
                                                    while
                                                    you are smoking or near an open flame. It could start a fire.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (empty($data->ing_name))
                            <div class="tab-pane fade" id="ingredients" role="tabpanel"
                                aria-labelledby="ingredients-tab" tabindex="0">
                                <div
                                    class="card-header border-0 bg-transparent px-0 py-4 product-tabs-mobile d-block d-md-none">
                                    <h5 class="mb-0">
                                        <button class="btn lh-2 fs-5 py-3 px-6 shadow-none w-100 border text-primary"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-ingredients" aria-expanded="false"
                                            aria-controls="collapse-ingredients">How To Use
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse border-md-0 border p-md-0 p-6" id="collapse-ingredients">
                                    <div class="pb-3">
                                        <div class="table-responsive mb-5">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">CAS
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            92128-82-0, 9057-02-7
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            INCI
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Nannochloropsis Oculata (micro algae)
                                                            extract, pullulan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Composition
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Nannochloropsis Oculata (micro algae)
                                                            extract, pullulan, water, ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Appearance
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Yellow to amber, viscous liquid
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Solubility
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Soluble in water &amp; ethanol
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 py-5 pe-5 text-body-emphasis">
                                                            Storage
                                                        </td>
                                                        <td class="text-end py-5 ps-5 pe-0">
                                                            Store refrigerated (4-8oC / 39-46oF)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="mb-0">
                                            Perfect for Equestrian homes or every horse lover. Designer premium
                                            signature aluminum alloy all Arthur Court is compliance with FDA
                                            regulations. Aluminum Serveware can be chilled in the freezer or
                                            refrigerator and warmed in the oven to 350. Wash by hand with mild dish
                                            soap and dry immediately – do not put in the dishwasher. Comes in Gift
                                            Box perfect for Equestrian home or Horse lover in your life.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
        @else
           
        @endif
        
        <div class="border-top w-100 h-1px"></div>
        <section class="container pt-15 pb-15 pt-lg-17 pb-lg-20">
            <div class="text-center">
                <h3 class="mb-12">You may also like</h3>
            </div>
            <div class="slick-slider"
                data-slick-options="{&#34;arrows&#34;:true,&#34;centerMode&#34;:true,&#34;centerPadding&#34;:&#34;calc((100% - 1440px) / 2)&#34;,&#34;dots&#34;:true,&#34;infinite&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Conditioner">
                                <img src="#" data-src="../assets/images/products/product-01-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                <ins class="text-decoration-none">$30.00</ins></span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Conditioner</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block"
                                title="Perfecting Facial Oil">
                                <img src="#" data-src="../assets/images/products/product-02-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Perfecting Facial Oil" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$20.00</span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Perfecting
                                    Facial Oil</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 100%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block"
                                title="Enriched Hand &amp; Body Wash">
                                <img src="#" data-src="../assets/images/products/product-03-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Enriched Hand &amp; Body Wash" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-new">New</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Enriched Hand
                                    &amp; Body Wash</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 100%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Shampoo">
                                <img src="#" data-src="../assets/images/products/product-04-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                <ins class="text-decoration-none">$19.00</ins></span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Shampoo</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Hand Wash">
                                <img src="#" data-src="../assets/images/products/product-05-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Enriched Hand Wash" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                <ins class="text-decoration-none">$29.00</ins></span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Enriched Hand
                                    Wash</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Enriched Duo">
                                <img src="#" data-src="../assets/images/products/product-06-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Enriched Duo" width="330" height="440">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Enriched
                                    Duo</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 100%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Spray">
                                <img src="#" data-src="../assets/images/products/product-07-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Shield Spray" width="330" height="440">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Spray</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 100%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="product-details-v1.html" class="hover-zoom-in d-block" title="Shield Spray">
                                <img src="#" data-src="../assets/images/products/product-08-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Shield Spray" width="330" height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-36%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                <ins class="text-decoration-none">$25.00</ins></span>
                            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="product-details-v1.html">Shield
                                    Spray</a>
                            </h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 90%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
            $productId = $data['id'];   
        @endphp
        {{-- @livewire('review.addrew') --}}
        {{-- <x-product.review-component /> --}}
        <x-product.review-component :productId="$productId"/>
    </main>
    @include('website.product.reviewajax')
@endsection
