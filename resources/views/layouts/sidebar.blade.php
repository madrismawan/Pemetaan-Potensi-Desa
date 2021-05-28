<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <p class="sidebar-title" style="margin-top: 20px">{{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item active ">
                    <a href="{{route('dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-lamp-fill"></i>
                        <span>Profile</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('user-profile-form')}}">Edit Profile</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('logout')}}">Logout</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-title">Forms &amp; Tables</li> --}}

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Manajement</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('data-pemetaan')}}">Data Pemetaan</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-default.html">Add Potensi</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-default.html">Edit Potensi</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-default.html">Verifikasi</a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Report User</span>
                    </a>
                </li>

                {{-- <li class="sidebar-title">Pages</li> --}}

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
