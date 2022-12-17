<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li> <a href="{{ route('dashboard') }}"><span>Dashboards</span></a></li>

                <li class="dropdown">
                    <a href="javascript: void(0);" role="button" class="has-arrow waves-effect " data-bs-toggle="dropdown">
                        <i class="bx bx-layout"></i>
                        <span>Category</span>
                    </a>
                    <ul class="dropdown-menu" aria-expanded="false">
                        <li><a class="dropdown-item text-info h1 font-weight-bold" href="{{ route('categories.index') }}">Category</a></li>
                        <li><a class="dropdown-item text-info h1 font-weight-bold" href="layouts-light-sidebar.html">Manage Category</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript: void(0);" role="button" class="has-arrow waves-effect " data-bs-toggle="dropdown">
                        <i class="bx bx-layout"></i>
                        <span>Brand</span>
                    </a>
                    <ul class="dropdown-menu" aria-expanded="false">
                        <li><a class="dropdown-item text-info h1 font-weight-bold" href="layouts-horizontal.html">Brand</a></li>
                        <li><a class="dropdown-item text-info h1 font-weight-bold" href="layouts-light-sidebar.html">Manage Brand</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript: void(0);" role="button" class="has-arrow waves-effect " data-bs-toggle="dropdown">
                        <i class="bx bx-layout"></i>
                        <span>Product</span>
                    </a>
                    <ul class="dropdown-menu" aria-expanded="false">
                        <li><a class="dropdown-item text-info h1 font-weight-bold" href="layouts-horizontal.html">Product</a></li>
                        <li><a class="dropdown-item text-info h1 font-weight-bold" href="layouts-light-sidebar.html">Manage Product</a></li>
                    </ul>
                </li>

{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
{{--                        <i class="bx bx-store"></i>--}}
{{--                        <span>Brand</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="ecommerce-products.html">Brand</a></li>--}}
{{--                        <li><a href="ecommerce-product-detail.html">Manage Brand</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
