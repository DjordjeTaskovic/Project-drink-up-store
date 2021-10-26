<div class="sidebar" data-color="red">
      <div class="logo">
        <a class="simple-text logo-normal">Admin Panel</a>
      </div>

      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            @foreach ($sidebar as $s)
            <li>
            <a href="{{ route($s['id'])}}">
                  <i class="now-ui-icons {{$s['icon']}}"></i>
                  <p>{{$s['name']}}</p>
                </a>
              </li>
            @endforeach
        </ul>
      </div>
    </div>
