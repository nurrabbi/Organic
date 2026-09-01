@extends('layouts.organic_main')

@section('content')
    <section class="page-hero">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-kicker mb-2">Organic e-commerce</div>
                    <h1 class="display-4 mb-3">Your Cart</h1>
                    <p class="mb-0 text-secondary">Home / Cart</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ url('/') }}"  class="btn btn-primary rounded-pill px-4">
                        Browse Shop
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-lg">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $key => $cart)
                                    <tr>
                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ ++$key }}</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 table-product">
                                                <!-- Accessing image via the cart's product relationship -->
                                                <img src="{{ $cart->product->details->image ?? 'placeholder.jpg' }}"
                                                    alt="">
                                                <div>
                                                    <h6 class="mb-1">{{ $cart->product->name }}</h6>
                                                    <small class="text-secondary">Organic grocery</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>${{ $cart->product->selling_price }}</td>
                                        <td>
                                            <div class="input-group" data-qty style="max-width:140px">
                                                <button class="btn btn-soft" data-minus type="button">−</button>
                                                <input type="number" class="form-control text-center"
                                                    value="{{ $cart->quantity }}" min="1">
                                                <button class="btn btn-soft" data-plus type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="fw-semibold">
                                            ${{ $cart->product->selling_price * $cart->quantity }}
                                        </td>
                                        <td>
                                            <form id="delete-form-{{ $cart->id }}"
                                                action="{{ route('carts.destroy', $cart->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-soft btn-sm">
                                                    <i class="bx bx-trash me-1"></i>
                                                    Remove
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="soft-card order-summary">
                        <h3 class="mb-4">Cart totals</h3>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <!-- Formatted values to 2 decimal points for clean currency displays -->
                                <span>Sub-Total</span><strong>${{ number_format($subTotal, 2) }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Delivery Fee</span><strong>${{ number_format($deliveryFee, 2) }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between fs-5">
                                <span>Total</span><strong>${{ number_format($total, 2) }}</strong>
                            </li>
                        </ul>
                        <button href="checkout.html" class="btn btn-primary w-100 rounded-pill py-3">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
