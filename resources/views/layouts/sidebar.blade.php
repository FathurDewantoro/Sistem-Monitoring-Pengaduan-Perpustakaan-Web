<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        {{-- <div class="sidebar-brand-icon">
            <i class="fas fa-female"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3 mt-3">Sistem Pengaduan Perpustakaan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaduan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item  {{ request()->is('pengaduan') ? 'active' : '' }}">
        <a class="nav-link" href="/pengaduan">
            <i class="fas fa-exclamation-circle"></i>
            <span>Data Pengaduan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Akun
    </div>
    <li class="nav-item  {{ request()->is('user*') || request()->is('cariUser*') ? 'active' : '' }}">
        <a class="nav-link" href="/user">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>
    <li class="nav-item  {{ request()->is('admin*') || request()->is('cariadmin*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin">
            <i class="fas fa-shield-alt"></i>
            <span>Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
<!--    <div class="text-center d-none d-md-inline">-->
<!--        <button class="rounded-circle border-0" id="sidebarToggle"></button>-->
<!--    </div>-->
</ul>
<!-- End of Sidebar -->
