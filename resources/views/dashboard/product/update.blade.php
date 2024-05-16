@extends('dashboard.layout.app')
@section('dash-content')

<style>
    .preview-container {
        width: 100px;
        height: 100px;
        border: 2px dashed #ccc;
        position: relative;
        overflow: hidden;
        background-image: url({{ asset('dashboad/assets/images/cate-size.png') }});

    }

    .image-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .upload-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }
</style>
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-30">
            <h2>Add New Product</h2>
            <div class="btn-box">
                <a href="dashboard-all-product.html" class="btn btn-sm btn-primary">View All</a>
            </div>
        </div>
        <form action="{{ route('update-product', ['id' => $data->id]) }}" id="yourFormId" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row g-4">
                <div class="col-xxl-9 col-lg-8">
                    <div class="panel mb-30">
                        <div class="panel-body product-title-input">
                            <label class="form-label">Write Title</label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}" id="productTitle"
                                placeholder="Title for product" >
                            <p class="perma-txt" hidden>
                                Permalink: <span data-link="https://example.com/" class="site-link text-primary"
                                    id="productPermalink">https://example.com/</span><input type="text"
                                    class="form-control form-control-sm" hidden id="editPermalink" value="{{$data->slug}}" name="slug">
                                <button class="btn-flush bg-primary" id="editPermaBtn">Edit</button>
                                <button class="btn-flush bg-success" id="createPerma" hidden>OK</button>
                                <button class="btn-flush bg-danger" id="cancelPerma" hidden>Cancel</button>
                            </p>
                        </div>
                    </div>
                    <div class="panel mb-30">
                        <div class="panel-header">
                            <h5>Product Description</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <textarea class="editor myTextarea" name="description" id="" >{{$data->description}}</textarea>
                            {{-- <textarea id="myTextarea" name="des"></textarea> --}}
                        </div>
                    </div>
                    <div class="panel mb-30">
                        <div class="panel-header">
                            <h5>Product Data</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <nav>
                                <div class="btn-box d-flex flex-wrap gap-1 mb-30" id="nav-tab" role="tablist">
                                    <button class="btn btn-sm btn-outline-primary active" id="nav-media-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-media" type="button" role="tab"
                                        aria-controls="nav-media" aria-selected="true">Media</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-inventory-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-inventory" type="button" role="tab"
                                        aria-controls="nav-inventory" aria-selected="false">Inventory</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-price-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-price" type="button" role="tab" aria-controls="nav-price"
                                        aria-selected="false">Price</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-attribute-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-productDetails" type="button"
                                        role="tab" aria-controls="nav-attribute" aria-selected="false">Product
                                        Detalis</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-shipping-info-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-shipping-info" type="button"
                                        role="tab" aria-controls="nav-shipping-info" aria-selected="false">How to
                                        Use</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-video-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-video" type="button" role="tab"
                                        aria-controls="nav-video" aria-selected="false">Ingredients</button>
                                    {{-- <button class="btn btn-sm btn-outline-primary" id="nav-shipping-configuration-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping-configuration" type="button" role="tab" aria-controls="nav-shipping-configuration" aria-selected="false">Shipping Configuration</button>
                            <button class="btn btn-sm btn-outline-primary" id="nav-offer-tab" data-bs-toggle="tab" data-bs-target="#nav-offer" type="button" role="tab" aria-controls="nav-offer" aria-selected="false">Offer</button> --}}
                                </div>
                            </nav>
                            
                            <div class="tab-content product-data-tab" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-media" role="tabpanel"
                                    aria-labelledby="nav-media-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xxl-3 col-md-4 col-5 col-xs-12">
                                            <div class="product-image-upload">
                                                <div class="part-txt">
                                                    <h5>Add thumbnail <span>(jpeg/png)</span></h5>
                                                </div>
                                                <div class="preview-container" id="imagePreviewContainer">
                                                    <img src="{{asset('storage/'.$data->thumbnail)}}" class="image-preview" id="imagePreview">
                                                    <input type="file" name="thumb_image" class="upload-input imageInput"
                                                        accept="image/*" >
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xxl-3 col-md-4 col-3 col-xs-12">
                                            <div class="product-image-upload">
                                                <div class="part-txt">
                                                    <h5>Add Video <span>(jpeg/png)</span></h5>
                                                </div>
                                                <div class="video">
                                                    <input type="file" class="form-control" name="product_video" accept="video/mp4,video/webm">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xxl-6 col-md-4 col-7 col-xs-12">
                                            <div class="add-gallery-img product-image-upload">
                                                <div class="part-txt">
                                                    <h5>Add gallery <span>(jpeg/png)</span></h5>
                                                </div>
                                                <input type="file" name="gallary[]" multiple class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-inventory" role="tabpanel"
                                    aria-labelledby="nav-inventory-tab" tabindex="0">
                                    
                                        <div class="row align-items-center g-3 mb-3">
                                            <label class="col-md-2 col-form-label col-form-label-sm">SKU <span
                                                    class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                        class="fa-solid fa-circle-question"></i></span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="sku" value="{{$data->sku}}" class="form-control form-control-sm"
                                                    id="SKU" >
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-3 mb-3">
                                            <label for="lowStockWarning"
                                                class="col-md-2 col-form-label col-form-label-sm" >Stock</label>
                                            <div class="col-md-10">
                                                <input type="number" value="{{$data->stock}}" name="stock" class="form-control form-control-sm"
                                                    id="lowStockWarning" >
                                            </div>
                                        </div>

                                    
                                </div>
                                <div class="tab-pane fade" id="nav-price" role="tabpanel"
                                    aria-labelledby="nav-price-tab" tabindex="0">
                                    
                                        <div class="row g-3 mb-3">
                                            <label for="regularPrice"
                                                class="col-md-2 col-form-label col-form-label-sm">Regular Price (Rs)</label>
                                            <div class="col-md-10">
                                                <input type="number" name="price" value="{{$data->price}}" class="form-control form-control-sm"
                                                    id="regularPrice" >
                                            </div>
                                        </div>
                                        <div class="row g-3 mb-3">
                                            <label for="salePrice"
                                                class="col-md-2 col-form-label col-form-label-sm">Discount
                                                (Rs)</label>
                                            <div class="col-md-8">
                                                <input type="number" name="discount_price"
                                                    class="form-control form-control-sm" value="{{$data->discount}}" id="salePrice">
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-control-sm p-0">
                                                    <select class="form-control form-control-sm" name="offer">
                                                        @if ($data->offere == 0)
                                                        <option value="0" selected>No Off</option>
                                                        <option value="1">Offer</option>
                                                        @else
                                                        <option value="1" selected>Offer</option>
                                                        <option value="0">No Off</option>

                                                        @endif
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <label for="PriceDateStart"
                                                class="col-md-2 col-form-label col-form-label-sm">Sale
                                                price dates</label>
                                            <div class="col-md-5">
                                                <input type="text" name="start_data"
                                                    class="form-control form-control-sm dateRangePicker"
                                                    id="PriceDateStart" value="{{ \Carbon\Carbon::parse($data->start_date)->format('D M Y - H:m') }}
                                                    " placeholder="DD MMMM YYYY - HH:MM">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" name="end_data"
                                                    class="form-control form-control-sm dateRangePicker" id="PriceDateEnd" value="{{ \Carbon\Carbon::parse($data->end_date)->format('D M Y - H:m') }}"
                                                    placeholder="DD MMMM YYYY - HH:MM">
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="nav-productDetails" role="tabpanel"
                                    aria-labelledby="nav-productDetails-tab" tabindex="0">
                                    <div class="add-product-attribute">
                                        
                                            <div class="panel mb30">
                                                <div class="add-thumbnail product-image-upload">
                                                    <div class="part-txt">
                                                        <h5>Add Product Details Image <span>(jpeg/png)</span></h5>
                                                    </div>
                                                    <input type="file" name="details_image" class="image-input"
                                                        id="thumbUpload">
                                                </div>
                                            </div>
                                            <div class="panel mb-30">
                                                <div class="panel-header">
                                                    <h5>Add Product Details</h5>
                                                    <div class="btn-box d-flex gap-2">
                                                        <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                                                class="fa-light fa-arrows-rotate"></i></button>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                                                class="fa-light fa-angle-up"></i></button>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <textarea class="editor myTextarea" name="product_details">{{$data->details}}</textarea>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-shipping-info" role="tabpanel"
                                    aria-labelledby="nav-shipping-info-tab" tabindex="0">
                                    
                                        <div class="panel mb-30">
                                            <div class="panel-header">
                                                <h5>Add Details About How to Use</h5>
                                                <div class="btn-box d-flex gap-2">
                                                    <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                                            class="fa-light fa-arrows-rotate"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                                            class="fa-light fa-angle-up"></i></button>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <textarea class="editor myTextarea" name="use">{{$data->how}}</textarea>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="nav-video" role="tabpanel"
                                    aria-labelledby="nav-video-tab" tabindex="0">
                                    
                                        <!-- Your existing HTML -->
                                        <div id="ingredientContainer">
                                            
                                                
                                            
                                            <div class="row">
                                                
                                                
                                                <div class="col">
                                                    <label for="">Ingredients Name</label>
                                                    <input type="text" class="form-control" name="Ing_name[]"
                                                        placeholder="Ingredient name">
                                                </div>
                                                
                                                <div class="col">
                                                    <label for="">Ingredients Weight</label>
                                                    <input type="text" class="form-control" name="Ing_weight[]"
                                                        placeholder="Ingredient weight">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Button to add a new ingredient row -->
                                        <button id="addIngredientBtn" class="btn btn-sm btn-primary mt-2">Add
                                            Ingredient</button>
                                    
                                    <!-- Add any necessary styles or scripts here -->

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-3 col-lg-4 add-product-sidebar">
                    {{-- <div class="mb-30 w-100">
                    <a href="#" class="btn btn-primary d-block">Preview Changed</a>
                </div> --}}
                    <div class="panel mb-30">
                        <div class="panel-header">
                            <h5>Published</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-control-sm" name="status">
                                        @if ($data->status == 1)
                                        <option value="1" selected>Published</option>
                                        <option value="0">Draft</option>
                                        @else
                                        <option value="1">Published</option>
                                        <option value="0" selected>Draft</option>
                                        @endif
                                        
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Visibility</label>
                                    <select class="form-control form-control-sm" name="visibility">
                                        <option value="1">Public</option>
                                        {{-- <option value="1">Pass. Protected</option> --}}
                                        <option value="0">Private</option>
                                    </select>
                                </div>
                                <div class="col-12">

                                    <div class="btn-box d-flex justify-content-end gap-2">
                                        <button class="btn btn-sm btn-outline-primary">Save</button>
                                        <button type="submit" id="publishButton"
                                            class="btn btn-sm btn-primary submit">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel mb-30">
                        <div class="panel-header">
                            <h5>Category</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            
                            <div class="product-categories">

                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Main Category</label>
                                        <select class="form-control form-control-sm" name="category" id="category" >
                                            <option>Select Main</option>
                                            @foreach ($categories as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Sub Category</label>
                                        <select class="form-control form-control-sm" id="sub-category"
                                            name="sub_category">
                                            {{-- <option value="0">Public</option>
                                            <option value="1">Pass. Protected</option>
                                            <option value="2">Private</option> --}}
                                        </select>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="border-top"></div>

                    </div>
                    <div class="panel">
                        <div class="panel-header">
                            <h5>Products Tags</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="product-tag-area">
                                <div class="row g-3">
                                    <div class="col-11">
                                        <input type="text" name="tags" value="{{$data->tags}}" class="input-flush" id="productTags"
                                            placeholder="Your product Tags" >
                                    </div>
                                    {{-- <div class="col-3">
                                    <button class="btn btn-sm btn-primary w-100" id="addTags otherButton1">Add</button>
                                </div> --}}
                                </div>
                                <span class="input-txt">Use commas to separate tags</span>
                                <div class="all-tags" id="allTags"></div>
                                
                                <div class="tag-history">
                                    <span class="choose-used-tag input-txt">Choose from most use tags</span>
                                    <div class="all-tags used-tags active">
                                        <div class="item d-inline-block" data-value="mobile">mobile<span
                                                class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="tab">tab<span class="close-tag"><i
                                                    class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="watch">watch<span
                                                class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="t-shirt">t-shirt<span
                                                class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="shirt">shirt<span
                                                class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="book">book<span class="close-tag"><i
                                                    class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="monitor">monitor<span
                                                class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                        <div class="item d-inline-block" data-value="cloth">cloth<span
                                                class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#category').change(function() {
                    var selectedCategory = $(this).val();
                    var subCategorySelect = $('#sub-category');

                    // Disable the sub-category select while loading new options
                    subCategorySelect.prop('disabled', true);

                    // Simulate an AJAX request to get sub-categories based on the selected category
                    // Replace this with your actual backend logic to fetch sub-categories
                    $.ajax({
                        url: '{{ route('get-subcategories', ':category') }}'.replace(':category',
                            selectedCategory),
                        method: 'GET',
                        success: function(response) {
                            // Clear existing options
                            console.log(response);
                            subCategorySelect.empty();

                            var subCategories = response.subcategories;
                            // Add default option
                            // var subCategories = response.subCategories;
                            subCategorySelect.append($('<option>', {
                                value: '',
                                text: 'Sub-category'
                            }));
                            // console.log(response.subCategories);
                            // Add new options based on the response
                            $.each(subCategories, function(index, subCategory) {
                                subCategorySelect.append($('<option>', {
                                    value: subCategory.id,
                                    text: subCategory.name
                                }));
                            });

                            // Enable the sub-category select
                            subCategorySelect.prop('disabled', false);
                        },
                        error: function() {
                            // Handle error
                            console.error('Error fetching sub-categories');
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Wait for the DOM content to be fully loaded before attaching event listeners
                document.getElementById("addIngredientBtn").addEventListener("click", function(event) {
                    event.preventDefault(); // Prevents the default behavior (page reload)

                    addIngredientRow();
                });
            });

            function addIngredientRow() {
                // Create a new div element
                var newDiv = document.createElement("div");
                newDiv.className = "row";

                // Add the HTML content to the new div
                newDiv.innerHTML = `
                <div class="col">
                  <label for="">Ingredient Name</label>
                  <input type="text" class="form-control" name="Ing_name[]" placeholder="Ingredient Name">
                </div>
                <div class="col">
                  <label for="">Ingredient Weight</label>
                  <input type="text" class="form-control" name="Ing_weight[]" placeholder="Ingredient Weight">
                </div>
              `;

                // Append the new div to the container
                document.getElementById("ingredientContainer").appendChild(newDiv);
            }
        </script>
    @endsection
