@extends('layouts.layout')

@section('title') Edit-Product-{{ $product->name }} @endsection
@section('description') Edit a product. @endsection
@section('keywords') shop, online, edit @endsection

@section('content')
<div class="container mb-3 min-vh-100">
    <div class="mt-4">
        <div class="contactForm">
            <h3 >Edit a product</h3>
            @include('pages.products.forma', ["action" => "products.update"])
        </div>
    </div>
</div>
@endsection
