{{-- sidebar --}}
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('backend.main') }}">
                        {{-- <img src="{{ asset('assets/backend/images/logo/logo.png') }}" alt="Logo"> --}}
                        <span class="d-none d-lg-inline-block fw-bold">Sistem Informasi Klinik</span>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x bi-middle"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::is('backend') ? 'active' : '' }}">
                    <a href="{{ route('backend.main') }}" class="sidebar-link">
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub ">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-folder-fill"></i>
                        <span>Master</span>
                    </a>
                    <ul class="submenu">
                                        <li class="sidebar-item has-sub {{ Request::is('backend/kabupaten*') || Request::is('backend/provinsi*') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Wilayah</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item {{ Request::is('backend/kabupaten*') ? 'active' : '' }}">
                            <a href="{{ route('backend.kabupaten.index') }}" class="submenu-link">
                                <i class="bi bi-map-fill"></i> Kabupaten
                            </a>
                        </li>
                        <li class="submenu-item {{ Request::is('backend/provinsi*') ? 'active' : '' }}">
                            <a href="{{ route('backend.provinsi.index') }}" class="submenu-link">
                                <i class="bi bi-map-fill"></i> Provinsi
                            </a>
                        </li>
                    </ul>
                </li>

                        <li class="submenu-item {{ Request::is('backend/pegawai*') ? 'active' : '' }}">
                            <a href="{{ route('backend.pegawai.index') }}" class="submenu-link">
                                <i class="bi bi-person-fill"></i> Pegawai
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="submenu-link">
                                <i class="bi bi-file-medical-fill"></i> Tindakan
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="submenu-link">
                                <i class="bi bi-capsule-fill"></i> Obat
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-bar-graph-fill"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <li class="sidebar-title">Account</li>

                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-person-fill"></i>
                        <span>User</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="sidebar-link btn w-100 text-start">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
