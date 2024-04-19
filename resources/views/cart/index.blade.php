@extends('layout')

@section('content')
<main class="page" onclick="">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2>Shopping Cart</h2>
                <p>Electronic luôn đặt chất lượng của sản phẩm và trải nghiệm của người dùng lên hàng đầu, cạnh đó cũng tự hào
                    vì luôn dành được sự ưu ái từ khách hàng.</p>
            </div>
            <div class="content">
                <div class="row d-flex" id="cart-list">
                    <!-- render -->
                    <div class="col-md-8 col-lg-10">
                        <div class="items">
                            @foreach($orders as $order)
                            <div class="product">
                                <div class="row">
                                    <input type="hidden" id="productId" value="" />
                                    <div class="col-md-3">
                                        <img class="img-fluid mx-auto d-block image" src="{{ $order -> img}}" alt=" ">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5 product-name">
                                                    <div class="product-name">
                                                        <h4>{{ $order -> name}}</h4>
                                                        <div class="product-info">
                                                            <div>Description: <span class="value">{{ $order -> description}}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 quantity">
                                                    <label for="quantity">Quantity: </label>
                                                    <input type="number" value="{{ $order -> quantity}}" max="10" min="1" class="form-control quantity-input">
                                                </div>
                                                <div class="col-md-2 price" style="margin-top: 0px;">
                                                    <h5>Price:
                                                        <span>${{ $order -> price}}</span>
                                                    </h5>
                                                </div>
                                                <div class="col-md-2 ">
                                                    <button type="button" class="btn btn-danger">
                                                        <i data-lucide="trash-2"></i> Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- bill -->
                    <div class="col-md-4 col-lg-5">
                        <div class="summary">
                            <h3>Bill</h3>
                            <div class="summary-item"><span class="text">Subtotal</span><span class="price">0$</span>
                            </div>
                            <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                            <div class="summary-item"><span class="text">Total</span><span class="price">0$</span></div>
                            <div class="d-flex justify-content-end">
                                <a href="./checkout.html"><button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- end bill -->
                </div>
            </div>
        </div>
    </section>
</main>
@endsection