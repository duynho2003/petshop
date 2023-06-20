<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pet Shop Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Category Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categorymenu" aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Category</span>
        </a>
        <div id="categorymenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('category.index') }}">Show List Category</a>
                <a class="collapse-item" href="{{ route('category.create') }}">Create Category</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Products Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productsmenu" aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Product</span>
        </a>
        <div id="productsmenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('product.index') }}">Show List Product</a>
                <a class="collapse-item" href="{{ route('product.create') }}">Create Product</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Type Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#typemenu" aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Type</span>
        </a>
        <div id="typemenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('type.index') }}">Show List Type</a>
                <a class="collapse-item" href="{{ route('type.create') }}">Create Type</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - User -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>

    <!-- Nav Item - Order -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-fw fa-reorder"></i>
            <span>Order</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->