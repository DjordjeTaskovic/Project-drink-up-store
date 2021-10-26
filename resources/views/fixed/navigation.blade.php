<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Drink-Up <span>store</span></a>
        <div class="order-lg-last btn-group">

            <?php $cart = session()->get('cart')?>
            <a href="{{ route('cart')}}" class="btn-cart p-2">
                <span class="ti-shopping-cart" aria-hidden="true"></span>
         @if ($cart)
         <span class="badge badge-warning" id="cartcount">{{count($cart) }}</span>
         @endif
            </a>
            @if(!session()->has("user"))
                <a href="{{ route('loginhome')}}" class="btn-sign-in p-2">
                    <span class="ti-user" aria-hidden="true"></span></a>
                <a href="{{ route('registerhome')}}" class="btn-sign-in p-2">
                    <span class="ti-flag" aria-hidden="true"></span></a>
               @endif
                  @if(session()->has("user")&& session()->get('user')->adminrole)
                  <a href="{{ route('admin')}}" class="btn-sign-in p-2" style="color: red">
                    Admin Panel</a>
                  @endif
                @if(session()->has("user"))
                    <a href="{{ route('logout')}}" class="btn-sign-in p-2">
                    <span class="ti-shift-right" aria-hidden="true"></span></a>
                 @endif
        </div>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav">
                        @foreach($menu as $l)
                          <li class="nav-item">
                            <a class="nav-link"
                             href="{{ route($l->link)}}">
                                {{ $l->text }}</a>
                          </li>
                        @endforeach
            </ul>
        </div>
    </div>
</nav>
