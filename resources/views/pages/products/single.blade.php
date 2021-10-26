@extends('layouts.layout')

@section('title') {{ $product->name }} @endsection
@section('description') See more info about this item. @endsection
@section('keywords') shop, online, home, best, sellers @endsection

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <a href="@foreach($product->images as $i){{ url('public/assets/img/products/' . $i->url)}}@endforeach"
                       class="image-popup prod-img-bg w-50">
                        <img src="@foreach($product->images as $i){{ url('public/assets/img/products/' . $i->url) }}
                        @endforeach" class="img-fluid"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5">
                    <h3>{{$product->product_name}}</h3>
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a class="p-1 bg-info text-white">
                                Brand:@foreach($product->categories()->get() as $b)
                                {{$b->category_name}}
                                @endforeach
                            </a>
                        </li>
                        <br>
                        <li class="navbar-item">
                            <a class="p-1 bg-danger text-white">
                                1#
                                @foreach($product->availabilities()->get() as $b)
                                {{$b->state}}
                                @endforeach
                            </a>
                        </li>
                    </ul>
                    <hr>
                        Price:<p class="price pt-2 text-danger">${{$product->price}}</p>
                    <hr>
                    <h5>Product Informations</h5>
                    <p>{{$product->info}}</p>
                         <a href="{{ route('addtocart', ["product" => $product->id]) }}"
                            class="btn btn-primary py-3 px-5 mr-2">
                            Add to Cart</a>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <a href="{{ route('store') }}"
                        class="btn btn-primary py-3 px-5 mr-2">
                        Check out more products</a>

                </div>
            </div>
        </div>
    </section>
@endsection
