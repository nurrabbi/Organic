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
                        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card mb-4">
                                <label for="formFile" class="form-label m-3">Current Image</label>
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="{{ $user->userDetail?->image ?? '' }}" alt="user-avatar"
                                            class="d-block rounded" height="200" width="200" id="productAvatar">
                                        <div class="button-wrapper">
                                            <label for="uploadProduct" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload Category photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="uploadCategory" name="product_image"
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
                                <label class="form-label" for="basic-icon-default-fullname">User ID</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-id-card"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="id" value="{{ $user->id }}" aria-label="01"
                                        aria-describedby="basic-icon-default-fullname2" readonly>
                                </div>
                                @error('id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">User Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="name" value="{{ $user->name }}" aria-label="Nur Hossain"
                                        aria-describedby="basic-icon-default-fullname2" readonly>
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Contact No.</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-phone" name="phone"
                                        value="{{ $user->phone }}" aria-label="01"
                                        aria-describedby="basic-icon-default-phone" readonly>
                                </div>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">User Type</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-type" class="input-group-text"><i
                                            class="bx bx-add-to-queue"></i></span>
                                    <select class="form-select" id="exampleFormControlSelect1" name="role"
                                        aria-label="Default select example" aria-describedby="basic-icon-default-role2">
                                        <option value="" disabled selected>Select a role</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                                            Admin</option>
                                        <option value="staff" {{ $user->role == 'staff' ? 'selected' : '' }}>
                                            Staff</option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                        </option>
                                        <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>
                                            Customer</option>
                                    </select>
                                </div>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">User Email</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-email" class="input-group-text"><i
                                            class="bx bx-envelope"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-email"
                                        name="email" value="{{ $user->email }}" aria-label="sample@example.nai"
                                        aria-describedby="basic-icon-default-email" readonly>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Date of Birth</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-calendar" class="input-group-text"><i
                                            class="bx bx-calendar"></i></span>
                                    <input class="form-control" type="date"
                                        value="{{ $user->userDetail?->dob ?? '' }}" id="html5-date-input"
                                        name="dob"readonly />
                                </div>
                                @error('dob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Total Purchase</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-doller" class="input-group-text"><i
                                            class="bx bx-dollar"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-doller"
                                        name="total" value="{{ $user->userDetail?->total_purchase ?? '' }}"
                                        aria-label="10000" aria-describedby="basic-icon-default-fullname2" readonly>
                                </div>
                                @error('total')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Coins</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-coin" class="input-group-text"><i
                                            class="bx bx-coin"></i></span>
                                    <input type="number" class="form-control" id="basic-icon-default-fullname"
                                        name="coins" value="{{ $user->userDetail?->coins ?? '' }}" aria-label="10"
                                        aria-describedby="basic-icon-default-fullname2" readonly>
                                </div>
                                @error('coins')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">User Address</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i
                                            class="bx bx-comment"></i></span>
                                    <textarea id="basic-icon-default-message" class="form-control" name="address" aria-label="User Address"
                                        aria-describedby="basic-icon-default-message2" readonly>{{ $user->userDetail->address ?? 'N/A' }}</textarea>
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
<!-- Content wrapper -->
