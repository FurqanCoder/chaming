@extends('dashboard.layout.app')
@section('dash-content')
    
    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-30">
            <h2>Categories</h2>
        </div>
        <div class="row g-4">
            <div class="col-xxl-12 col-md-12 d-flex">
                <div class="panel col-md-6">
                    <div class="panel-header">
                        <h5>Add Main Category</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('main-category') }}" method="POST" enctype="multipart/form-data">
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
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control form-control-sm" id="categoryTitle" required>
                                    <p class="perma-txt" hidden>
                                        Permalink: <span data-link="https://example.com/" class="site-link text-primary"
                                            id="categoryPermalink">https://charmingflow.com/</span><input type="text"
                                            name="slug" class="form-control form-control-sm" hidden=""
                                            id="editPermalink">
                                        <button class="btn-flush bg-primary" id="editPermaBtn">Edit</button>
                                        <button class="btn-flush bg-success" id="createPerma" hidden="">OK</button>
                                        <button class="btn-flush bg-danger" id="cancelPerma" hidden="">Cancel</button>
                                    </p>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea rows="5" name="description" class="form-control form-control-sm" required></textarea>
                                </div>

                                <div class="">
                                    <div class="row">
                                        <div class="col-sm-2 imgUp">
                                            <div class="imagePreview"></div>
                                            <div class="preview-container" id="imagePreviewContainer">
                                                <img src="" class="image-preview" id="imagePreview">
                                                <input type="file" name="image" class="upload-input imageInput" id=""
                                                    accept="image/*">
                                            </div>

                                        </div>
                                        <!-- col-2 -->
                                        {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="btn-box">
                                        <button class="btn btn-sm btn-primary">Save Category</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="panel col-md-6">
                    <div class="panel-header">
                        <h5>Add SubCategory</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('sub-category') }}" method="POST">
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
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="name" class="form-control form-control-sm"
                                        id="categoryTitle">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Category Slug</label>
                                    <input type="text" class="form-control form-control-sm" name="slug"
                                        placeholder="Slug">
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Main Category</label>
                                    <select class="form-control form-control-sm" name="main_category"
                                        data-placeholder="Select">
                                        <option value="">Select</option>
                                        @if (isset($data))
                                            @foreach ($data as $cat)
                                                <option value="{{ $cat->id }}" class="form-control">{{ $cat->name }}
                                                </option>
                                            @endforeach
                                        @else
                                            <option value="">Select</option>
                                        @endif
                                        {{-- <option value="">Select</option> --}}

                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea rows="5" class="form-control form-control-sm" name="description"></textarea>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <div class="btn-box">
                                        <button class="btn btn-sm btn-primary">Save Category</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-md-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>All Categories</h5>
                        <div class="btn-box d-flex gap-2">
                            <div id="tableSearch"></div>
                            <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                    class="fa-light fa-arrows-rotate"></i></button>
                            <div class="digi-dropdown dropdown">
                                <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false"><i
                                        class="fa-regular fa-ellipsis-vertical"></i></button>
                                <ul class="digi-dropdown-menu dropdown-menu">
                                    <li class="dropdown-title">Show Table Title</li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showName" checked>
                                            <label class="form-check-label" for="showName">
                                                Name
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showDescription" checked>
                                            <label class="form-check-label" for="showDescription">
                                                Description
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showSlug" checked>
                                            <label class="form-check-label" for="showSlug">
                                                Slug
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showCount" checked>
                                            <label class="form-check-label" for="showCount">
                                                Count
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showAction" checked>
                                            <label class="form-check-label" for="showAction">
                                                Action
                                            </label>
                                        </div>
                                    </li>
                                    <li class="dropdown-title pb-1">Showing</li>
                                    <li>
                                        <div class="input-group">
                                            <input type="number" class="form-control form-control-sm w-50"
                                                value="10">
                                            <button class="btn btn-sm btn-primary w-50">Apply</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-filter-option">
                            <div class="row justify-content-between g-3">
                                <div class="col-xxl-4 col-6 col-xs-12">
                                    <form class="row g-2">
                                        <div class="col-8">
                                            <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                <option value="">Bulk action</option>
                                                <option value="0">Edit</option>
                                                <option value="1">Move To Trash</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-sm btn-primary w-100">Apply</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                    <div id="productTableLength"></div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped"
                            id="allProductTable">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="markAllProduct">
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($data))
                                    @foreach ($data as $cat)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-category-card">
                                                <div class="part-icon">
                                                    <span><img src="{{ asset('storage/' . $cat->category_image) }}" alt="Category Image">
                                                    </span>
                                                </div>
                                                <div class="part-txt">
                                                    <span class="category-name">{{$cat->name}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="table-dscr">{{$cat->des}}</span></td>
                                        <td>{{$cat->slug}}</td>
                                        <td> @if ($subcate->where('cate_id', $cat->id)->count())
                                            <ul>
                                                @foreach ($subcate as $count)
                                                    @if ($count->cate_id == $cat->id)
                                                        <li>{{ $count->count }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>No subcategory</p>
                                        @endif</td>
                                        <td>
                                            <div class="btn-box">
                                                {{-- <button><i class="fa-light fa-eye"></i></button> --}}
                                                <a href="{{route('update.category',['id' => $cat->id])}}"><i class="fa-light fa-pen-to-square"></i></a>
                                                <button><i class="fa-light fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    {{"Please Create main categories"}}
                                @endif
                                
                                
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>
      
    @endsection
