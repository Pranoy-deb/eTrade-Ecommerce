<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
        <a href="{{ route('backend.dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>
        <!-- Categories -->
    <li class="menu-item {{ request()->routeIs('backend.category.*') ? 'active' : '' }}">
        <a href="{{ route('backend.category.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bx-category-alt"></i>
            <div data-i18n="Analytics">Categories</div>
        </a>
    </li>
    <!-- Products -->
    <li class="menu-item {{ request()->routeIs('backend.product.*') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Products</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('backend.product.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add Product</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('backend.product.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">All Products</div>
                </a>
            </li>
    
        </ul>
    </li>
    <!-- Message -->
    <li class="menu-item {{ request()->routeIs('backend.message') ? 'active' : '' }}">
            <a href="{{route('backend.message')}}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Analytics">Message</div>
            </a>
    </li>
    <!-- Customers -->
    <li class="menu-item {{ request()->routeIs('backend.customers') ? 'active' : '' }}">
            <a href="{{route('backend.customers')}}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Analytics">Customers</div>
            </a>
    </li>