@extends('layouts.layout')

@section('title') Home @endsection
@section('description') The main page of the shop. @endsection
@section('keywords') shop, online, home, best, sellers @endsection

@section('content')
    <div class="hero-wrap">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
                        <p>
                            <a href="store" class="btn btn-white btn-outline-white py-2 px-4">Shop Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center">
                    <span class="subheading">Our Delightful offerings</span>
                    <h2>Tastefully Yours</h2>
                </div>
            </div>
           <div class="row">
            @foreach($products as $product)
                @include('deoproduct.product')
            @endforeach
            </div>
           <div class="row justify-content-center">
             {{$products->links('vendor.pagination.simple-bootstrap-4')}}
           </div>
           <br>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="store" class="btn btn-primary d-block">View All Products
                        <span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Online Support 24/7</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100">
                        <div class="icon">
                            <span class="flaticon-cashback"></span>
                        </div>
                        <div class="text">
                            <h2>Money Back Guarantee</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100">
                        <div class="icon">
                            <span class="flaticon-free-delivery"></span>
                        </div>
                        <div class="text">
                            <h2>Free Shipping &amp; Return</h2>
                            <p>A small river named Duden flows by their place
                                and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
        <div class="row">
        <div class="col-md-12 pb-4 heading-section text-center">
                    <span class="subheading">About</span>
                    <h2>Something about us</h2>
                </div>
        </div>
        <div class="row" id="aboutus">
        <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center"
        style="background-image: url({{asset('public/assets/img/blog/image-1.jpg')}});">
        </div>
        <div class="col-md-6 wrap-about pl-md-5 py-5">
        <div class="heading-section">
        <span class="subheading">Since 1905</span>
        <h2 class="mb-4">Desire Meets A New Taste</h2>
        <p>Sometimes, you're in the mood to do one thing and one thing only: drink. You could either stick with your usual, or you could ditch your regular and indulge in some of the best tasting liquor within the United States. But whatever you do, try your best to avoid these very bad, bad boys.</p>
        <p class="year">
        <strong class="number" data-number="115">115</strong>
        <span>Years of Experience In Business</span>
        </p>
        </div>
        </div>
        </div>
        </div>
</section>
    <!--section break  -->
    <section class="ftco-section" id="blogs">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                    @foreach($blogs as $b)
                <div class="col-lg-6 d-flex align-items-stretch  fadeInUp ">
                    <div class="blog-entry d-flex">
                        <a href="#" class="block-20 img"
                           style="background-image:  @foreach($b->images as $i)
                               url({{ ('public/assets/img/blog/'. $i->url) }})@endforeach;">
                        </a>
                        <div class="text p-4 bg-light">
                            <div class="meta">
                                <p><span class="fa fa-calendar"></span> {{$b->date}}</p>
                            </div>
                            <h3 class="heading mb-3"><a href="#">{{$b->name}}</a></h3>
                            <p>{{$b->info}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- petlja blog -->

            </div>
        </div>
    </section>
@endsection
