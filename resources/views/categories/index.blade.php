@extends('layout')

@section('title', 'List Category')

@section('content')

<!-- home content -->
<section class="home">
    <div class="content">
        <h1> <span>Electronic Products</span>
            <br>
            Up To <span id="span2">50%</span> Off
        </h1>
        <p>Uy tín - Chất lượng - Tạo nên thương hiệu.
            <br>Electronic luôn đồng hành cùng bạn.
        </p>
        <div class="btn"><button>Shop Now</button></div>

    </div>
    <div class="img">
        <img src="../images/background.png" alt="">
    </div>
</section>
<!-- home content -->


<!-- product cards -->
<div class="container" id="product-cards">
    <h1 class="text-center">Categories</h1>
    <div class="row" style="margin-top: 30px;" id="category-list">
        @foreach($categories as $category)
        <div class="col-md-3 py-3">
            <a class="card" style="text-decoration: none" href="{{ route('categories.show', $category->id) }}">
                <img src="{{ $category->image }}" alt="">
                <div class="card-body">
                    <h3 class="text-center">{{ $category -> name }}</h3>
                    <p class="text-center">{{ $category -> description }}</p>
                    <div class="star text-center">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h2>{{ $category -> price }}<span>
                            <li class="fa-solid fa-cart-shopping"></li>
                        </span></h2>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- product cards -->




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