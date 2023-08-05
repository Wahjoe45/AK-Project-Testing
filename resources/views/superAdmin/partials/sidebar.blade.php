<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo justify-content-center mb-4 mt-3">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo"><img src="assets/img/logo123.png" width="80px" alt=""></span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bi bi-chevron-left bi-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ 'superAdminDashboard' == request()->path() ? 'active' : '' }}">
            <a href="superAdminDashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ 'pelamarSuperAdmin' == request()->path() ? 'active' : '' }} {{ 'nonKandidatPelamarSuperAdmin' == request()->path() ? 'active' : '' }}">
            <a href="pelamarSuperAdmin" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user'></i>
                <div data-i18n="Analytics">Data Pelamar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-buildings'></i>
                <div data-i18n="Analytics">Perusahaan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bx-money-withdraw'></i>
                <div data-i18n="Analytics">Finance</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bx-block'></i>
                <div data-i18n="Analytics">Akun Freeze</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bx-podcast'></i>
                <div data-i18n="Analytics">Tips Kerja</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-calendar-event'></i>
                <div data-i18n="Analytics">Event</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bx-cog'></i>
                <div data-i18n="Analytics">Pengaturan</div>
            </a>
        </li>
    </ul>
</aside>