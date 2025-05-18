<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Menu Dashboard</li>
            <li>
                <a class="" href="{{ url('/dashboard') }}" aria-expanded="false">
                    <i class="fa-solid fa-gauge-high"></i><span class="nav-text">Dashboard</span>
                </a>
                {{-- <ul aria-expanded="false">
                    <li><a href="{{ url('/') }}">Landing Page</a></li> --}}
                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                {{-- </ul> --}}
            </li>
            @auth
                @if (Auth::user()->role == 'Admin Aplikasi')
                    <li class="nav-label">Manajemen Pengguna</li>
                    <li>
                        <a href="{{ url('/dashboard/users') }}" aria-expanded="false">
                            <i class="fa-solid fa-user menu-icon"></i><span class="nav-text">Daftar User</span>
                        </a>
                    </li>
                    <li class="nav-label">Manajemen Fasilitas</li>
                    <li>
                        <a href="{{ url('/dashboard/facilities') }}" aria-expanded="false">
                            <i class="fa-solid fa-toolbox"></i><span class="nav-text">Daftar Fasilitas</span>
                        </a>
                    </li>
                @endif
            @endauth
            @auth
                @if (Auth::user()->role == 'Admin Lapangan' || Auth::user()->role == 'Admin Aplikasi')
                    <li class="nav-label">Menu Lapangan</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-futbol menu-icon"></i><span class="nav-text">Manajemen Lapangan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/dashboard/field-centres') }}">Pusat Olahraga</a></li>
                            <li><a href="{{ url('/dashboard/fields') }}">Lapangan Olahraga</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Manajemen Jadwal</li>
                    <li>
                        <a href="{{ url('/dashboard/field-price-schedules') }}" aria-expanded="false">
                            <i class="fa-solid fa-clock"></i><span class="nav-text">Jadwal & Harga Lapangan</span>
                        </a>
                    </li>
                    <li class="nav-label">Menu Bank & Pembayaran</li>
                    <li>
                        <a href="{{ url('/dashboard/banks') }}" aria-expanded="false">
                            <i class="fa-solid fa-money-check-dollar"></i><span class="nav-text">Bank & Metode
                                Pembayaran</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'Admin Lapangan' ||
                        Auth::user()->role == 'Admin Aplikasi' ||
                        Auth::user()->role == 'Customer')
                @endif
                <li>
                    <a href="{{ url('/dashboard/payments') }}" aria-expanded="false">
                        <i class="fa-solid fa-check-to-slot"></i></i><span class="nav-text">Konfirmasi Pembayaran</span>
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</div>
