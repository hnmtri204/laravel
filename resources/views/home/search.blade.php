@extends ('layout')

@section('title','Search')

@section('content')
<!-- show-search  -->
<div class="container" id="product-cards">
    <h2>Related products:</h2>
    <div class="row" style="margin-top: 30px;" id="products-search">
        <!-- show-search -->
        @foreach($products as $product)
        <div class="col-md-3 py-3">
            <a class="card" style="text-decoration: none" href="{{ route('products.show', $product->id) }}">
                <img src="{{ url($product -> img)}}" alt="">
                <div class="card-body">
                    <h3 class="text-center">{{ $product->name}}</h3>
                    <p class="text-center">{{ $product->description}}</p>
                    <div class="star text-center">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h2>{{ $product->price}}<span>
                            <li class="fa-solid fa-cart-shopping"></li>
                        </span></h2>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- end show-search   -->
@endsection