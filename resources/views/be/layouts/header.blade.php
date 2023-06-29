<!-- Topbar Navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

<!-- {{-- @if ( Route::currentRouteName() == "product.index" )
  <form action="{{ route('product.search') }}" method="post">
    @csrf
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group" style="width: 500px;">
          <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">

          <button type="submit" class="btn btn-primary btn-rounded btn-icon">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
              <span class="input-group-text" id="search">
                <i class="icon-search" style="color: #fff; font-size: 1.1rem;"></i>
              </span>
            </div>
          </button>
        </div>
      </li>
    </ul>
    </form>
    @endif --}}
    @switch(Route::currentRouteName())
    @case("product.index")
    <form action="{{ route('product.search') }}" method="post">
      @csrf
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group" style="width: 500px;">
            <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">

            <button type="submit" class="btn btn-primary btn-rounded btn-icon">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                <span class="input-group-text" id="search">
                  <i class="icon-search" style="color: #fff; font-size: 1.1rem;"></i>
                </span>
              </div>
            </button>
          </div>
        </li>
      </ul>
    </form>
    @break
    @case("user.index")
    <form action="{{ route('user.search') }}" method="post">
      @csrf
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group" style="width: 500px;">
            <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">

            <button type="submit" class="btn btn-primary btn-rounded btn-icon">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                <span class="input-group-text" id="search">
                  <i class="icon-search" style="color: #fff; font-size: 1.1rem;"></i>
                </span>
              </div>
            </button>
          </div>
        </li>
      </ul>
    </form>
    @break
    @case("order.index")
    <form action="{{ route('order.search') }}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      @csrf
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    @break
    @default @break
    @endswitch -->
      {{--
      <!-- Topbar Search -->
      <form action="{{ route('order.search') }}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      @csrf
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
      --}}
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
            <img class="img-profile rounded-circle" src="{{ asset ('be/img/undraw_profile.svg')}}">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('admin.getSetting') }}">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('admin.logout') }}" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->