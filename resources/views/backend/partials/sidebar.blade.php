<div id="sideNavs" class="sideBar_wrapper sideBar_close">
    <!-- sideBar close -->
    <button id="sideBarClose" type="button" class="sideBar_close_btn float-right">x</button>
    <!-- sideBar nav-->
    <nav class="sideBar_nav">
        <!-- sideBar logo -->
        <a class="logo d-block text-center" href="index.html">A-MART</a>
        <!-- sideBar content -->
        <ul class="navbar-nav">
            <!-- sideBar item -->
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i
                        class="fa fa-fw fa-user-circle text-success"></i>
                    <span class="mx-2">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.slider.index') ? 'active' : '' }}" href="{{ route('admin.slider.index') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">Slider</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.category.index') ? 'active' : '' }}" href="{{ route('admin.category.index') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">Category</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.product.index') ? 'active' : '' }}" href="{{ route('admin.product.index') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">Product</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.order.index') ? 'active' : '' }}" href="{{ route('admin.order.index') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">Order</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.Home Page.index') ? 'active' : '' }}" href="{{ route('home') }}"><i
                        class="fa fa-fw fa-rocket text-warning"></i>
                    <span class="mx-2">Home Page</span></a>
            </li>
        </ul>
    </nav>
</div>
<i class="fa-solid fa-sliders"></i>
