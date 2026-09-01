@extends('layouts.organic_main')

@section('content')
    <!-- hero section -->
    <section class="page-hero">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-kicker mb-2">Organic e-commerce</div>
                    <h1 class="display-4 mb-3">My Account</h1>
                    <p class="mb-0 text-secondary">Home / My Account</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0"><a href="shop.html"
                        class="btn btn-primary rounded-pill px-4">Browse Shop</a></div>
            </div>
        </div>
    </section>
    <!-- /hero section -->

    <!-- account dashboard -->
    <section class="page-content account-dashboard">
        <div class="container-lg">
            <div class="account-welcome soft-card mb-5">
                <div class="row align-items-center g-4">
                    <div class="col-auto">
                        <div class="account-avatar-wrap">
                            <img src="{{ $user->userDetail->image ?? '' }}" alt="Profile" class="account-avatar"
                                id="account-avatar">
                        </div>
                    </div>
                    <div class="col">
                        <div class="section-kicker mb-1">Welcome back</div>
                        <h2 class="mb-1">{{ $user->name }}</h2>
                        <p class="text-secondary mb-0">Here is a quick overview of your Organic account.</p>
                    </div>
                    <div class="col-12 col-lg-auto">
                        <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                            <a href="{{ asset('frontend') }}/order-tracking.html" class="btn btn-primary rounded-pill">
                                Track Orders</a>
                            <a href="{{ asset('frontend') }}/messaging.html" class="btn btn-outline-dark rounded-pill"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Open Messages">
                                <svg height="20" width="20">
                                    <use xlink:href="#message-square"></use>
                                </svg>
                            </a>

                            <a href="{{ route('logout') }}" id="logout-btn" class="btn btn-outline-dark rounded-pill"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Log Out">
                                <svg height="20" width="20">
                                    <use xlink:href="#log-out"></use>
                                </svg>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 1: Profile Details -->
            <section class="mb-5" id="profile-details">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success') }} </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <div class="section-kicker">Profile Section</div>
                        <h2 class="h3 mb-0">Profile Details</h2>
                    </div>
                    <button type="button" id="edit-profile-btn" class="btn btn-outline-dark rounded-pill"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile">
                        <svg height="20" width="20">
                            <use xlink:href="#edit"></use>
                        </svg>
                    </button>
                </div>
                <form id="profile-form" action="{{ route('home.update', $user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="soft-card h-100 text-center">
                                <!-- Profile Image -->
                                <div class="account-profile-image mx-auto">
                                    <img src="{{ $user->userDetail->image ?? '' }}" alt="{{ $user->name }}"
                                        class="w-100 h-100" id="profile-image">
                                </div>
                                <!-- Image Upload -->
                                <div id="profile-image-edit" class="d-none mt-3">
                                    <label for="profile-image-input" class="btn btn-outline-dark rounded-pill px-3">
                                        Choose Image
                                    </label>
                                    <input type="file" id="profile-image-input" name="image" class="d-none"
                                        accept="image/*">
                                    <small class="text-secondary d-block mt-2">
                                        JPG, PNG or WEBP
                                    </small>
                                </div>
                                <h4 class="mt-3 mb-1">{{ $user->name }}</h4>
                                <p class="mb-0 text-black-50">                            
                                    <strong>{{ ucfirst($user->role) }}</strong>
                                </p>
                                <span class="status-pill mt-3">Active Member</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="soft-card h-100">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <small class="text-secondary d-block mb-1">Full Name</small>
                                        <div class="profile-value fw-semibold" data-field="full-name">
                                            {{ $user->name }}
                                        </div>
                                        <input type="text" class="form-control profile-input d-none"
                                            id="profile-full-name" name="name" value="{{ $user->name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <small class="text-secondary d-block mb-1">Email Address</small>
                                        <div class="profile-value fw-semibold" data-field="email">
                                            {{ $user->email }}
                                        </div>
                                        <input type="email" class="form-control profile-input d-none"
                                            id="profile-email" name="email" value="{{ $user->email }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <small class="text-secondary d-block mb-1">Contact Number</small>
                                        <div class="profile-value fw-semibold" data-field="contact">
                                            +880 {{ $user->phone }}
                                        </div>
                                        <input type="tel" class="form-control profile-input d-none"
                                            id="profile-contact" name="phone" value=" {{ $user->phone }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <small class="text-secondary d-block mb-1">Date of Birth</small>
                                        <div class="profile-value fw-semibold" data-field="dob">
                                            {{ $user->userDetail->dob ?? 'N/A' }}
                                        </div>
                                        <input type="date" class="form-control profile-input d-none" id="profile-dob"
                                            name="dob" value="{{ $user->userDetail?->dob }}" required>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-secondary d-block mb-1">Address</small>
                                        <div class="profile-value fw-semibold" data-field="address">
                                            {{ $user->userDetail->address ?? 'N/A' }}
                                        </div>
                                        <textarea class="form-control profile-input d-none" id="profile-address" name="address" rows="3" required>{{ $user->userDetail->address ?? 'N/A' }}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end gap-2 mt-4">
                                    <button type="submit" id="save-profile-btn"
                                        class="btn btn-primary rounded-pill d-none">
                                        Save Changes
                                    </button>
                                    <button type="button" id="cancel-profile-btn"
                                        class="btn btn-outline-secondary rounded-pill d-none">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

            <!-- Section 2: Orders -->
            <section class="mb-5" id="order-details">
                <div class="mb-3">
                    <div class="section-kicker">Section 2</div>
                    <h2 class="h3 mb-0">Order Details</h2>
                </div>
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="soft-card account-stat-card h-100">
                            <strong>Available Coins</strong>
                            <div class="account-stat-value">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                </svg>
                                {{ $user->userDetail?->coins }}
                            </div>
                            <p class="mb-0 text-black-50"><small>Organic Coins</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="soft-card account-stat-card h-100">
                            <strong>Total Orders</strong>
                            <div class="account-stat-value">12</div>
                            <p class="mb-0 text-black-50"><small>Orders placed</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="soft-card account-stat-card h-100">
                            <strong>Lifetime Spend</strong>
                            <div class="account-stat-value">$ {{ $user->userDetail?->total_purchase }}</div>
                            <p class="mb-0 text-black-50"><small>Across all orders</small></p>
                        </div>
                    </div>
                </div>
                <div class="soft-card">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                        <h4 class="mb-0">All Orders History</h4>
                        <a href="order-tracking.html" class="btn btn-soft rounded-pill btn-sm">Track an Order</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle account-orders-table mb-0">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#ORG-10245</strong>
                                        <div class="small text-secondary">Organic groceries</div>
                                    </td>
                                    <td>Aug 18, 2026</td>
                                    <td>$84.00</td>
                                    <td><span class="status-pill">Out for Delivery</span></td>
                                    <td class="text-end"><a href="order-tracking.html"
                                            class="btn btn-sm btn-outline-dark rounded-pill">Track</a></td>
                                </tr>
                                <tr>
                                    <td><strong>#ORG-10210</strong>
                                        <div class="small text-secondary">Fresh produce</div>
                                    </td>
                                    <td>Aug 11, 2026</td>
                                    <td>$56.50</td>
                                    <td><span class="status-pill">Delivered</span></td>
                                    <td class="text-end"><button type="button"
                                            class="btn btn-sm btn-outline-dark rounded-pill">View</button></td>
                                </tr>
                                <tr>
                                    <td><strong>#ORG-10176</strong>
                                        <div class="small text-secondary">Breakfast bundle</div>
                                    </td>
                                    <td>Aug 02, 2026</td>
                                    <td>$72.00</td>
                                    <td><span class="status-pill">Delivered</span></td>
                                    <td class="text-end"><button type="button"
                                            class="btn btn-sm btn-outline-dark rounded-pill">View</button></td>
                                </tr>
                                <tr>
                                    <td><strong>#ORG-10124</strong>
                                        <div class="small text-secondary">Organic pantry</div>
                                    </td>
                                    <td>Jul 21, 2026</td>
                                    <td>$91.25</td>
                                    <td><span class="status-pill">Delivered</span></td>
                                    <td class="text-end"><button type="button"
                                            class="btn btn-sm btn-outline-dark rounded-pill">View</button></td>
                                </tr>
                                <tr>
                                    <td><strong>#ORG-10098</strong>
                                        <div class="small text-secondary">Fruit &amp; vegetables</div>
                                    </td>
                                    <td>Jul 08, 2026</td>
                                    <td>$48.75</td>
                                    <td><span class="status-pill">Cancelled</span></td>
                                    <td class="text-end"><button type="button"
                                            class="btn btn-sm btn-outline-dark rounded-pill">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Section 3: Feedback & Reviews -->
            <section class="mb-3" id="feedback-reviews">
                <div class="mb-3">
                    <div class="section-kicker">Section 3</div>
                    <h2 class="h3 mb-0">Feedbacks</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="soft-card h-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mb-0">My Feedbacks</h4><a href="feedback.html"
                                    class="btn btn-soft rounded-pill btn-sm">Give Feedback</a>
                            </div>
                            <div class="feedback-item pb-3 mb-3 border-bottom">
                                <div class="d-flex justify-content-between gap-3"><strong>Shopping
                                        experience</strong><small class="text-secondary">Aug 10, 2026</small></div>
                                <p class="mb-0 mt-2 text-secondary">The delivery was smooth and the packaging was
                                    excellent.</p>
                            </div>
                            <div class="feedback-item">
                                <div class="d-flex justify-content-between gap-3"><strong>Website
                                        feedback</strong><small class="text-secondary">Jul 19, 2026</small></div>
                                <p class="mb-0 mt-2 text-secondary">I would love to see more local organic products in
                                    the shop.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="soft-card h-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mb-0">Product Reviews</h4><a href="product-review.html"
                                    class="btn btn-soft rounded-pill btn-sm">Write Review</a>
                            </div>
                            <div class="feedback-item pb-3 mb-3 border-bottom">
                                <div class="d-flex justify-content-between gap-3">
                                    <div><strong>Organic Honey</strong>
                                        <div class="review-stars mt-1">★★★★★</div>
                                    </div><small class="text-secondary">Aug 05, 2026</small>
                                </div>
                                <p class="mb-0 mt-2 text-secondary">Pure taste and great packaging. I would definitely
                                    order again.</p>
                            </div>
                            <div class="feedback-item">
                                <div class="d-flex justify-content-between gap-3">
                                    <div><strong>Fresh Apples</strong>
                                        <div class="review-stars mt-1">★★★★☆</div>
                                    </div><small class="text-secondary">Jul 14, 2026</small>
                                </div>
                                <p class="mb-0 mt-2 text-secondary">Very fresh and arrived in good condition.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- /account dashboard -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {


            const editBtn = document.getElementById('edit-profile-btn');
            const saveBtn = document.getElementById('save-profile-btn');
            const cancelBtn = document.getElementById('cancel-profile-btn');
            const form = document.getElementById('profile-form');

            const profileImage = document.getElementById('profile-image');
            const profileImageInput = document.getElementById('profile-image-input');
            const profileImageEdit = document.getElementById('profile-image-edit');
            // const accountAvatar = document.getElementById('account-avatar');

            const values = {
                fullName: document.querySelector('[data-field="full-name"]'),
                email: document.querySelector('[data-field="email"]'),
                contact: document.querySelector('[data-field="contact"]'),
                dob: document.querySelector('[data-field="dob"]'),
                address: document.querySelector('[data-field="address"]')
            };

            const inputs = {
                fullName: document.getElementById('profile-full-name'),
                email: document.getElementById('profile-email'),
                contact: document.getElementById('profile-contact'),
                dob: document.getElementById('profile-dob'),
                address: document.getElementById('profile-address')
            };

            // Keep the original image so Cancel can restore it
            const originalImageSrc = profileImage.src;


            // Temporary preview URL
            let previewUrl = null;


            // ----------------------------------------
            // ENTER EDIT MODE
            // ----------------------------------------

            function enterEditMode() {

                Object.values(values).forEach(function(element) {
                    element.classList.add('d-none');
                });

                Object.values(inputs).forEach(function(element) {
                    element.classList.remove('d-none');
                });

                // Enable profile image editing
                profileImageEdit.classList.remove('d-none');

                editBtn.classList.add('d-none');
                saveBtn.classList.remove('d-none');
                cancelBtn.classList.remove('d-none');
            }


            // ----------------------------------------
            // EXIT EDIT MODE
            // ----------------------------------------

            function exitEditMode() {

                Object.values(values).forEach(function(element) {
                    element.classList.remove('d-none');
                });

                Object.values(inputs).forEach(function(element) {
                    element.classList.add('d-none');
                });

                // Hide profile image editing
                profileImageEdit.classList.add('d-none');

                editBtn.classList.remove('d-none');
                saveBtn.classList.add('d-none');
                cancelBtn.classList.add('d-none');
            }


            // ----------------------------------------
            // EDIT BUTTON
            // ----------------------------------------

            editBtn.addEventListener('click', function() {
                enterEditMode();
            });


            // ----------------------------------------
            // IMAGE PREVIEW
            // ----------------------------------------

            profileImageInput.addEventListener('change', function() {

                const file = this.files[0];

                if (!file) return;

                // Make sure it is actually an image
                if (!file.type.startsWith('image/')) {
                    alert('Please select a valid image file.');
                    this.value = '';
                    return;
                }

                // Release previous preview URL
                if (previewUrl) {
                    URL.revokeObjectURL(previewUrl);
                }

                previewUrl = URL.createObjectURL(file);

                // Instant preview
                profileImage.src = previewUrl;
                // if (accountAvatar) {
                //     accountAvatar.src = previewUrl;
                // }

            });


            // ----------------------------------------
            // CANCEL
            // ----------------------------------------

            cancelBtn.addEventListener('click', function() {

                // Restore original text values
                inputs.fullName.value = values.fullName.textContent.trim();
                inputs.email.value = values.email.textContent.trim();
                inputs.contact.value = values.contact.textContent.trim();
                inputs.address.value = values.address.textContent.trim();

                // Restore original date
                const currentDate = inputs.dob.value;

                if (currentDate) {
                    inputs.dob.value = currentDate;
                }

                // Restore original image
                profileImage.src = originalImageSrc;
                // if (accountAvatar) {
                //     accountAvatar.src = originalImageSrc;
                // }

                // Clear selected image
                profileImageInput.value = '';

                if (previewUrl) {
                    URL.revokeObjectURL(previewUrl);
                    previewUrl = null;
                }

                exitEditMode();
            });

            // // ----------------------------------------
            // // SAVE
            // // ----------------------------------------

            // form.addEventListener('submit', function(event) {
            //     event.preventDefault();
            //     // Update displayed profile information
            //     values.fullName.textContent = inputs.fullName.value.trim();
            //     values.email.textContent = inputs.email.value.trim();
            //     values.contact.textContent = inputs.contact.value.trim();
            //     values.address.textContent = inputs.address.value.trim();
            //     // Format date of birth
            //     if (inputs.dob.value) {
            //         const date = new Date(
            //             inputs.dob.value + 'T00:00:00'
            //         );

            //         values.dob.textContent = date.toLocaleDateString(
            //             'en-GB', {
            //                 day: 'numeric',
            //                 month: 'long',
            //                 year: 'numeric'
            //             }
            //         );
            //     }
            //     // Keep the selected image as the new profile image
            //     if (profileImageInput.files.length > 0) {
            //         if (previewUrl) {
            //             previewUrl = null;
            //         }
            //     }
            //     exitEditMode();
            // });
        });
    </script>
@endsection
