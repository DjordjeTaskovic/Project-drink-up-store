@extends('layouts.layout')

@section('title') Insert-Product @endsection
@section('description') Create new product. @endsection
@section('keywords') shop, online, create @endsection

@section('content')
<div class="container mb-3 min-vh-100">
    <div class="mt-4">
        <div class="contactForm">
            <h3 >Add a new product</h3>
            @include('pages.products.forma', ["action" => "products.store"])
        </div>
    </div>
</div>
@endsection
