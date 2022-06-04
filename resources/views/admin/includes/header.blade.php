<!-- START HEADER-->
<header class="header bg-success">
    <div class="page-brand">
        <a class="link" href="{{route('dashboard')}}">
            <span class="brand">
                <img src="{{ asset('/images/ecom_logo/ecom-logo.png') }}" alt="logo" style="margin-top: 10px" height="50" width="100"/>
            </span>
            <span class="brand-mini">
                <img src="{{ asset('/images/ecom_logo/favicon.png') }}" alt="logo" height="25" width="25"/>
            </span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <?php $user = \Illuminate\Support\Facades\Auth::user(); ?>
                    {{$user->name}}<i class="fa fa-angle-down m-l-5"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" style="font-size: smaller" href="#">
                        Manage account
                    </a>
                    <a class="dropdown-item" style="color: black" href="{{url('/')}}">
                        <i class="fa fa-home"></i> Home
                    </a>
                    <a class="dropdown-item" style="color: black" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form action="{{route('logout')}}" method="post" id="logoutForm">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->
