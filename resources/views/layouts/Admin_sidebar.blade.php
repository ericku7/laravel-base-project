<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas nav-primary" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img data-name="{{Auth::user()->fname}} {{Auth::user()->lname}}" class="profile">
                    <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{Auth::user()->fname}} {{Auth::user()->lname}}
                    </p>
                    <p class="designation">
                        @if(Auth::user()->is('admin')) Administrator @else(Auth::user()->is('customer')) Customer @endif
                    </p>
                </div>
                <center>
                    <a href="logout" class="settings-icon">
                        <span class="ti ti-power-off"></span>
                    </a>
                </center>


            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./dashboard-index">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="ti-truck menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./customers">
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Customers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-home menu-icon"></i>
                <span class="menu-title">Stores</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-social-dropbox menu-icon"></i>
                <span class="menu-title">Inventory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown auto collapsed" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Products</span>
                <span class="float-right text-muted pd-left-80">
                  <i class="fa fa-angle-left text"></i>
                  <i class="fa fa-angle-down text-active"></i>
                </span>
            </a>
            <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Categories</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown auto collapsed" data-toggle="collapse" href="#purchases" aria-expanded="false" aria-controls="purchases">
                <i class="icon-docs menu-icon"></i>
                <span class="menu-title">Purchases</span>
                <span class="float-right text-muted pd-left-80">
                  <i class="fa fa-angle-left text"></i>
                  <i class="fa fa-angle-down text-active"></i>
                </span>
            </a>
            <div class="collapse" id="purchases">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">All Purchases</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown auto collapsed" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-settings menu-icon"></i>
                <span class="menu-title">Settings</span>
                <span class="float-right text-muted pd-left-80">
                  <i class="fa fa-angle-left text"></i>
                  <i class="fa fa-angle-down text-active"></i>
                </span>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Payment Details</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="">Configuration</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>