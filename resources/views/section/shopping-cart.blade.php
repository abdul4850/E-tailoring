@extends('layouts.master')
@section('content')
@if (Session::has('cart'))
<section class="shopping-cart spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($products as $product)
                                <td class="cart-title first-row">{{$product['item']['title']}}</td>
                                <td class="p-price first-row">{{$product['price']}}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$product['qty']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">{{$product['price']}}</td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span> {{$totalPrice}}</span></li>
                                <li class="cart-total">Total <span> {{$totalPrice}}</span></li>
                            </ul>
                        <a href="{{route('checkout')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong >No Item in Cart</strong>
      </div>
    @endif
    </div>
</section>
@endsection
