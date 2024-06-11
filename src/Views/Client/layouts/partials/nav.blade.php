<header class="navigation fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1"  href="{{ url('') }}">
          <img class="img-fluid" width="100px" src="{{ asset('assets/client/images/logo.png')}}" alt="Reader | Hugo Personal Blog Template">
        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Directory <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('products') }}">Điện Thoại Di Động</a>

                <a class="dropdown-item" href="{{ url('products') }}">Laptop</a>

                <a class="dropdown-item" href="{{ url('products') }}">Loa</a>

                <a class="dropdown-item" href="{{ url('products') }}">Tai Nghe</a>

                <a class="dropdown-item" href="{{ url('products') }}">Tablet</a>

                <a class="dropdown-item" href="{{ url('products') }}">Camera</a>

                <a class="dropdown-item" href="{{ url('products') }}">Đồng Hồ</a>

                <a class="dropdown-item" href="{{ url('products') }}">Smartwatch</a>

                <a class="dropdown-item" href="{{ url('products') }}">Máy Chiếu</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                About <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ asset('assets/client/about-me.html')}}">About Me</a>

                <a class="dropdown-item" href="{{ asset('assets/client/about-us.html')}}">About Us</a>

              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('products') }}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('logout')}}">Logout</a>
            </li>
          </ul>
        </div>
        </div>

      </nav>
    </div>
  </header>