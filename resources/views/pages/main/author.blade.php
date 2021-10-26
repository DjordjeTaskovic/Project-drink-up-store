@extends('layouts.layout')

@section('title') Author @endsection
@section('description') This is creators page. @endsection
@section('keywords') creator,author,artisan @endsection

@section('content')
    <section class="hero-wrap hero-wrap-2"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9  mb-5 text-center ">
                    <h2 class="mb-0 bread">Author</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="author" class="container p-5">
        <div class="row jumblock mt-5 mb-5">
        </div>
        <div id="pageauthor" class="jumblock">
            <div class=" container bg-white">
                <div class="row text-center">
                    <div class="col-md-8">

                        <div class="row">
                            <div id="autext1" class="col-md-12 text-left mb-5 bborder">
                                <blockquote>
                                    <i class="fas fa-quote-left"></i>
                                    Hi my name is Djordje Taskovic.
                                    I am a beginner when it comes to web design but keep my expectations
                                    high and i am looking forward to progress even further . . .
                                </blockquote>
                            </div>
                        </div>
                        <div class="row  d-flex justify-content-around">
                            <div id="autext2" class="col-lg-5 col-sm-12 " >
                                <h4 class="about">About</h4>
                                <div class="heading-underline"></div>

                                <p class="autextpromena">Young and passionate developer,
                                    always happy to learn new things
                                    and evolve.
                                </p>

                            </div>
                            <div id="autext3" class="col-lg-5 col-sm-12">
                                <h4 class="fieldofinterest">Field of Interest</h4>
                                <div class="heading-underline"></div>
                                <p class="autextpromena"> Intrested in 3D modeling, web design,
                                    photography, writing,
                                    drawing and learning new things.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{('public/assets/img/other/profile.jpg')}}" alt="profil">

                            </div>
                            <div id="autext4" class="col-12">

                                <h4 class="more" >More..</h4>
                                <div class="heading-underline"></div>

                                <p class="autextpromena"> In free time I love
                                    reding a good book or comic,
                                    watch series and movies etc.
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
