<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link {{ request()->routeIs('iot.dashboard') ? 'active-link' : '' }}" href="{{ route('iot.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Fitur</div>
            <a class="nav-link {{ request()->routeIs('iot.statistik') ? 'active-link' : '' }}" href="{{ route('iot.statistik') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Data Statistik Sensor
            </a>

            <a class="nav-link {{ request()->routeIs('iot.history-sensor') ? 'active-link' : '' }}" href="{{ route('iot.history-sensor') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Data Histori Sensor
            </a>

            <a class="nav-link {{ request()->routeIs('iot.history-aktivitas') ? 'active-link' : '' }}" href="{{ route('iot.history-aktivitas') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                Aktivitas Petani
            </a>

            <a class="nav-link {{ request()->routeIs('iot.relay') ? 'active-link' : '' }}" href="{{ route('iot.relay') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                On Off Relay
            </a>

        </div>
    </div>

    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        PT Melonponik
    </div>
</nav>
