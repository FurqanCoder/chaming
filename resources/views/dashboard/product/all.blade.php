@extends('dashboard.layout.app')
@section('dash-content')
        <!-- main content start -->
        <div class="main-content">
            <div class="row g-4">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5>All Products</h5>
                            <div class="btn-box d-flex flex-wrap gap-2">
                                <div id="tableSearch"></div>
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>
                                <div class="digi-dropdown dropdown">
                                    <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                                    <ul class="digi-dropdown-menu dropdown-menu">
                                        <li class="dropdown-title">Show Table Title</li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showProduct" checked>
                                                <label class="form-check-label" for="showProduct">
                                                    Products
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showPublished" checked>
                                                <label class="form-check-label" for="showPublished">
                                                    Published
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showStock" checked>
                                                <label class="form-check-label" for="showStock">
                                                    Stock
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showPrice" checked>
                                                <label class="form-check-label" for="showPrice">
                                                    Price
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showSales" checked>
                                                <label class="form-check-label" for="showSales">
                                                    Sales
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showRating" checked>
                                                <label class="form-check-label" for="showRating">
                                                    Rating
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-title pb-1">Showing</li>
                                        <li>
                                            <div class="input-group">
                                                <input type="number" class="form-control form-control-sm w-50" value="10">
                                                <button class="btn btn-sm btn-primary w-50">Apply</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <a href="dashboard-add-product.html" class="btn btn-sm btn-primary"><i class="fa-light fa-plus"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="product-table-quantity">
                                <ul>
                                    <li class="text-white">All (23)</li>
                                    <li>Published (19)</li>
                                    <li>Draft (05)</li>
                                    <li>Trush (05)</li>
                                </ul>
                            </div>
                            <div class="table-filter-option">
                                <div class="row g-3">
                                    <div class="col-xl-10 col-9 col-xs-12">
                                        <div class="row g-3">
                                            <div class="col">
                                                <form class="row g-2">
                                                    <div class="col">
                                                        <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                            <option value="">Bulk action</option>
                                                            <option value="0">Edit</option>
                                                            <option value="1">Move To Trash</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <button class="btn btn-sm btn-primary w-100">Apply</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <select class="form-control form-control-sm">
                                                    <option value="0">All Category</option>
                                                    <option value="1">Cloth</option>
                                                    <option value="2">Fashion</option>
                                                    <option value="3">Bag</option>
                                                    <option value="4">Food</option>
                                                    <option value="5">Medicine</option>
                                                    <option value="6">Watch</option>
                                                    <option value="7">Smart Phone</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-control form-control-sm">
                                                    <option value="0">All Product Type</option>
                                                    <option value="1">Downloadable</option>
                                                    <option value="2">Virtual</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-control form-control-sm">
                                                    <option value="0">All Product Stock</option>
                                                    <option value="1">In stock</option>
                                                    <option value="2">Out of stock</option>
                                                    <option value="3">On backorder</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>
                                            </div>
                                            <div class="col">
                                                <div class="digi-dropdown dropdown">
                                                    <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-plus"></i></button>
                                                    <ul class="digi-dropdown-menu dropdown-menu">
                                                        <li class="dropdown-title">Filter Options</li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="filterCategory" checked>
                                                                <label class="form-check-label" for="filterCategory">
                                                                    Category
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="filterProductType" checked>
                                                                <label class="form-check-label" for="filterProductType">
                                                                    Product Type
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="filterStock" checked>
                                                                <label class="form-check-label" for="filterStock">
                                                                    Stock
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                        <div id="productTableLength"></div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                                <thead>
                                    <tr>
                                        <th class="no-sort">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="markAllProduct">
                                            </div>
                                        </th>
                                        <th>Product</th>
                                        <th>SKU</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Sales</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                        <th>Published</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($products))
                                        @foreach ($products as $data)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="product_id[]" value="{{$data->id}}" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-product-card">
                                                    <div class="part-img">
                                                        <img src="{{ asset('storage/'.$data->thumbnail)}}" alt="{{$data->title}}">
                                                    </div>
                                                    <div class="part-txt">
                                                        <span class="product-name">{{$data->title}}</span>
                                                        <span class="product-category">Category: {{ $data->category_name }}/{{ $data->subcate_name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$data->sku}}</td>
                                            <td>{{$data->stock}}</td>
                                            @if (isset($data->discount))
                                            <td>Rs.{{$data->discount}}</td>
                                            @else
                                            <td>Rs.{{$data->price}}</td>
                                            @endif
                                            
                                            <td>256</td>
                                            <td>
                                                <div class="rating">
                                                    <div class="star">
                                                        <i class="fa-sharp fa-solid fa-star starred"></i>
                                                        <i class="fa-sharp fa-solid fa-star starred"></i>
                                                        <i class="fa-sharp fa-solid fa-star starred"></i>
                                                        <i class="fa-sharp fa-solid fa-star starred"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="rating-amount">(42)</div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($data->status == 1)
                                                Published
                                                @else
                                                Draft
                                                @endif
                                            </td>
                                            <td>{{$data->updated_at}}</td>
                                            <td>
                                                <div class="btn-box">
                                                    <button><i class="fa-light fa-eye"></i></button>
                                                    <a href="{{route('update-product', ['id' => $data->id])}}"><i class="fa-light fa-pen"></i></a>
                                                    <form action="{{route('delete-product', ['id' => $data->id])}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                    <button href=""><i class="fa-light fa-trash"></i></button>
                                                        
                                                    </form>
                                                    
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <p>No Can be Found</p>
                                    @endif
                                    
                                </tbody>
                            </table>
                            
                            <div class="table-bottom-control"></div>
                        </div>
                    </div>
                </div>
            </div>
    
            
@endsection