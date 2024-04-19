@extends('layout')

@section('title', @trans('front.products.index.title'))

@section('content')

<!-- products -->
<div class="container" id="product-cards">
    <h1 class="text-center">PRODUCTS</h1>
    <p>Sản phẩm nổi bật:</p>
    <div class="row" style="margin-top: 20px;" id="product-hot">
        <!--  products cards hot -->
        @foreach($productList as $product)
        <div class="col-md-3 py-3">
            <a class="card" style="text-decoration: none" href="{{ route('products.show', $product->id) }}">
                <!-- <img src="../images/a1.png" alt=""> -->
                <img src="{{ $product -> img}}" alt="">
                <div class="card-body">
                    <h3 class="text-center">{{ $product -> name }}</h3>
                    <!-- <h3 class="text-center">ABC</h3> -->
                    <!-- <p class="text-center">Sản phẩm bán chạy nhất.</p> -->
                    <p class="text-center">{{ $product -> description }}</p>
                    <div class="star text-center">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <!-- <h2>Price:100$<span> -->
                    <h2>{{ $product -> price }}<span>
                            <li class="fa-solid fa-cart-shopping"></li>
                        </span></h2>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- end list products cart   -->

<!-- other cards -->
<div class="container" id="other-cards">
    <div class="row">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="../images/c1.png" alt="">
                <div class="card-img-overlay">
                    <h3>Best Laptop</h3>
                    <h5>Latest Collection</h5>
                    <p>Up To 50% Off</p>
                    <button id="shopnow">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="../images/c2.png" alt="">
                <div class="card-img-overlay">
                    <h3>Best Headphone</h3>
                    <h5>Latest Collection</h5>
                    <p>Up To 50% Off</p>
                    <button id="shopnow">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- other cards -->

<!-- banner -->
<section class="banner">
    <div class="content">
        <h1> <span>Electronic Gadget</span>
            <br>
            Up To <span id="span2">50%</span> Off
        </h1>
        <p>Uy tín-Chất lượng-Tạo nên thương hiệu.
            <br>Electronic luôn đồng hành cùng bạn.
        </p>
        <div class="btn"><button>Shop Now</button></div>

    </div>
    <div class="img">
        <img src="../images/image1.png" alt="">
    </div>
</section>
<!-- banner -->
<!-- offer -->
<div class="container" id="offer">
    <div class="row">
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Free Shipping</h3>
            <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>Free Returns</h3>
            <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Big choice</h3>
            <p>Of products</p>
        </div>
    </div>
</div>
<!-- offer -->

<!-- newslater -->
<div class="container" id="newslater">
    <h3 class="text-center">Subscribe To The Electronic Shop For Latest upload.</h3>
    <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
    </div>
</div>
<!-- newslater -->

@endsection