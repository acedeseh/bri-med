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
                <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../template/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                  <div class="nav-link">{{ Auth::user()->name }}</div>
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>

                    <form class="btn btn-outline-secondary mx-3 mt-2 d-block" method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
             <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Digital CS</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <div>Data Persentasi Kerusakan Bulan Ini</div>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <h6 class="fw-semibold fs-4 mb-0"><span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  </ul>
                </div>
              </div>
            </div>
          </div>

            <div class="col-sm-8 col-xl align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Digital CS Evaluation Overview</h5>
                      </div>
                      <div>
                        <select class="form-select">
                          <option value="1">March 2023</option>
                          <option value="2">April 2023</option>
                          <option value="3">May 2023</option>
                          <option value="4">June 2023</option>
                        </select>
                      </div>
                    </div>
                    <div id="chart"></div>
                  </div>
                </div>
            </div>
        </div>
      </div>
        <!--  Row 1 -->
         
    {{-- RECENT PROBLEM --}}
    <div class="row">
          <div class="col-lg d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Problem</h5>
                <div class="container d-flex">              
                  <a class="btn btn-outline-secondary mx-3 mt-2 d-block mb-0 fs-3 ms-auto" href="{{ route('digital-cs.create') }}" >Add</a>
                  <a class="btn btn-outline-secondary mx-3 mt-2 d-block mb-0 fs-3 m-auto" href="">Filter By</a>
                  
              </div>

                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Branch Code</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Branch Desc</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Problem</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date Found</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">SLA Target</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date Done</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">SLA</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Issue</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Analysis</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Desc</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($digitalCSProblem as $digitalCSall)
                      <tr>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->branchcode }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->branchname }}</td>
                        <td class="border-bottom-0 fw-bold mb-1">{{ $digitalCSall->problem }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ date('d/m/Y H:i', strtotime($digitalCSall->date_found)) }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ date('d/m/Y H:i', strtotime($digitalCSall->sla_target)) }}</td>
                        <td></td>
                      <!-- <td class="border-bottom-0 fw-semibold mb-1">{{ date('d/m/Y H:i', strtotime($digitalCSall->date_done)) }}</td> -->
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->SLA }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->issue }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->analysis }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->status }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $digitalCSall->note }}</td>
                        <th class="border-bottom-0">
                          <div class="btn-group">
                            <button type="button" class="btn btn-warning" onclick="editAction()">Update</button>
                            <button type="button" class="btn btn-danger" onclick="deleteAction()">Delete</button>
                          </div>
                        </th>
                      </tr>     
                      @endforeach                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>

  <script src="../template/libs/jquery/dist/jquery.min.js"></script>
  <script src="../template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../template/js/sidebarmenu.js"></script>
  <script src="../template/js/app.min.js"></script>
  <script src="../template/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../template/libs/simplebar/dist/simplebar.js"></script>
  <script src="../template/js/dashboard.js"></script>


</body>

</html>