<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
            <!-- <ul>
                <li><a class="active"  href="{{ url('admin/users/') }}">Users</a></li>
                <li><a  href="{{ url('admin/products/') }}">Product</a></li>
                <li><a href="index_3.html">Category</a></li>
            </ul> -->
        </li>

        <li class>
            <a href="{{ url('admin/users/') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/2.svg') }}" alt>
                </div>
                <span>Users</span>
            </a>
        </li>

        <li class>
            <a href= "{{ url('admin/products/') }}" aria-expanded="false">
                <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Products</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/categories/') }}" aria-expanded="false">
                <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/8.svg') }}" alt>
                </div>
                <span>categories</span>
            </a>
        </li>

    </ul>
</nav>
