<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-30">
            <i class="fab fa-android"></i>
        </div>
        <div class="sidebar-brand-text mx-3">B.560 ME</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ \Route::is('administrator.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('administrator.index') }}">
            <i class="fas fa-fw fa-door-closed"></i>
            <span>Homepage Engineer</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Supervisory Team
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Assign Weekly Task</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Supervisory Team</h6>
                <a class="collapse-item" href="buttons.html">Weekly Team</a>
                <a class="collapse-item" href="cards.html">Preventive ITSA</a>
                <a class="collapse-item" href="cards.html">Firebase Log</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider" style="margin-top: 9px">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ \Route::is('user.*') ? 'active' : '' }}" style="margin-top: -10px">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-brain"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ \Route::is('user.*') ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custome Settings</h6>
                <a class="collapse-item {{ \Route::is('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">Manage Data User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" style="margin-top: 9px">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-door-open"></i>
            <span>Logout</span></a>
    </li>

</ul>
<!-- End of Sidebar -->