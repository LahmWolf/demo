    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Page Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
        <i class="fas fa-user-lock"></i>
          
          <span>Profile</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
        <i class="fas fa-chart-bar"></i>
          <span>Categories</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{route('list_product')}}">
        <i class="fas fa-cube"></i>
          <span>Products</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('list_customer')}}">
        <i class="fas fa-users"></i>
          <span>Customers</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">
        </i><i class="fas fa-gift"></i>
          <span>OrderDetalis</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">
        <i class="fas fa-images"></i>
          <span>Silde</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>