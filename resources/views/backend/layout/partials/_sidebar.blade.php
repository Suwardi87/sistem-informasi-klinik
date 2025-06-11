{{-- sidebar --}}
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('backend.main') }}">
                        {{-- <img src="{{ asset('assets/backend') }}/images/logo/logo.png" alt="Logo" srcset=""> --}}
                        <span class="d-none d-lg-inline-block">Sistem Informasi Klinik</span>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                {{-- <li class="sidebar-title">Menu</li>

                <li class="sidebar-item ">
                    <a href="{{ route('backend.main') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub {{ request()->routeIs('backend.orders.*') || request()->routeIs('backend.order-detail.*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Orders</span>
                    </a>
                    <ul class="submenu {{ request()->routeIs('backend.orders.*') || request()->routeIs('backend.order-detail.*') ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('backend.orders.*') ? 'active' : '' }}">
                            <a href="{{ route('backend.order.index') }}">Order List</a>
                        </li>
                        <li class="submenu-item {{ request()->routeIs('backend.order-details.*') ? 'active' : '' }}">
                            <a href="{{ route('backend.order-detail.index') }}">Order Detail</a>
                        </li>
                    </ul>
                </li>

                @if(Auth::user()->role == 'admin')
                <li class="sidebar-item {{ Request::is('admin/events*') ? 'active' : '' }}">
                    <a href="{{ route('admin.events.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Events</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/episodes*') ? 'active' : '' }}">
                    <a href="{{ route('admin.episodes.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Episodes</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/categories*') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/tags*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tags.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Tags</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('backend.tikets.*') ? 'active' : '' }}">
                    <a href="{{ route('backend.tikets.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Tikets</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('backend.taxes.*') ? 'active' : '' }}">
                    <a href="{{ route('backend.taxes.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Taxes</span>
                    </a>
                </li> --}}

                <li class="sidebar-title">Account</li>

                {{-- <li class="sidebar-item  ">
                    <a href="table-datatable.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>User</span>
                    </a>
                </li> --}}
                {{-- @endif --}}

                <li class="sidebar-item  ">
                    <a href="table-datatable.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
