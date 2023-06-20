<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ route('admin.dashboard') }}"><img src="{{ asset('assetBE/images/logo.svg') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img src="{{ asset('assetBE/images/logo-mini.svg') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>

        
        

        {{-- @if ( Route::currentRouteName() == "product.index" )
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
            <form action="{{ route('order.search') }}" method="post">
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
            @default @break
        @endswitch
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="" alt=""> 
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('admin.getSetting') }}">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ route('admin.logout') }}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
    </div>
</nav>