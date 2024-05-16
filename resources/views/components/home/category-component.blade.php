<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <section class="container container-xxl pt-14 pt-lg-17">
        <div class="mb-lg-13 mb-7">
            <div class="text-center">
                <h2 class="mb-6">Our Picks for You</h2>
                <p class="fs-18px mb-0">Our products are designed for everyone.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($category as $data)
                <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
                    <div class="card border-0 fw-semibold">
                        <a href="{{route('shop-category',['slug' => $data->slug])}}" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                            <img class="lazy-image img-fluid card-img light-mode-img" src="#"
                                data-src="{{ asset('storage/' . $data->category_image) }}" width="160" height="160"
                                alt="Moisturizers" />
                            <img class="lazy-image dark-mode-img img-fluid card-img" src="#"
                                data-src="{{ asset('storage/' . $data->category_image) }}" width="160" height="160"
                                alt="Moisturizers" />
                        </a>
                        <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                            <h4 class="fs-5 text-center position-relative">
                                <a href="{{route('shop-category',['slug' => $data->slug])}}" class="text-decoration-none">{{ $data->name }}</a>
                                @foreach ($pro as $count)
                                    @if ($count->cate_id == $data->id)
                                        <span
                                            class="fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y">
                                            {{ $count->count }}
                                        </span>
                                    @endif
                                @endforeach
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>