@if($action == "log")
    <section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9  mb-5 text-center ">
                    <h2 class="mb-0 bread">Login</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 ">
                    <div class="login_form_inner">
                        <form class="row login_form" method="POST" action="{{route('login')}}" id="contactForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <label class="label" >Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                       placeholder="Email" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Email'">
                                <p class="text-error"></p>
                            </div>

                            <div class="col-md-12 form-group">
                                <label class="label" >Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Password'">
                                <p class="text-error"></p>

                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" id="login_btn" class="btn btn-primary w-100">Log In</button>
                                @if(session()->has('errorMessage'))
                                <div class="alert alert-danger">
                                    {{ session()->get('errorMessage') }}
                                </div>
                            @endif
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
@endif
@if($action=='reg')
    <section class="hero-wrap hero-wrap-2"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9  mb-5 text-center ">

                    <h2 class="mb-0 bread">Register</h2>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 ">
                    <div class="login_form_inner">
                        <form class="row login_form" method="POST" action="{{ route("register") }}" id="contactForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="fname" name="fname"
                                       placeholder="First name" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'First name'">
                                     @error('fname')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                    @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="lname" name="lname"
                                       placeholder="Last name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last name'">
                                       @error('lname')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email"
                                       placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                       @error('email')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror

                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="address" name="address"
                                       placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adress'">
                                       @error('address')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror

                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                       @error('password')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror

                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                                       placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                                       @error('confirmpassword')
                                       <div class="text-danger">
                                           {{$message}}
                                       </div>
                                   @enderror

                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" id="reg_btn" class="btn btn-primary w-100">Register</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
