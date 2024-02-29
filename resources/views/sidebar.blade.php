<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Forms &amp; Tables</li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-hexagon-fill"></i>
                <span>Form Elements</span>
            </a>

            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Input</a>
                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Input Group</a>
                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Select</a>
                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Radio</a>
                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Checkbox</a>
                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Textarea</a>
                </li>
            </ul>
        </li>

        {{-- @if (Auth::user()->role_id == 1)
            <li class="sidebar-item {{ request()->routeIs('vehicle.*') ? 'active' : '' }}">
                <a href="{{ route('vehicle.index') }}" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Kendaraan</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('vehicle-origin.*') ? 'active' : '' }}">
                <a href="{{ route('vehicle-origin.index') }}" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Jenis Kendaraan</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('vehicle-type.*') ? 'active' : '' }}">
                <a href="{{ route('vehicle-type.index') }}" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Tipe Kendaraan</span>
                </a>
            </li>

            <li class="sidebar-title">Pengaturan</li>

            <li class="sidebar-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class='sidebar-link'>
                    <i class="bi bi-journal-check"></i>
                    <span>Pengguna</span>
                </a>
            </li>
        @endif --}}
    </ul>
</div>
