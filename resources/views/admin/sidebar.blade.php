<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo-mini" href="{{ url('redirect') }}"><img width="250" src="images/logo.png" alt="#" /></a>
   
  </div>
  <ul class="nav">
    
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('redirect') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/delivered-products') }}">
        <span class="menu-icon">
          <i class="mdi mdi-cart"></i>
        </span>
        <span class="menu-title">Pending Deliveries</span>
      </a>
    </li>

    
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/delivered') }}">
        <span class="menu-icon">
          <i class="mdi mdi-home"></i>
        </span>
        <span class="menu-title">Finished Deliveries</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/view_product') }}">Add Products</a></li>
          <li class="nav-item">
             <a class="nav-link" href="{{ url('/show_product') }}">Show Products</a>
            </li>
        </ul>
        
      </div>
    </li>
    
   
  </ul>
</nav>