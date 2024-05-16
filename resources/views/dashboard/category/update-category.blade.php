@extends('dashboard.layout.app')
@section('dash-content')
<div class="main-content" >
    <div class="row">
        <div class="panel col-md-6">
            <div class="panel-header">
                <h5>Add Main Category</h5>
            </div>
            <div class="panel-body">
                <form action="{{route('update.category',['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="name" value="{{ $data->name }}"
                                class="form-control form-control-sm" id="categoryTitle" required>
                            <p class="perma-txt" hidden>
                                Permalink: <span data-link="https://example.com/" class="site-link text-primary"
                                    id="categoryPermalink">https://charmingflow.com/</span><input type="text"
                                    name="slug" class="form-control form-control-sm" hidden=""
                                    id="editPermalink" value="{{$data->slug}}">
                                <button class="btn-flush bg-primary" id="editPermaBtn">Edit</button>
                                <button class="btn-flush bg-success" id="createPerma" hidden="">OK</button>
                                <button class="btn-flush bg-danger" id="cancelPerma" hidden="">Cancel</button>
                            </p>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="5" name="description" class="form-control form-control-sm" required>{{$data->des}}</textarea>
                        </div>

                        <div class="">
                            <div class="row">
                                <div class="col-sm-2 imgUp">
                                    <div class="imagePreview"></div>
                                    <div class="preview-container" id="imagePreviewContainer">
                                        <img src="" class="image-preview" id="imagePreview">
                                        <input type="file" name="image" class="upload-input imageInput" id=""
                                            accept="image/*" value="{{$data->category_image}}">
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
    </div>
</div>
@endsection