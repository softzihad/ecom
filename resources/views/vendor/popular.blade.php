@extends('layouts.frontend')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
{{ $customer_id }}
<ul class="products">
    @foreach($categoriesSec1->products()->orderBy('views', 'desc')->take(9)->get() as $product)
        <!-- Item -->
        <li class="one-third nopad">
            <figure style="margin: 0px;">
                <a href="{{ route('product.single', ['slug' => $product->slug ]) }}" title="{{ $product->name }}"><img src="{{ $product->image }}" alt="{{ $product->name }}" /></a>
                <div class="over">
                    <a href="{{ route('product.single', ['slug' => $product->slug ]) }}" class="expand" style="text-decoration: none;">+</a>
                </div>
            </figure>
            <div class="container">
                <h2><a href="{{ route('product.single', ['slug' => $product->slug ]) }}" title="{{ $product->name }}" style="text-decoration: none;">{{ $product->name }}</a></h2>
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
@endsection