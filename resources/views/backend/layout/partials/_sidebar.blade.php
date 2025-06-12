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
                        <li class="submenu-item {{ Request::is('backend/pasien*') ? 'active' : '' }}">
                            <a href="{{ route('backend.pasien.index') }}" class="submenu-link">
                                <i class="bi bi-person-fill"></i> Pasien
                            </a>
                        </li>
                        <li class="submenu-item {{ Request::is('backend/tindakan*') ? 'active' : '' }}">
                            <a href="{{ route('backend.tindakan.index') }}" class="submenu-link">
                                <i class="bi bi-file-medical-fill"></i> Tindakan
                            </a>
                        </li>
                        <li class="submenu-item {{ Request::is('backend/obat*') ? 'active' : '' }}">
                            <a href="{{ route('backend.obat.index') }}" class="submenu-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule-fill" viewBox="0 0 16 16">
                                    <path d="M5.5 9a2 2 0 1 1 0 2 2 2 0 0 1 0-2Zm7 0a2 2 0 1 1 0 2 2 2 0 0 1 0-2Z"/>
                                </svg> Obat
                            </a>
                        </li>
                        <li class="submenu-item {{ Request::is('backend/kunjungan*') ? 'active' : '' }}">
                            <a href="{{ route('backend.kunjungan.index') }}" class="submenu-link">
                                <i class="bi bi-file-medical-fill"></i> Kunjungan
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
                    <a href="{{ route('backend.user.index') }}" class="sidebar-link">
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
