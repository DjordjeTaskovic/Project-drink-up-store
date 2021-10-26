@extends('layouts.layout')

@section('title') Contact @endsection
@section('description') Learn more about us or contact us. @endsection
@section('keywords') shop, online, contact, about @endsection

@section('content')
    <section class="hero-wrap hero-wrap-2"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9  mb-5 text-center ">
                    <h2 class="mb-0 bread">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="mb-4 mt-5">
        <div class="container">
            <div class="section-intro pb-60px">
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Send us a message</h3>
                        <form
                        method="POST" id="contactForm" name="contactForm" class="contactForm"
                        action="{{route('contact')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                         @error('email')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                         @error('subject')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Message</label>
                                        <textarea  class="form-control" name="message" id="message"
                                        cols="30" rows="4" placeholder="Message"></textarea>
                                         @error('message')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                        <div class="submitting"></div>
                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="p-md-5 p-4">
                        <div class="ml-40">
                            <p class="sm-head"><i class="fa fa-angle-right" aria-hidden="true"></i>Head Office</p>
                            <p>1600 Amphitheatre ParkwayMountain View,<br> CA94043 US</p>
                            <p class="sm-head">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Phone Number
                            </p>
                            <p>Phone: (+63) 555 1212<br>
                                Mobile: (+63) 555 0100<br>
                                Fax:(+63) 555 0100

                            </p>
                            <p class="sm-head">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Email
                            </p>
                            <p>
                                licqorstore.shop@gmail.com
                            </p>
                        </div>
                    </div>
                </div>


            </div> <!-- /row -->
        </div>

    </section> <!-- /contact -->
@endsection
