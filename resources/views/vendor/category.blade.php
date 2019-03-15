@extends('layouts.frontend')

@section('content')
@if($category->products->count() > 0)
    <ul class="products">
        @foreach($category->products as $product)
            <!-- Item -->
            <li class="one-third nopad">
                <figure style="margin: 0px;">
                    <a href="{{ route('product.single', ['slug' => $product->slug ]) }}" title="product"><img src="{{ $product->image }}" alt="{{ $product->name }}" /></a>
                    <div class="over">
                        <a href="{{ route('product.single', ['slug' => $product->slug ]) }}" class="expand" style="text-decoration: none;">+</a>
                    </div>
                </figure>
                <div class="container">
                    <h2><a href="{{ route('product.single', ['slug' => $product->slug ]) }}" title="product" style="text-decoration: none;">{{ $product->name }}</a></h2>
                    <div class="price">${{ $product->price }}</div>

                    <!--form action="{{ route('cart.add') }}" method="post">
                        {{ csrf_field() }}
                        
                        <input type="number" id="price" name="qty" value="1" style="color: black;" />
                        <input type="hidden" name="pdt_id" value="{{ $product->id }}">
                        <button title="Add to cart" class="button b-lightgrey">Add to cart</button>
                    </form-->
                    <a href="{{ route('cart.rapid.add', ['id' => $product->id ]) }}" title="Add to cart" class="button b-lightgrey" style="text-decoration: none;">Add to cart</a>
                    
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
        No Product Found
    </h2>
</div>
@endif

@endsection