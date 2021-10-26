
<script src="{{ asset('public/assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/owl.carusel.min.js') }}"></script>
<script src="{{ asset('public/assets/js/main.js') }}"></script>

@if(session()->has('cart_error'))
    <script> alert('{{session()->get('cart_error')}}');</script>
 @endif

@yield('javascript')

