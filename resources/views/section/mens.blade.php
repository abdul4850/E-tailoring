@extends('layouts.master')
@section('content')

<section class="product-shop spad">
    <div class="container">
@foreach ($products->chunk(4) as $productChunk)
                    <div class="row">
                        @foreach ($productChunk as $product)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{$product->imagePath}}" alt="">
                                    <div class="sale pp-sale">Sale</div>
                                     <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{route('addtocart',['id'=>$product->id])}}">Add to Cart</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                <div class="catagory-name">{{$product->title}}</div>
                                    <a href="#">
                                        <h5>{{$product->description}}</h5>
                                    </a>
                                    <div class="product-price">
                                        {{$product->price}}
                                        <span>1500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            @endforeach
        </section>
@endsection


