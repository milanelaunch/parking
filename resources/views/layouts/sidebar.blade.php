<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="" class="simple-text logo-normal">
            NAthi-kevu
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ request()->is('*dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('*User*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.User.index') }}">
                    <i class="material-icons">person_outline</i>
                    <p>User</p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('*Vendor*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.Vendor.index') }}">
                    <i class="material-icons">person_outline</i>
                    <p>Vendor</p>
                </a>
            </li>
            {{-- <li class="nav-item {{ request()->is('*Category*') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="material-icons">category</i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('*Sub-category*') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="material-icons">category</i>
                    <p>Sub Category</p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('*Discount*') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="material-icons">local_offer</i>
                    <p>Discount</p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('*Product*') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="material-icons">production_quantity_limits</i>
                    <p>Product</p>
                </a>
            </li>
            <li class="nav-item {{ request()->is('*Seller*') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <i class="material-icons">account_box</i>
                    <p>Seller</p>
                </a>
            </li> --}}


            <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>
