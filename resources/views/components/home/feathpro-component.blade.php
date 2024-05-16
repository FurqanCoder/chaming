<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <section>
        <div class="container container-xxl py-lg-17 pt-14 pb-16">
            <div class="mb-13 pb-3 text-center" data-animate="fadeInUp">
                <h2 class="mb-5">Our Featured Products</h2>
                <p class="fs-18px mb-0">Get the skin you want to feel</p>
            </div>
            <div class="slick-slider"
                data-slick-options="{&#34;arrows&#34;:true,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1560,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true}},{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                @foreach ($data as $dat)
                <div>
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Shield Conditioner">
                                <img src="#" data-src="{{asset('storage/'.$dat->thumbnail)}}"
                                    class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                    height="440">
                            </a>
                            @if (isset($dat->discount))
                            <div class="position-absolute product-flash z-index-2">
                                <span class="badge badge-product-flash on-sale bg-primary">
                                    {{ round(($dat->price - $dat->discount) / $dat->price * 100) }}% OFF
                                </span>
                            </div>
                            
                            @endif
                            
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="javascript:(0);" onclick="addtocart({{$dat->id}})" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                @if (isset($dat->discount))
                                <del class=" text-body fw-500 me-4 fs-13px">Rs.{{$dat->price}}</del>
                                <ins class="text-decoration-none">Rs.{{$dat->discount}}</ins></span>
                                @else
                                <ins class="text-decoration-none">Rs.{{$dat->price}}</ins></span>
                                @endif
                                
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="{{ route('web-sproduct', ['id' => $dat->id,'slug' => $dat->slug]) }}">{{$dat->title}}</a>
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
                @endforeach
                
            </div>
        </div>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Inside your Blade component view -->
<script>


</script>

        
        
    </section>
</div>
