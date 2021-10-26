@extends('layouts.layout')

@section('title') Cart @endsection
@section('description') This is customers cart. @endsection
@section('keywords') creator,author,artisan @endsection

@section('content')
    <section class="hero-wrap hero-wrap-2"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9  mb-5 text-center">
                    <h2 class="mb-0 bread">My Cart</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>
                            @if (session('cart'))
                            @foreach (session('cart') as $order => $cart)
                            <?php
                                $total += $cart['price'] * $cart['quantity']?>
                            <tr class="alert" role="alert">
                                <td>
                                    <div>
                                        <span>{{$cart['name']}}</span>
                                    </div>
                                </td>
                                <td>${{$cart['price']}}</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" name="quantity"
                                        class="quantity form-control input-number"
                                        value="{{$cart['quantity']}}">
                                    </div>
                                </td>
                                <td>${{$cart['price'] * $cart['quantity']}}</td>
                                <td>
                                    <a class="btn btn-primary"
                                     href='{{route('delfromcart', ["id" => $cart['id']])}}'>
                                        <span aria-hidden="true"><i class="fa fa-close"></i>Remove</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>Your cart is empty at this momment.</td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap">
                    <p class="text-center"><a
                        class="btn btn-primary py-3 px-4">Total: {{$total}}</a></p>

                    <p class="text-center"><a href="{{route('makeorder')}}" 
                        onclick="return confirm('Are you sure you want to proside with a order?')"
                         class="btn btn-primary py-3 px-4">Make an order</a></p>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="cartalert"></div>
            </div>
        </div>
    </section>

@endsection
