<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BRI-MED</title>
  <link rel="stylesheet" href="../template/css/styles.min.css" />

</head>

<body>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('layouts.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../template/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                  <div class="nav-link">{{ Auth::user()->name }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">

                    <form class="btn btn-outline-secondary mx-3 mt-2 d-block" method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <div class="container-fluid">
        <!--  Row 1 -->

        
        <div class="row">
          <div class="col-lg-30 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Machine Evaluation Overview</h5>
                    <img src="../template/images/logos/bri-logo.png" alt="">
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-select" id="year-select">
                        <?php
                          $currentYear = date('Y');
                          $lastYear = $currentYear + 1;
                          for ($year = $currentYear; $year <= $lastYear; $year++) {
                            echo "<option value=\"$year\">$year</option>";
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <select class="form-select" id="month-select">
                        <?php
                          for ($month = 1; $month <= 12; $month++) {
                            $monthName = date('F', mktime(0, 0, 0, $month, 1));
                            echo "<option value=\"$month\">$monthName</option>";
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                Chart 
                <div id="chart" width="400" height="300"></div>
              </div>
            </div>
          </div>


            {{-- RECENT PROBLEM --}}
          <div class="col-lg d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Problem</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Kantor Cabang</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Mesin</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Analisa</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Cek Detail</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    
                                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-xl-3">  
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="{{ route('digital-cs.index') }}"><img src="../template/images/products/s-digitalcs.png" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" ></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Digital CS ( SSB ) </h6>
                <div class="d-flex align-items-center justify-content-between">
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="{{ route('rcm.index') }}"><img src="../template/images/products/s-rcm.png" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" ></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Replacing Card Machine</h6>
                <div class="d-flex align-items-center justify-content-between">
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="{{ route('sspp.index') }}"><img src="../template/images/products/s-sspp.png" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" ></a>                      </div>
                <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Self Service Passbook Printing</h6>
                <div class="d-flex align-items-center justify-content-between">
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="{{ route('tcr.index') }}"><img src="../template/images/products/s-tcr.png" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" ></a>                      </div>
                <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Teller Cash Recylcer</h6>
                <div class="d-flex align-items-center justify-content-between">
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="{{ route('qms.index') }}"><img src="../template/images/products/s-qms.png" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" ></a>                      </div>
                <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Queue Management System</h6>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="../template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../template/js/sidebarmenu.js"></script>s
  <script src="../template/js/app.min.js"></script>
  <script src="../template/libs/simplebar/dist/simplebar.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var chartOptions = {
        series: [
          { name: "Digital CS:", data: [355, 390, 300, 180, 390] },
        ],
        chart: {
          type: "bar",
          height: 345,
          offsetX: -15,
          toolbar: { show: true },
          foreColor: "#adb0bb",
          fontFamily: 'inherit',
          sparkline: { enabled: false },
        },
        colors: ["#5D87FF", "#49BEFF"],
  
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "35%",
            borderRadius: [6],
            borderRadiusApplication: 'end',
            borderRadiusWhenStacked: 'all'
          },
        },
        markers: { size: 0 },
  
        dataLabels: {
          enabled: false,
        },
  
        legend: {
          show: false,
        },
  
        grid: {
          borderColor: "rgba(0,0,0,0.1)",
          strokeDashArray: 3,
          xaxis: {
            lines: {
              show: false,
            },
          },
        },
  
        xaxis: {
          type: "category",
          categories: ["Digital CS", "RCM", "SSPP", "QMS", "TCR"],
          labels: {
            style: { cssClass: "grey--text lighten-2--text fill-color" },
          },
        },
  
        yaxis: {
          show: true,
          min: 0,
          max: 400,
          tickAmount: 4,
          labels: {
            style: {
              cssClass: "grey--text lighten-2--text fill-color",
            },
          },
        },
        stroke: {
          show: true,
          width: 3,
          lineCap: "butt",
          colors: ["transparent"],
        },
  
        tooltip: { theme: "light" },
  
        responsive: [
          {
            breakpoint: 600,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 3,
                }
              },
            }
          }
        ]
      };
  
      var chartProfit = new ApexCharts(document.querySelector("#chart"), chartOptions);
chartProfit.render()
  .then(() => {
    console.log("Chart rendered successfully");
    // Gunakan metode atau properti yang sesuai
    console.log("Chart series data:", chartProfit.w.globals.series);
  })
  .catch(err => console.error("Error rendering chart", err));

})
 
  </script>



</body>

</html>