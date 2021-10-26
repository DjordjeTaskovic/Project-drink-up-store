<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo"><a href="#">Drink-Up <span>Store</span></a></h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li><a href="www.twitter.com"><span class="ti-twitter"></span></a></li>
                        <li><a href="www.facebook.com"><span class="ti-facebook"></span></a></li>
                        <li><a href="www.instagram.com"><span class="ti-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#aboutus"><span class="mr-2"></span>About us</a></li>
                        <li><a href="{{route('contact')}}"><span class="mr-2"></span>Contact us</a></li>
                        <li><a><span class="mr-2"></span>Term &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Link</h2>
                    <ul class="list-unstyled">
                        <li><a href="author"><span class="ti-angle-double-right mr-2">
                                </span>Author Page</a></li>
                        <li><a href="{{ route('sitemap') }}">
                                <span class="ti-angle-double-right mr-2">
                                </span>Sitemap</a>
                        </li>
                        <li><a href="{{ route('doc')}}">
                            <span class="ti-angle-double-right mr-2">
                            </span>Documentation</a>
                         </li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon ti-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a><span class="icon ti-mobile"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a><span class="icon ti-notepad pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Join us</h2>
                    <ul class="list-unstyled">
                        @if(!session()->has('user'))
                        <li><a href="{{route('registerhome')}}"><span class="mr-2"></span>Register</a></li>
                        <li><a href="{{route('loginhome')}}"><span class="mr-2"></span>Log In</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0" style="color: rgba(255,255,255,.5);">
                        Copyright ©<script>document.write(new Date().getFullYear());</script></p>
                </div>
            </div>
        </div>
    </div>
</footer>
