@extends('layouts.frontend')

@section('content')
@if($tag->products->count() > 0)
    <ul class="products">
        @foreach($tag->products as $product)
            <!-- Item -->
            <li class="one-third nopad">
                <figure>
                    <a href="{{ route('product.single', ['slug' => $product->slug ]) }}" title="product"><img src="{{ $product->image }}" alt="{{ $product->name }}" /></a>
                    <div class="over">
                        <a href="{{ route('product.single', ['slug' => $product->slug ]) }}" class="expand">+</a>
                    </div>
                </figure>
                <div class="container">
                    <h2><a href="{{ route('product.single', ['slug' => $product->slug ]) }}" title="product">{{ $product->name }}</a></h2>
                    <div class="price">${{ $product->price }}</div>
                    <form action="{{ route('cart.add') }}" method="post">
                        {{ csrf_field() }}
                        
                        <input type="number" id="price" name="qty" value="1" style="color: black;" />
                        <input type="hidden" name="pdt_id" value="{{ $product->id }}">
                        <button title="Add to cart" class="button b-lightgrey">Add to cart</button>
                    </form>
                    <div class="wishlist"><a href="#" title="Add to wishlist"><i class="fa fa-heart-o fa-2x"></i></a></div>
                </div>
            </li>
            <!-- Item -->   
        @endforeach()              
    </ul>
@else
<div class="col-lg-12" style="background-color: red; text-align: center;">
    <br>
    <h2 class="text-center">
        No Post Found
    </h2>
</div>
@endif

@endsection