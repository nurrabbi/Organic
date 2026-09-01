@extends('layouts.organic_main')
@section('content')
    <section class="page-hero">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-kicker mb-2">Organic e-commerce</div>
                    <h1 class="display-4 mb-3">Single Product</h1>
                    <p class="mb-0 text-secondary">Home / Shop / Single Product</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0"><a href="shop.html"
                        class="btn btn-primary rounded-pill px-4">Browse Shop</a></div>
            </div>
        </div>
    </section>
    <section class="page-content">
        <div class="container-lg">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <img src="{{ $product->details->image }}" class="img-fluid rounded-3 w-100"
                                alt="Organic product">
                        </div>
                        <div class="col-4">
                            <img src="images/product-thumbnail-1.jpg" class="img-fluid rounded-2 border"
                                alt="Product thumbnail">
                        </div>
                        <div class="col-4">
                            <img src="images/product-thumbnail-2.jpg" class="img-fluid rounded-2 border"
                                alt="Product thumbnail">
                        </div>
                        <div class="col-4">
                            <img src="images/product-thumbnail-3.jpg" class="img-fluid rounded-2 border"
                                alt="Product thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('carts.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="section-kicker">Fresh produce</div>
                        <h2 class="display-5 mt-2">{{ $product->name }}</h2>
                        <div class="d-flex gap-2 align-items-center mb-3"><span class="rating">★★★★★</span><a
                                href="product-review.html">(42 reviews)</a></div>
                        <div class="d-flex align-items-center gap-3 mb-4"><del class="text-secondary fs-5">$24.00</del><span
                                class="fs-2 fw-bold text-dark">${{ $product->selling_price }}</span>
                            <span class="badge text-bg-danger">10% OFF</span>
                        </div>
                        <p class="fs-5 text-secondary">Soft, wholesome and made for everyday breakfast and lunch moments.
                        </p>
                        <ul class="list-unstyled lh-lg">
                            <li>✓ Farm-inspired quality</li>
                            <li>✓ Freshly packed</li>
                            <li>✓ Fast delivery</li>
                        </ul>
                        <div class="d-flex flex-wrap gap-3 align-items-center my-4">
                            <div class="d-flex border rounded-1" data-qty>
                                <button class="btn btn-soft rounded-0" data-minus type="button">
                                    -
                                </button>
                                <input class="form-control border-0 text-center" type="number" name="quantity" style="width:70px" value="1">
                                <button class="btn btn-soft rounded-0" data-plus type="button">
                                    +
                                </button>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill px-4">Add to Cart</button>
                            <a href="product-review.html" class="btn btn-outline-dark rounded-pill px-4">Write a Review</a>
                        </div>
                        <div class="border-top pt-4">
                            <div class="row g-3">
                                <div class="col-6"><small class="text-secondary">SKU</small>
                                    <div class="fw-semibold">ORG-BRD-001</div>
                                </div>
                                <div class="col-6"><small class="text-secondary">Category</small>
                                    <div class="fw-semibold">Bakery & Bread</div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#desc">Description</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#reviews">Reviews</button></li>
                    </ul>
                    <div class="tab-content border border-top-0 p-4">
                        <div class="tab-pane fade show active" id="desc">
                            <p class="mb-0">A clean product-detail presentation using the original Organic template
                                typography, spacing, rating treatment and green palette.</p>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <p>Customers love this product.</p><a href="product-review.html"
                                class="btn btn-primary btn-sm">Leave Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-lg">
            <div class="section-header d-flex justify-content-between mb-4">
                <h2 class="section-title">Related Products</h2><a href="shop.html" class="btn btn-primary">View
                    All</a>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                <div class="col" data-product-card>
                    <div class="product-item">
                        <figure><a href="single-product.html"><img src="images/product-thumb-1.png"
                                    alt="Whole Wheat Sandwich Bread" class="tab-image"></a></figure>
                        <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                            <div><span class="rating">★★★★★</span> <span class="rating-count">(21)</span></div>
                            <div class="d-flex justify-content-center align-items-center gap-2"><del
                                    class="text-secondary">$24.00</del><span class="text-dark fw-semibold">$18.00</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1">
                                    <div class="col-4"><input type="number"
                                            class="form-control border-dark-subtle input-number quantity" value="1"
                                            min="1"></div>
                                    <div class="col-8"><a href="cart.html"
                                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-product-card>
                    <div class="product-item">
                        <figure><a href="single-product.html"><img src="images/product-thumb-2.png"
                                    alt="Organic Greek Yogurt" class="tab-image"></a></figure>
                        <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">Organic Greek Yogurt</h3>
                            <div><span class="rating">★★★★★</span> <span class="rating-count">(22)</span></div>
                            <div class="d-flex justify-content-center align-items-center gap-2"><del
                                    class="text-secondary">$24.00</del><span class="text-dark fw-semibold">$16.00</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1">
                                    <div class="col-4"><input type="number"
                                            class="form-control border-dark-subtle input-number quantity" value="1"
                                            min="1"></div>
                                    <div class="col-8"><a href="cart.html"
                                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-product-card>
                    <div class="product-item">
                        <figure><a href="single-product.html"><img src="images/product-thumb-3.png" alt="Fresh Avocado"
                                    class="tab-image"></a></figure>
                        <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">Fresh Avocado</h3>
                            <div><span class="rating">★★★★★</span> <span class="rating-count">(23)</span></div>
                            <div class="d-flex justify-content-center align-items-center gap-2"><del
                                    class="text-secondary">$24.00</del><span class="text-dark fw-semibold">$12.00</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1">
                                    <div class="col-4"><input type="number"
                                            class="form-control border-dark-subtle input-number quantity" value="1"
                                            min="1"></div>
                                    <div class="col-8"><a href="cart.html"
                                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-product-card>
                    <div class="product-item">
                        <figure><a href="single-product.html"><img src="images/product-thumb-4.png"
                                    alt="Honeycrisp Apple" class="tab-image"></a></figure>
                        <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">Honeycrisp Apple</h3>
                            <div><span class="rating">★★★★★</span> <span class="rating-count">(24)</span></div>
                            <div class="d-flex justify-content-center align-items-center gap-2"><del
                                    class="text-secondary">$24.00</del><span class="text-dark fw-semibold">$22.00</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1">
                                    <div class="col-4"><input type="number"
                                            class="form-control border-dark-subtle input-number quantity" value="1"
                                            min="1"></div>
                                    <div class="col-8"><a href="cart.html"
                                            class="btn btn-primary rounded-1 p-2 fs-7 btn-cart w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
