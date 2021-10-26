@extends('layouts.layout')

@section('title') Products @endsection
@section('description') Browse all of our products. @endsection
@section('keywords') shop, online, products @endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
        <div class="overlay">
        </div>
        <div class="container pb-5">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 mb-5 text-center">
                    <h2 class="bread p-4">Our Store</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 mb-5 text-center">
                    <h2>Select Your Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <form method="GET" action = "{{ route("store") }}">
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Product Types</h3>
                            <ul class="p-0">
                            @foreach($categories as $cat)
                                <li> <input type="checkbox" name="catids[]" class="categories"
                                   @if ($checkedcategories != null)
                                   {{ in_array($cat->id, $checkedcategories) ? "checked" : "" }}
                                   @endif
                                    id="{{ $cat->id }}" value="{{$cat->id}}"/>
                                               {{ $cat->category_name }}
                                       <span class="ti-angle-double-right"></span>
                                   </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Search by Price</h3>
                            <ul class="p-0">
                                @foreach ($sortname as $s)
                                <li><input type="radio" id="{{$s['id']}}" value="{{$s['id']}}"
                                           name="cenasort" class="btnPrice"/>
                                           Price: {{$s['name']}}
                                </li>
                                @endforeach
                              </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Search by Name</h3>
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" id="search" name="pretraga"
                                    class="form-control" placeholder="Search..."/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <button type="submit" class="btn" id="button_search"
                            style="background-color: red ;color:white">
                                 <p><i class="ti-search"></i>Use Filters..</p>
                            </button>
                    </div>
                </form>
                </div>
                <div class="col-md-9 container" id="products">
                   <div class="row">
                    @foreach($items as $product)
                            @include('deoproduct.product')
                    @endforeach
                   </div>
                    <div class="row justify-content-center">
                        {{$items->links('vendor.pagination.bootstrap-4')}}
                        {{$items->links('vendor.pagination.simple-bootstrap-4')}}
                      </div>
                </div>

            </div>

        </div>

    </section>
@endsection

