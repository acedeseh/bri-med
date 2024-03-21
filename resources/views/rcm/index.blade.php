<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BRI-MED</title>
  <link rel="stylesheet" href="../template/css/styles.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .long-text {
      white-space: pre-line;
    }
  </style>
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
                <h6 class="fw-semibold fs-4">RCM</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <div>Data Persentasi Kerusakan Bulan Ini</div>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <h6 class="fw-semibold fs-4 mb-0"><span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  </ul>
                </div>
              </div>
            </div>
            <div id="rcmIssuePieChart">
              <canvas id="rcmPieChart"></canvas>
          </div>
          </div>     
                    

            <div class="col-sm-8 col-xl align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">RCM Evaluation Overview</h5>
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
                    <div id=""></div>
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
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h5 class="card-title fw-semibold mb-4">Recent Problem</h5>
                <div class="container d-flex">              
                  <a class="btn btn-outline-secondary mx-3 mt-2 d-block mb-0 fs-3 ms-auto" href="{{ route('rcm.create') }}" >Add</a>
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
                      @foreach($rcmProblem as $rcmall)
                      <tr>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ $rcmall->branchcode }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1 long-text">{{ $rcmall->branchname }}</td>
                        <td class="border-bottom-0 fw-bold mb-1 long-text">{{ $rcmall->problem }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ date('d/m/Y H:i', strtotime($rcmall->date_found)) }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ date('d/m/Y H:i', strtotime($rcmall->sla_target)) }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1">{{ date('d/m/Y H:i', strtotime($rcmall->date_done)) }}</td>
                        
                        <td class="border-bottom-0 fw-semibold">
                          @php
                              $slaTarget = strtotime($rcmall->sla_target);
                              $dateDone = $rcmall->date_done;
                        
                              if (empty($dateDone)) {
                                  $slaStatus = 'On Progress';
                                  $slaColor = 'text-warning ';
                                  $bgColor = 'bg-warning'; // Warna latar belakang untuk "On Progress" (Kuning)
                              } else {
                                  $dateDone = strtotime($dateDone);
                                  $slaStatus = $dateDone <= $slaTarget ? 'Sesuai' : 'Tidak Sesuai';
                                  $slaColor = $dateDone <= $slaTarget ? 'text-success' : 'text-danger';
                                  $bgColor = $dateDone <= $slaTarget ? 'bg-success  ' : 'bg-danger'; // Warna latar belakang untuk "Done" dan "Not Done" (Hijau dan Merah)
                              }
                          @endphp
                      
                          <span class="{{ $slaColor }}">{{ $slaStatus }}</span>
                      </td>

                        <td class="border-bottom-0 fw-semibold mb-1 long-text">{{ $rcmall->issue }}</td>
                        <td class="border-bottom-0 fw-semibold mb-1 long-text">{{ $rcmall->analysis }}</td>
                        
                        <td class="border-bottom-0 fw-semibold mb-1 {{ $bgColor }}">
                          {{ $rcmall->status }}
                        </td>

                        <td class="border-bottom-0 fw-semibold mb-1 long-text">{{ $rcmall->note }}</td>
                        <th class="border-bottom-0">
                          <div class="btn-group">
                            <a  class="btn btn-warning" href="{{route('rcm.edit', $rcmall->id)}}">Update</a>
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $rcmall->id }}">Delete</button>
                          </div>
                      </th>
                      </tr>

                        <div class="modal fade" id="confirmDeleteModal{{ $rcmall->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmation</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <p>Apakah anda yakin ingin menghapus data ini?</p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                      <form method="POST" action="{{ route('rcm.destroy', $rcmall->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div>
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

<script>
  function editAction(id) {
  window.location.href = "{{ url('/rcm/edit') }}/" + id;
}
</script>

<!-- Include Chart.js from CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="../template/libs/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="../template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../template/js/sidebarmenu.js"></script>
<script src="../template/js/app.min.js"></script>
<script src="../template/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../template/libs/simplebar/dist/simplebar.js"></script>
<script src="../template/js/dashboard.js"></script>



</body>

</html>