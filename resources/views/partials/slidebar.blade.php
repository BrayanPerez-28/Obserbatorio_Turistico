<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        
        <!-- Tables Section -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tables.*') ? 'active' : '' }}" data-toggle="collapse" href="#tables" aria-expanded="{{ request()->routeIs('tables.*') ? 'true' : 'false' }}" aria-controls="tables">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->routeIs('tables.*') ? 'show' : '' }}" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tables.js-grid') ? 'active' : '' }}" href="{{ route('tables.js-grid') }}">Js-grid</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Basic UI Elements -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Icons</a></li>
                </ul>
            </div>
        </li>

        <!-- Forms -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Form Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Form Validation</a></li>
                </ul>
            </div>
        </li>

        <!-- Charts -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Chart.js</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Morris</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>