<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          @if (Auth::user()->usertype == 0)
          <li class="nav-item">
            <a href="{{ route('showvendor') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Vendor
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{ route('show') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Products
              </p>
            </a>
          </li>
        </ul>
      </nav>