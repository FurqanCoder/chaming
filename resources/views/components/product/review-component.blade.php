<div>
    <section class="container pt-15 pb-15 pt-lg-17 pb-lg-20">
        <div class="text-center">
            <h2 class="mb-12">Customer Reviews</h2>
        </div>
        <div class="mb-11">
            <div class=" d-md-flex justify-content-between align-items-center">
                <div class=" d-flex align-items-center">
                    <h4 class="fs-1 me-9 mb-0 overall-rating" id="overall-rating"></h4>
                    <div class="p-0">
                        <div class="d-flex align-items-center fs-6 ls-0 mb-4">
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
                                <div class="filled-stars fill" id="filled-stars">
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
                        <p class="mb-0 review-count" id="review-count"></p>
                    </div>
                </div>
                <div class="text-md-end mt-md-0 mt-7">
                    <a href="#customer-review" class="btn btn-outline-dark" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="customer-review"><svg class="icon">
                            <use xlink:href="#icon-Pencil"></use>
                        </svg>
                        Wire A Review
                    </a>
                </div>
            </div>
        </div>
        <div class="collapse mb-14 " id="customer-review">
            <form class="product-review-form"  id="reviewadd" method="POST" enctype="multipart/form-data">
                @csrf
                @auth('customer')
                <input type="hidden" value="{{$productId}}" name="product_id">
            @else
                {{-- User is not authenticated --}}
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group mb-7">
                            <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewName">Name</label>
                            <input id="reviewName" class="form-control" type="text" name="name">
                            <input type="hidden" value="{{$productId}}" name="product_id">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-4">
                            <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewEmail">Email</label>
                            <input id="reviewEmail" type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                @endauth
            
                <div>
                    <p class="mt-4 mb-5 fs-6 fw-semibold text-body-emphasis">Your Rating*</p>
                    <div class="form-group mb-6 d-flex justify-content-start">
                        <div class="rate-input">
                            <input type="radio" id="star5" name="rate" value="5" style>
                            <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                <i class="far fa-star"></i>
                            </label>
                            <input type="radio" id="star4" name="rate" value="4" style>
                            <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                <i class="far fa-star"></i>
                            </label>
                            <input type="radio" id="star3" name="rate" value="3" style>
                            <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                <i class="far fa-star"></i>
                            </label>
                            <input type="radio" id="star2" name="rate" value="2" style>
                            <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                <i class="far fa-star"></i>
                            </label>
                            <input type="radio" id="star1" name="rate" value="1" style>
                            <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                <i class="far fa-star"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-7">
                    <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewTitle">Title of
                        Review:</label>
                    <input id="reviewTitle" type="text" name="title" class="form-control">
                </div>
                <div class="form-group mb-10">
                    <label class="mb-4 fs-6 fw-semibold text-body-emphasis" for="reviewMessage">How was your overall
                        experience?</label>
                    <textarea id="reviewMessage" class="form-control" name="message" rows="5"></textarea>
                </div>
                <div class="d-flex">
                    <div class="me-4">
                        <div class="input-group align-items-center">
                            <input type="file" name="img[]" multiple class="form-control border" id="reviewrAddPhoto">
                        </div>
                    </div>
                </div>
                <div class="text-md-end mt-md-0 mt-7">
                <button class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        <div class=" mt-12">
            {{-- <h3 class="fs-5" id="review-count">2947 Reviews</h3> --}}
            <hr>
            <!-- HTML container for comments -->
<div class="comment-container"></div>  
</div>
        {{-- <nav class="d-flex mt-13 pt-3 justify-content-center" aria-label="pagination">
            <ul class="pagination m-0">
                <li class="page-item">
                    <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="#"
                        aria-label="Previous">
                        <svg class="icon">
                            <use xlink:href="#icon-angle-double-left"></use>
                        </svg>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                    <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="#"
                        aria-label="Next">
                        <svg class="icon">
                            <use xlink:href="#icon-angle-double-right"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <button id="load-more-btn">Load More</button> --}}

    </section>
</div>