<header>
    <div class="container-fluid">
        <div class="row py-3 border-bottom">
            <div
                class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
                <div class="d-flex align-items-center my-3 my-sm-0">
                    <a href="{{ url('/') }}">
                        <img alt="logo" class="img-fluid" src="{{ asset('frontend') }}/images/logo.svg" />
                    </a>
                </div>
                <button aria-controls="offcanvasNavbar" class="navbar-toggler" data-bs-target="#offcanvasNavbar"
                    data-bs-toggle="offcanvas" type="button">
                    <svg height="24" viewbox="0 0 24 24" width="24">
                        <use xlink:href="#menu"></use>
                    </svg>
                </button>
            </div>
            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
                <div class="search-bar row bg-light p-2 rounded-4">
                    <div class="col-md-4 d-none d-md-block">
                        <select class="form-select border-0 bg-transparent">
                            <option>All Categories</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-11 col-md-7">
                        <form action="index.html" class="text-center" id="search-form" method="post">
                            <input class="form-control border-0 bg-transparent"
                                placeholder="Search for more than 20,000 products" type="text" />
                        </form>
                    </div>
                    <div class="col-1">
                        <svg height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <ul
                    class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('/') }}">
                            {{-- <svg height="20" width="20">
                                <use xlink:href="#home"></use>
                            </svg> --}}
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" class="nav-link dropdown-toggle pe-3" data-bs-toggle="dropdown"
                            id="pages" role="button">
                            {{-- <svg height="20" width="20">
                                <use xlink:href="#grid"></use>
                            </svg> --}}
                            Pages
                        </a>

                        <ul aria-labelledby="pages" class="dropdown-menu border-0 p-3 rounded-0 shadow">
                            <li class="active">
                                <a class="dropdown-item" href="{{ route('home.index') }}">My Account</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="about.html">About Us </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="shop.html">Shop </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="single-product.html">Single Product</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cart.html">Cart </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="checkout.html">Checkout </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog.html">Blog </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="single-post.html">Single Post</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="transaction-gateway.html">Transaction Gateway</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="messaging.html">Messaging</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="product-review.html">Product Review</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="feedback.html">Feedback</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="404.html">404 Error </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="register.html">Register</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div
                class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
                <ul class="d-flex justify-content-end list-unstyled m-0">
                    <li>
                        <a class="p-2 mx-1" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Language">
                            <svg height="24" width="24">
                                <use xlink:href="#globe"></use>
                            </svg>
                        </a>
                    </li>
                    @if (Auth::user())
                        <li>
                            <a class="p-2 mx-1" href="{{ route('login') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="{{ Auth::user()->name }}">
                                <svg height="24" width="24">
                                    <use xlink:href="#user"></use>
                                </svg>
                            </a>
                        </li>
                        @if (Auth::user()->role === 'admin')
                            <li>
                                <a class="p-2 mx-1" href="{{ route('admin.dashboard') }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Admin Dashboard">
                                    <svg height="24" width="24">
                                        <use xlink:href="#dashboard-grid"></use>
                                    </svg>
                                </a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="p-2 mx-1" href="{{ route('login') }}" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Login">
                                <svg height="24" width="24">
                                    <use xlink:href="#log-in"></use>
                                </svg>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a class="p-2 mx-1" href="shop.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Wishlist">
                            <svg height="24" width="24">
                                <use xlink:href="#wishlist"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a aria-controls="offcanvasCart" class="p-2 mx-1" data-bs-target="#offcanvasCart"
                            data-bs-toggle="offcanvas" href="#" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Cart">
                            <svg height="26" width="26">
                                <use xlink:href="#cart"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
