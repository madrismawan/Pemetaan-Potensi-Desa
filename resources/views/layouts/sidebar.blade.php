<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <p class="sidebar-title" style="margin-top: 20px">{{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li id="dashboard" class="sidebar-item">
                    <a href="{{route('dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li id="profile" class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-lamp-fill"></i>
                        <span>Account</span>
                    </a>
                    <ul id="sub-menu-profile" class="submenu">
                        {{-- <li id="edit-profile" class="submenu-item ">
                            <a href="{{route('user-profile-form')}}">Edit Profile</a>
                        </li> --}}
                        <li class="submenu-item ">
                            <a href="{{route('logout')}}">Logout</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-title">Forms &amp; Tables</li> --}}
                @if (Auth::user()->role == 1)
                    <li id="manajement" class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Manajement</span>
                        </a>
                        <ul id="manajement-sub" class="submenu">
                            <li id="data-pemetaan" class="submenu-item ">
                                <a href="{{route('view-pemetaan')}}">Manajement Pemetaan</a>
                            </li>
                            <li id="jenis-potensi" class="submenu-item ">
                                <a href="{{route('view-jenis-pemetaan')}}">Jenis Potensi</a>
                            </li>
                            {{-- <li id="add-potensi" class="submenu-item">
                                <a href="{{route('view-add-pemetaan')}}">Add Potensi</a>
                            </li> --}}
                            <li id="edit-potensi" class="submenu-item ">
                                <a href="{{route('view-edit-pemetaan')}}">Edit Potensi</a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Report User</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

