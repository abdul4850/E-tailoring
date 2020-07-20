@extends('layouts.master')
@section('content')
<section class="checkout-section spad">
    <div class="container">
        <form method="POST" action="/order" class="checkout-form">
            @csrf

            <div class="row">
                <div class="col-lg-6">
                    <h4>Billing Details</h4>
                    <div class="row">

                        <div class="col-lg-6">
                            <label for="fir">First Name<span>*</span></label>
                            <input type="text" name="FirstName" id="fir" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Last Name<span>*</span></label>
                            <input type="text"  name="LastName" id="last" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Country<span>*</span></label>
                            <input type="text" name="Country" id="cun" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Street Address<span>*</span></label>
                            <input type="text" id="street" name="StreetAddress" class="street-first" required>
                            <input type="text">
                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Postcode / ZIP (optional)</label>
                            <input type="text" name="Postcode" id="zip">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Town / City<span>*</span></label>
                            <input type="text" name="City" id="town" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="text" name="EmailAddress" id="email" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" name="Phone" id="phone" required>
                        </div>
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Create an account?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">

                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                @foreach ($products as $product)
                                <li class="fw-normal">{{$product['item']['title']}}<span>{{$product['price']}}</span></li>
                                @endforeach
                                <li class="subtotal">Subtotal <span> {{$totalPrice}}</span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Cheque Payment
                                        <input type="checkbox" id="pc-check">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Paypal
                                        <input type="checkbox" id="pc-paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
