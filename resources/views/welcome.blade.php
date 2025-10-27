<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Melonponik Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ url('/') }}">PT Melonponik|{{ asset('assets/js/scripts.js') }}</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ url('/') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Fitur</div>
                        <a class="nav-link" href="{{ url('/charts') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Data Statistik Sensor
                        </a>
                        <a class="nav-link" href="{{ url('/tables') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Histori Sensor
                        </a>
                        <a class="nav-link" href="{{ url('/tables') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                            Aktivitas Petani
                        </a>
                        <a class="nav-link" href="{{ url('/tables') }}">
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
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Kelembapan Greenhouse</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>78%</h3>
                                    <div class="small text-white"><i class="fas fa-tint"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4" style="background-color:#dfc472 !important;">
                                <div class="card-body">Suhu Greenhouse</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>31°C</h3>
                                    <div class="small text-white"><i class="fas fa-thermometer-half"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4" style="background-color:#198754 !important;">
                                <div class="card-body">pH Pupuk</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>6.0</h3>
                                    <div class="small text-white"><i class="fas fa-flask"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4" style="background-color:#dc3545 !important;">
                                <div class="card-body">TDS Pupuk</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>1520 ppm</h3>
                                    <div class="small text-white"><i class="fas fa-seedling"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4" style="background-color:#20c997 !important;">
                                <div class="card-body">Panel Surya</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>4.2 kW</h3>
                                    <div class="small text-white"><i class="fas fa-bolt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4" style="background-color:#0dcaf0 !important;">
                                <div class="card-body">Tingkat Pencahayaan</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>850 W/m²</h3>
                                    <div class="small text-white"><i class="fas fa-sun"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4" style="background-color:#fd7e14 !important;">
                                <div class="card-body">Efisiensi Panel</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>18.5%</h3>
                                    <div class="small text-white"><i class="fas fa-chart-line"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4" style="background-color:#6f42c1 !important;">
                                <div class="card-body">Persentase Baterai</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3>77%</h3>
                                    <div class="small text-white"><i class="fas fa-battery-three-quarters"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Grafik Pembacaan Sensor Suhu Greenhouse
                                </div>
                                <div class="card-body">
                                    <canvas id="myAreaChart" width="100%" height="40">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Grafik Pembacaan Sensor Suhu TDS
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%"
                                        height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Periode Jenis Tanam Melon
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Jenis Melon</th>
                                        <th>Greenhouse</th>
                                        <th>Usia HST</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Berat Panen</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Jenis Melon</th>
                                        <th>Greenhouse</th>
                                        <th>Usia HST</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Berat Panen</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 1</td>
                                        <td>61 HST</td>
                                        <td>2025/08/27</td>
                                        <td>2025/10/27</td>
                                        <td>222 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 1</td>
                                        <td>66 HST</td>
                                        <td>2025/08/22</td>
                                        <td>2025/10/27</td>
                                        <td>213 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 2</td>
                                        <td>56 HST</td>
                                        <td>2025/09/01</td>
                                        <td>2025/10/27</td>
                                        <td>191 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 2</td>
                                        <td>64 HST</td>
                                        <td>2025/08/17</td>
                                        <td>2025/10/27</td>
                                        <td>231 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 3</td>
                                        <td>31 HST</td>
                                        <td>2025/09/26</td>
                                        <td>2025/11/25</td>
                                        <td>180 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 3</td>
                                        <td>42 HST</td>
                                        <td>2025/09/15</td>
                                        <td>2025/11/16</td>
                                        <td>205 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 4</td>
                                        <td>28 HST</td>
                                        <td>2025/09/29</td>
                                        <td>2025/11/26</td>
                                        <td>195 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 4</td>
                                        <td>68 HST</td>
                                        <td>2025/08/20</td>
                                        <td>2025/10/27</td>
                                        <td>226 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 5</td>
                                        <td>33 HST</td>
                                        <td>2025/09/24</td>
                                        <td>2025/11/15</td>
                                        <td>185 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 5</td>
                                        <td>65 HST</td>
                                        <td>2025/08/23</td>
                                        <td>2025/10/27</td>
                                        <td>216 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 6</td>
                                        <td>56 HST</td>
                                        <td>2025/09/01</td>
                                        <td>2025/10/27</td>
                                        <td>199 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 6</td>
                                        <td>62 HST</td>
                                        <td>2025/08/26</td>
                                        <td>2025/10/27</td>
                                        <td>209 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 7</td>
                                        <td>37 HST</td>
                                        <td>2025/09/20</td>
                                        <td>2025/11/16</td>
                                        <td>202 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 7</td>
                                        <td>64 HST</td>
                                        <td>2025/08/24</td>
                                        <td>2025/10/27</td>
                                        <td>213 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 8</td>
                                        <td>67 HST</td>
                                        <td>2025/08/21</td>
                                        <td>2025/10/27</td>
                                        <td>223 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 8</td>
                                        <td>34 HST</td>
                                        <td>2025/09/23</td>
                                        <td>2025/11/16</td>
                                        <td>188 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Hamigua</td>
                                        <td>Greenhouse 9</td>
                                        <td>60 HST</td>
                                        <td>2025/08/28</td>
                                        <td>2025/10/27</td>
                                        <td>201 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 9</td>
                                        <td>69 HST</td>
                                        <td>2025/08/19</td>
                                        <td>2025/10/27</td>
                                        <td>229 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 10</td>
                                        <td>32 HST</td>
                                        <td>2025/09/25</td>
                                        <td>2025/11/15</td>
                                        <td>182 Kg (estimasi)</td>
                                    </tr>
                                    <tr>
                                        <td>Melon Sweetnet</td>
                                        <td>Greenhouse 10</td>
                                        <td>70 HST</td>
                                        <td>2025/08/18</td>
                                        <td>2025/10/27</td>
                                        <td>233 Kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; MelonPonik 2025</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
