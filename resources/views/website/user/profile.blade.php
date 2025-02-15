@extends('website.layout.app')
@section('web-content')
<main id="content" class="bg-body-tertiary-01 d-flex flex-column main-content">
    <div class="dashboard-page-content">
        <div class="row mb-9 align-items-center justify-content-between">
            <div class="col-sm-6 mb-8 mb-sm-0">
                <h2 class="fs-4 mb-0">Profile settings</h2>
            </div>
        </div>
        <div class="card mb-4 rounded-4 p-7">
            <div class="card-body pt-7 pb-0 px-0">
                <div class="row mx-n8">
                    <aside class="col-lg-3 border-end px-8">
                        <nav class="nav nav-pills flex-lg-column mb-7 nav-add-product">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fa-sharp fa-regular fa-user"></i> My Profile</a>
                            <a class="nav-link" href="#"><i class="fa-regular fa-bag-shopping"></i> My Orders</a>
                            <a class="nav-link" href="#"><i class="fa-regular fa-heart"></i> Wishlist</a>
                            <a class="nav-link" href="#"><i class="fa-regular fa-lock"></i> Change Password</a>
                            <a class="nav-link" href="#"><i class="fa-regular fa-arrow-right-from-bracket"></i> Logout</a>
                            
                        </nav>
                    </aside>
                    <div class="col-lg-9 px-8">
                        <section class="p-xl-8">
                            <form class="form-border-1">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row gx-9">
                                            <div class="col-6 mb-6">
                                                <label
                                                    class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
                                                    for="first-name">First name</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Type here" id="first-name"
                                                    name="first-name">
                                            </div>
                                            <div class="col-6 mb-6">
                                                <label
                                                    class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
                                                    for="last-name">Last name</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Type here" id="last-name"
                                                    name="last-name">
                                            </div>
                                            <div class="col-lg-6 mb-6">
                                                <label
                                                    class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
                                                    for="email">Email</label>
                                                <input class="form-control" type="email"
                                                    placeholder="example@mail.com" id="email"
                                                    name="email">
                                            </div>
                                            <div class="col-lg-6 mb-6">
                                                <label
                                                    class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
                                                    for="phone">Phone</label>
                                                <input class="form-control" type="tel"
                                                    placeholder="+1234567890" id="phone" name="phone">
                                            </div>
                                            <div class="col-lg-6 mb-6">
                                                <label
                                                    class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
                                                    for="birthday">Birthday</label>
                                                <input class="form-control" type="date" id="birthday"
                                                    name="birthday">
                                            </div>
                                        </div>
                                    </div>
                                    <aside class="col-lg-4">
                                        <div class="text-lg-center">
                                            <div class="mx-auto">
                                                <img class="mb-9 rounded-pill lazy-image" src="#"
                                                    data-src="../assets//images/dashboard/avatar-1.png"
                                                    alt="User Photo" height="196" width="196">
                                            </div>
                                            <div>
                                                <a class="btn border hover-white bg-hover-primary border-hover-primary"
                                                    href="#" type="file"><i class="fas fa-cloud-upload"></i> Upload
                                                </a>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>
                            <hr class="my-8">
                            <div class="row">
                                <div class="col-md-5">
                                    <article class="d-flex p-6 mb-6 bg-body-tertiary border rounded">
                                        <div class="mr-auto">
                                            <h6 class="fs-14px mb-0 font-weight-500">Password</h6>
                                            <small class="text-muted d-block" style="width: 70%">You can
                                                reset or change your password by clicking here</small>
                                        </div>
                                        <div>
                                            <a class="btn border btn-hover-text-light btn-hover-bg-primary btn-hover-border-primary btn-sm"
                                                href="#">Change</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-5">
                                    <article class="d-flex p-6 mb-6 bg-body-tertiary border rounded">
                                        <div class="mr-auto">
                                            <h6 class="fs-14px mb-0 font-weight-500">Remove account</h6>
                                            <small class="text-muted d-block" style="width: 70%">Once
                                                you delete your account, there is no going back.</small>
                                        </div>
                                        <div>
                                            <a class="btn border btn-hover-text-light btn-hover-bg-primary btn-hover-border-primary btn-sm"
                                                href="#">Deactivate</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection