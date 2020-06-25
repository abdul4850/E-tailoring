<div class="container">
    <div class="inner-header">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="{{ route('home') }}">

                        <img src="img/logo.png" alt="" width="200" height="40">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="advanced-search">
                    <button type="button" class="category-btn">All Categories</button>
                    <div class="input-group">
                        <input type="text" placeholder="What do you need?">
                        <button type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right col-md-3">
                <ul class="nav-right">

                    <li class="cart-icon">
                    <a href="{{route('shopping-cart')}}">
                            <i class="fa fa-shopping-cart" aria-hidden="true">Shopping Cart</i>
                        <span class="badge"> {{Session::has('cart') ? Session::get('cart')->totalQty : '' }} </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="nav-item">
    <div class="container">

        <nav class="nav-menu mobile-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="#">Collection</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('mensproducts') }}">Mens</a></li>
                        <li><a href="{{ route('womensproducts') }}">Women's</a></li>
                        <li><a href="{{ route('kidsproducts') }}">Kid's</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('contact') }}">Contact</a></li>
                @guest
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest


                <li><a href="#">More</a>
                    <ul class="dropdown">
                        <li><a href="{{route('shopping-cart')}}">Shopping Cart</a></li>
                        <li><a href="./faq.html">Faq</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>
</header>
