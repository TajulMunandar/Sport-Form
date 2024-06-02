<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand">
        <a class="navbar-brand fs-5 fw-bold" href="/">
            ZIKATLETIK
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- Dashboard --}}
        <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="fa-duotone fa-grid-2 me-3"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        @if (auth()->user()->status === 'WASIT')
        @else
            <li class="menu-item {{ Request::is('form/*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="fa-duotone fa-scroll fa-sm me-3"></i>
                    <div data-i18n="Layouts">Instrumen</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('form/lari*') ? 'active' : '' }}">
                        <a href="/form/lari" class="menu-link">
                            <div data-i18n="Analytics">Lari</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('form/lempar*') ? 'active' : '' }}">
                        <a href="/form/lempar" class="menu-link">
                            <div data-i18n="data surat">Lempar</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('form/lompat*') ? 'active' : '' }}">
                        <a href="/form/lompat" class="menu-link">
                            <div data-i18n="data surat">Lompat</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('form/jalan*') ? 'active' : '' }}">
                        <a href="/form/jalan" class="menu-link">
                            <div data-i18n="data surat">Jalan</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <li class="menu-item {{ Request::is('lomba*') ? 'active' : '' }}">
            <a href="/lomba" class="menu-link">
                <i class="fa-duotone fa-calendar fa-sm me-3"></i>
                <div data-i18n="Analytics">Acara Lomba</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('buku*') ? 'active' : '' }}">
            <a href="/buku" class="menu-link">
                <i class="fa-duotone fa-book fa-sm me-3"></i>
                <div data-i18n="Analytics">Buku</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('wasit*') ? 'active' : '' }}">
            <a href="/wasit" class="menu-link">
                <i class="fa-duotone fa-users fa-sm me-3"></i>
                <div data-i18n="Analytics">Riwayat Tugas</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('penilaian*') ? 'active' : '' }}">
            <a href="/penilaian" class="menu-link">
                <i class="fa-duotone fa-book fa-sm me-3"></i>
                <div data-i18n="Analytics">Penilaian</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('peraturan*') ? 'active' : '' }}">
            <a href="/peraturan" class="menu-link">
                <i class="fa-duotone fa-circle-nodes fa-sm me-3"></i>
                <div data-i18n="Analytics">Peraturan Atletik</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/jabatan*') ? 'active' : '' }}">
            <a href="https://www.colorblindnesstest.org/color-blind-test/" class="menu-link" target="_blank">
                <i class="fa-duotone fa-eye fa-sm me-3"></i>
                <div data-i18n="Analytics">Tes Buta Warna</div>
            </a>
        </li>

        @if (auth()->user()->role == 1)
            <li class="menu-item {{ Request::is('user*') ? 'active' : '' }}">
                <a href="/user" class="menu-link">
                    <i class="fa-duotone fa-user fa-sm me-3"></i>
                    <div data-i18n="Analytics">User</div>
                </a>
            </li>
        @endif

    </ul>
</aside>
