@extends('website.layout.app')
@section('web-content')
<main id="content" class="wrapper layout-page">
    <section>
        <div class="slick-slider hero hero-header-07 slick-slider-dots-inside"
            data-slick-options="{&#34;arrows&#34;:false,&#34;autoplay&#34;:true,&#34;cssEase&#34;:&#34;ease-in-out&#34;,&#34;dots&#34;:false,&#34;fade&#34;:true,&#34;infinite&#34;:true,&#34;slidesToShow&#34;:1,&#34;speed&#34;:600}">
            <div class="vh-100 d-flex align-items-center">
                <div class="z-index-2 container container-xxl py-15">
                    <div data-animate="fadeInDown" class="card border-0 ps-lg-1 mx-md-0 mx-auto hero-card">
                        <div class="card-body p-11">
                            <h1 class="mb-7 hero-title-5 pe-lg-12">
                                Love Your Skin Naturally
                            </h1>
                            <p class="hero-desc fs-18px text-body-calculate mb-9">
                                Made using clean, non-toxic ingredients, our products are
                                designed for everyone.
                            </p>
                            <a href="#"
                                class="btn btn-dark rounded btn-hover-bg-primary btn-hover-border-primary">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100 light-mode-img"
                    data-bg-src="assets/images/hero-slider/hero-slider-15.jpg"></div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="assets/images/hero-slider/hero-slider-white-15.jpg"></div>
            </div>
            <div class="vh-100 d-flex align-items-center">
                <div class="z-index-2 container container-xxl py-15">
                    <div data-animate="fadeInDown" class="card border-0 ps-lg-1 mx-md-0 mx-auto hero-card">
                        <div class="card-body p-11">
                            <h1 class="mb-7 hero-title-5 pe-lg-12">
                                Our Autumn Skincare
                            </h1>
                            <p class="hero-desc fs-18px text-body-calculate mb-9">
                                Made using clean, non-toxic ingredients, our products are
                                designed for everyone.
                            </p>
                            <a href="#"
                                class="btn btn-dark rounded btn-hover-bg-primary btn-hover-border-primary">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100 light-mode-img"
                    data-bg-src="assets/images/hero-slider/hero-slider-16.jpg"></div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="assets/images/hero-slider/hero-slider-white-16.jpg"></div>
            </div>
            <div class="vh-100 d-flex align-items-center">
                <div class="z-index-2 container container-xxl py-15">
                    <div data-animate="fadeInDown" class="card border-0 ps-lg-1 mx-md-0 mx-auto hero-card">
                        <div class="card-body p-11">
                            <h1 class="mb-7 hero-title-5 pe-lg-12">
                                Love Your Skin Naturally
                            </h1>
                            <p class="hero-desc fs-18px text-body-calculate mb-9">
                                Made using clean, non-toxic ingredients, our products are
                                designed for everyone.
                            </p>
                            <a href="#"
                                class="btn btn-dark rounded btn-hover-bg-primary btn-hover-border-primary">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100 light-mode-img"
                    data-bg-src="assets/images/hero-slider/hero-slider-17.jpg"></div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="assets/images/hero-slider/hero-slider-white-17.jpg"></div>
            </div>
        </div>
    </section>
    {{-- category section --}}
    {{-- <livewire:home.component.category-component /> --}}
    <x-home.category-component />

    
    {{-- Feathure Products --}}
    {{-- <livewire:home.component.feathproduct /> --}}
    <x-home.feathpro-component />
    {{-- Advertise Products --}}
    <section class="container container-xxl">
        <div class="row gy-30px">
            <div class="col-lg-6" data-animate="fadeInUp">
                <div class="card border-0 rounded-0 banner-01 hover-zoom-in hover-shine">
                    <img class="lazy-image object-fit-cover card-img light-mode-img" src="#"
                        data-src="./web/images/banner/banner-01.jpg" width="690" height="420"
                        alt="Intensive Glow C&#43; Serum">
                    <img class="lazy-image dark-mode-img object-fit-cover card-img" src="#"
                        data-src="./web/images/banner/banner-white-01.jpg" width="690" height="420"
                        alt="Intensive Glow C&#43; Serum">
                    <div class="card-img-overlay d-inline-flex flex-column p-md-12 m-md-2 p-8">
                        <h6 class="card-subtitle ls-1 fs-15px mb-5 fw-semibold text-body-calculate">NEW COLLECTION
                        </h6>
                        <h3 class="card-title lh-45px mw-md-60 pe-xl-15  fs-3 pe-0">Intensive Glow C&#43; Serum</h3>
                        <div class="mt-7"><a href="#" class="btn btn-white px-6 shadow-sm">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-animate="fadeInUp">
                <div class="card border-0 rounded-0 banner-01 hover-zoom-in hover-shine">
                    <img class="lazy-image object-fit-cover card-img light-mode-img" src="#"
                        data-src="./web/images/banner/banner-02.jpg" width="690" height="420"
                        alt="25% off Everything">
                    <img class="lazy-image dark-mode-img object-fit-cover card-img" src="#"
                        data-src="./web/images/banner/banner-white-02.jpg" width="690" height="420"
                        alt="25% off Everything">
                    <div class="card-img-overlay d-inline-flex flex-column p-md-12 m-md-2 p-8">
                        <h3 class="card-title lh-45px fs-3 pe-15">25% off Everything</h3>
                        <p class="card-text fs-15px text-body-emphasis mw-md-60 pe-xl-20">Makeup with extended range
                            in colors for every human.</p>
                        <div class="mt-7"><a href="#" class="btn btn-white shadow-sm">Shop Sale</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- offer --}}
    <section id="specia_offer_save_on_sets_1" class="pt-15 pb-10 p-5">
        <div class="container container-xxl">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-12 mb-lg-0">
                    <img data-src="./assets/images/banner/banner-55.jpg" alt="banner"
                        class="img-fluid lazy-image w-100" width="705" height="620" src="#" />
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 ps-lg-10 pe-xl-18">
                    <p class="text-uppercase text-body-emphasis fw-semibold ls-1 d-flex align-items-center pb-2">
                        Special offer
                        <span class="badge bg-primary fs-15px py-3 px-5 ms-5 ls-0 fw-bold lh-12">-20%</span>
                    </p>
                    <h2 class="mb-5">Save on Sets</h2>
                    <p class="fs-18px mb-5">
                        Made using clean, non-toxic ingredients, our products are
                        designed for everyone.
                    </p>
                    <div class="d-flex countdown ms-n4 ms-md-n7" data-countdown="true"
                        data-countdown-end="Jan 22, 2024 00:00:00">
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="day fw-semibold text-primary font-primary"></span>
                        </div>
                        <div class="separate fw-semibold fs-1 text-primary">:</div>
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="hour fw-semibold text-primary font-primary"></span>
                        </div>
                        <div class="separate fw-semibold fs-1 text-primary">:</div>
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="minute fw-semibold text-primary font-primary"></span>
                        </div>
                        <div class="separate fw-semibold fs-1 text-primary">:</div>
                        <div class="countdown-item text-center px-md-7 px-4 fs-1">
                            <span class="second fw-semibold text-primary font-primary"></span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary mt-9">Get Only
                        $39,00</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-14 pb-16 py-lg-19 bg-section-2">
        <div class="container container-xxl">
            <div class="text-center" data-animate="fadeInUp">
                <h2 class="mb-6">As seen in</h2>
            </div>
            <div class="slick-slider mt-12"
                data-slick-options="{&quot;slidesToShow&quot;: 3,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;: 992,&quot;settings&quot;: {&quot;slidesToShow&quot;: 2,&quot;dots&quot;:true}},{&quot;breakpoint&quot;: 768,&quot;settings&quot;: {&quot;slidesToShow&quot;: 2,&quot;dots&quot;:true}},{&quot;breakpoint&quot;: 576,&quot;settings&quot;: {&quot;slidesToShow&quot;: 1,&quot;dots&quot;:true}}]}">
                <div data-animate="fadeInUp">
                    <div class="bg-transparent text-center">
                        <img class="lazy-image w-auto mx-auto mb-6 light-mode-img" src="#"
                            data-src="./web/images/testimonial/testimonial-03.png" width="150" height="82"
                            alt="Also the customer service is phenomenal. I would purchase again.">
                        <img class="lazy-image dark-mode-img w-auto mx-auto mb-6" src="#"
                            data-src="./web/images/testimonial/testimonial-white-03.png" width="150"
                            height="82" alt="Also the customer service is phenomenal. I would purchase again.">
                        <p class="fs-5 fw-semibold mx-xl-9 px-xl-2 mb-0 text-body-emphasis">“Also the customer
                            service is phenomenal. I would purchase again.“</p>
                    </div>
                </div>
                <div data-animate="fadeInUp">
                    <div class="bg-transparent text-center">
                        <img class="lazy-image w-auto mx-auto mb-6 light-mode-img" src="#"
                            data-src="./web/images/testimonial/testimonial-02.png" width="150" height="82"
                            alt="Great product line. Very attentive staff to deal with.">
                        <img class="lazy-image dark-mode-img w-auto mx-auto mb-6" src="#"
                            data-src="./web/images/testimonial/testimonial-white-02.png" width="150"
                            height="82" alt="Great product line. Very attentive staff to deal with.">
                        <p class="fs-5 fw-semibold mx-xl-9 px-xl-2 mb-0 text-body-emphasis">“Great product line.
                            Very attentive staff to deal with.“</p>
                    </div>
                </div>
                <div data-animate="fadeInUp">
                    <div class="bg-transparent text-center">
                        <img class="lazy-image w-auto mx-auto mb-6 light-mode-img" src="#"
                            data-src="./web/images/testimonial/testimonial-01.png" width="150" height="82"
                            alt="Looking to affordably upgrade your everyday dinnerware? Look no further than e.Space">
                        <img class="lazy-image dark-mode-img w-auto mx-auto mb-6" src="#"
                            data-src="./web/images/testimonial/testimonial-white-01.png" width="150"
                            height="82"
                            alt="Looking to affordably upgrade your everyday dinnerware? Look no further than e.Space">
                        <p class="fs-5 fw-semibold mx-xl-9 px-xl-2 mb-0 text-body-emphasis">“Looking to affordably
                            upgrade your everyday dinnerware? Look no further than e.Space“</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container-xxl pt-lg-19 pt-14 mb-2">
            <div class="mb-11 mt-2 pt-1 pb-3 text-center" data-animate="fadeInUp">
                <h2 class="mb-5">Customer Favorite Beauty Essentials</h2>
                <p class="fs-18px mb-0 mw-xl-30 mw-lg-50 mw-md-75 ms-auto me-auto">Made using clean, non-toxic
                    ingredients, our products are designed for everyone.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-10 mb-lg-0" data-animate="fadeInUp">
                    <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                        <img class="lazy-image w-100 img-fluid card-img object-fit-cover banner-02 light-mode-img"
                            src="#" data-src="./web/images/banner/banner-33.jpg" width="570"
                            height="913" alt="Empower Yourself">
                        <img class="lazy-image dark-mode-img w-100 img-fluid card-img object-fit-cover banner-02"
                            src="#" data-src="./web/images/banner/banner-white-33.jpg" width="570"
                            height="913" alt="Empower Yourself">
                        <div class="card-img-overlay p-12 m-2 d-inline-flex flex-column justify-content-end">
                            <h3 class="card-title mb-0 fs-2 text-white">Empower Yourself</h3>
                            <p class="card-text mb-0 fs-18px text-white mt-5">Get the skin you want to feel</p>
                            <div class="mt-10 pt-2">
                                <a href="#" class="btn btn-white">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row gy-11">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Enriched Duo">
                                        <img src="#" data-src="./web/images/products/product-01-330x440.jpg"
                                            class="img-fluid lazy-image w-100" alt="Enriched Duo" width="330"
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
                                            href="shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-title="Compare">
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
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="shop/product-details-v1.html">Enriched Duo</a>
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
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Shield Spray">
                                        <img src="#" data-src="./web/images/products/product-02-330x440.jpg"
                                            class="img-fluid lazy-image w-100" alt="Shield Spray" width="330"
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
                                            href="shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-title="Compare">
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
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="shop/product-details-v1.html">Shield Spray</a>
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
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Vital Eye Cream">
                                        <img src="#" data-src="./web/images/products/product-05-330x440.jpg"
                                            class="img-fluid lazy-image w-100" alt="Vital Eye Cream" width="330"
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
                                            href="shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-title="Compare">
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
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="shop/product-details-v1.html">Vital Eye Cream</a>
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
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Supreme Moisture Mask">
                                        <img src="#" data-src="./web/images/products/product-03-330x440.jpg"
                                            class="img-fluid lazy-image w-100" alt="Supreme Moisture Mask"
                                            width="330" height="440">
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
                                            href="shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-title="Compare">
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
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="shop/product-details-v1.html">Supreme Moisture Mask</a>
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
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Supreme Polishing Treatment">
                                        <img src="#" data-src="./web/images/products/product-15-330x440.jpg"
                                            class="img-fluid lazy-image w-100" alt="Supreme Polishing Treatment"
                                            width="330" height="440">
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
                                            href="shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-title="Compare">
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
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="shop/product-details-v1.html">Supreme Polishing Treatment</a>
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
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card card-product grid-2 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                        title="Scalp Moisturizing Cream">
                                        <img src="#" data-src="./web/images/products/product-06-330x440.jpg"
                                            class="img-fluid lazy-image w-100" alt="Scalp Moisturizing Cream"
                                            width="330" height="440">
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
                                            href="shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-title="Compare">
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
                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="shop/product-details-v1.html">Scalp Moisturizing Cream</a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-14 pb-md-12 pb-8 pb-lg-17 pt-lg-21">
        <div class="container container-xxl">
            <div class="text-center" data-animate="fadeInUp">
                <h2 class="mb-6">More to Discover</h2>
                <p class="fs-18px w-lg-60 w-xl-40 mx-md-16 mx-lg-auto mb-13">Our bundles were designed to
                    conveniently package your tanning essentials while saving you money.</p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-8 mb-md-0" data-animate="fadeInUp">
                    <div class="card border-0">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image light-mode-img" src="#"
                                data-src="./web/images/image-box/image-box-10-1.jpg" width="960" height="640"
                                alt>
                            <img class="lazy-image dark-mode-img img-fluid lazy-image" src="#"
                                data-src="./web/images/image-box/image-box-white-10-1.jpg" width="960"
                                height="640" alt>
                        </div>
                        <div class="card-body text-body-emphasis text-center pt-9 mt-2">
                            <h5 class="card-titletext-decoration-none fs-4 mb-4 d-block fw-semibold"><a
                                    class="color-inherit text-decoration-none" href="#">Summer Collection</a>
                            </h5>
                            <a href="#" title="Shop now"
                                class="btn btn-link fw-semibold text-body-emphasis">Shop
                                now <i class="far fa-arrow-right fs-14px ps-2 ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-8 mb-md-0" data-animate="fadeInUp">
                    <div class="card border-0">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image light-mode-img" src="#"
                                data-src="./web/images/image-box/image-box-12.jpg" width="960" height="640"
                                alt>
                            <img class="lazy-image dark-mode-img img-fluid lazy-image" src="#"
                                data-src="./web/images/image-box/image-box-white-12.jpg" width="960"
                                height="640" alt>
                        </div>
                        <div class="card-body text-body-emphasis text-center pt-9 mt-2">
                            <h5 class="card-titletext-decoration-none fs-4 mb-4 d-block fw-semibold"><a
                                    class="color-inherit text-decoration-none" href="#">Summer Collection</a>
                            </h5>
                            <a href="#" title="Shop now"
                                class="btn btn-link fw-semibold text-body-emphasis">Read
                                more <i class="far fa-arrow-right fs-14px ps-2 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Valuablabe Content --}}
    <section class=" pb-lg-13 pb-13">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-01"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Free Shipping</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">Free Shipping for orders over $130</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-02"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Returns</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">Within 30 days for an exchange.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-03"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Online Support</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-04"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Flexible Payment</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">Pay with Multiple Credit Cards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection