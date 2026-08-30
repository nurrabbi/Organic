@extends('dashboard')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Upgrade User /</span> User's Data
        </h4>

        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session('success') }} </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Product Category</h5>
                    <div class="card-body">
                        <form action="{{ route('product_category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card mb-4">
                                <div class="card-body">
                                    <label for="formFile" class="form-label m-3">Current Image</label>
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4 mb-4">
                                        <img src="{{ $category->category_image }}" alt="category-avatar" class="d-block rounded"
                                            height="200" width="200" id="categoryAvatar">
                                        <div class="button-wrapper">
                                            <label for="uploadCategory" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload Category photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="uploadCategory" name="category_image"
                                                    class="form-control" accept="image/jpeg, image/png, image/gif" hidden>
                                            </label>
                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2MB</p>
                                        </div>
                                    </div>
                                </div>
                                @error('category_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Category ID</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-id-card"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="id" value="{{ $category->id }}" aria-label="01"
                                        aria-describedby="basic-icon-default-fullname2" readonly>
                                </div>
                                @error('id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Category Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="category_name" value="{{ $category->category_name }}" aria-label="Dry Fruits"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                                @error('category_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


    <script>
 function setupImagePreview(inputId, imgId) {
        document.getElementById(inputId).addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                // Max size check (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('File is too large! Maximum size allowed is 2MB.');
                    this.value = ''; 
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(imgId).src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Activate the preview logic for both inputs
    setupImagePreview('uploadCategory', 'categoryAvatar');
    setupImagePreview('uploadProduct', 'productAvatar');
    </script>
@endsection
<!-- Content wrapper -->
