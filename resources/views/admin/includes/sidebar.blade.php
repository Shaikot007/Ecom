<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div class="admin-info">
                <div class="font-strong">Admin panel</div>
                <small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Category</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('category.add')}}">Add category</a>
                    </li>
                    <li>
                        <a href="{{route('category.manage')}}">Manage category</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Sub category</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('subcategory.add')}}">Add sub category</a>
                    </li>
                    <li>
                        <a href="{{route('subcategory.manage')}}">Manage sub category</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-envira"></i>
                    <span class="nav-label">Brand</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('brand.add')}}">Add brand</a>
                    </li>
                    <li>
                        <a href="{{route('brand.manage')}}">Manage brand</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-balance-scale"></i>
                    <span class="nav-label">Unit</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('unit.add')}}">Add unit</a>
                    </li>
                    <li>
                        <a href="{{route('unit.manage')}}">Manage unit</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-basket"></i>
                    <span class="nav-label">Product</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('product.add')}}">Add product</a>
                    </li>
                    <li>
                        <a href="{{route('product.manage')}}">Manage product</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-shopping-cart"></i>
                    <span class="nav-label">Order</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('order.manage')}}">Manage order</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">User</span><i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('user.add')}}">Add user</a>
                    </li>
                    <li>
                        <a href="{{route('user.manage')}}">Manage user</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
