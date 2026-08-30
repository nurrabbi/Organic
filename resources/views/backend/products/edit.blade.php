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
                    {{-- <h5 class="card-header">Default</h5> --}}

                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="{{ $product->details->image }}" alt="product-avatar" class="block rounded"
                                            height="200" width="200" id="productAvatar">
                                        <div class="button-wrapper">
                                            <label for="uploadProduct" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload Product Image</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="uploadProduct" name="product_image"
                                                    class="form-control" accept="image/jpeg, image/png, image/gif" hidden>
                                            </label>
                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2MB</p>
                                        </div>
                                    </div>
                                </div>
                                @error('product_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Product ID</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-id-card"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-fullname"
                                        name="id" value="{{ $product->id }}" aria-label="01"
                                        aria-describedby="basic-icon-default-fullname2" readonly>
                                </div>
                                @error('id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Barcode</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-id-card"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="barcode" value="{{ $product->barcode }}" aria-label="01"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                                @error('barcode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="name" value="{{ $product->name }}" aria-label="Nur Hossain"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Category ID</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-id-card"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-fullname"
                                        name="category_id" value="{{ $product->category_id }}" aria-label="01"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Supplier ID</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone" class="input-group-text"><i
                                            class="bx bx-id-card"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-supplier"
                                        name="supplier_id" value="{{ $product->supplier_id }}" aria-label="01"
                                        aria-describedby="basic-icon-default-phone">
                                </div>
                                @error('supplier_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Selling Price</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-dollar" class="input-group-text"><i
                                            class="bx bx-dollar"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-email"
                                        name="selling_price" value="{{ $product->selling_price }}" aria-label="100"
                                        aria-describedby="basic-icon-default-dollar">
                                </div>
                                @error('selling_price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Unit Cost</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-doller" class="input-group-text"><i
                                            class="bx bx-dollar"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-doller"
                                        name="unit_cost" value="{{ $product->details->unit_cost }}" aria-label="10000"
                                        aria-describedby="basic-icon-default-fullname2">
                                </div>
                                @error('unit_cost')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Stock Quantity</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-box" class="input-group-text"><i
                                            class="bx bx-coin"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-box"
                                        name="stock_quantity" value="{{ $product->details->stock_quantity }}" aria-label="10"
                                        aria-describedby="basic-icon-default-box">
                                </div>
                                @error('stock_quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Expiry Date</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-calendar" class="input-group-text"><i
                                            class="bx bx-calendar"></i></span>
                                    <input class="form-control" type="date" name="expiry_date"
                                        value="{{ $product->details->expiry_date }}" id="html5-date-input"
                                        aria-describedby="basic-icon-default-calendar" />
                                </div>
                                @error('expiry_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
<!-- Content wrapper -->
