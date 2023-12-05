<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRI-MED</title>
    <link rel="stylesheet" href="../../template/css/styles.min.css" />

    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('layouts.sidebar')

        <!-- Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
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
                        <img src="../../template/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
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
            <!-- Header End -->

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Edit RCM Problem</h5>
                        <div class="card">
                            <div class="card-body">
                                <form id="updateSspp" method="post" action="{{ route('rcm.update', $rcm->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                        <label for="branchCode" class="form-label" readonly>Branch Code</label>
                                        <input class="form-select" value="{{ $rcm->branchcode }}" id="branchCode" name="branchcode" readonly>
                                        <div id="branchCodeError" class="text-danger"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="branchName" class="form-label" readonly>Branch Name</label>
                                        <input type="text" value="{{ $rcm->branchname }}" class="form-control" id="branchName" name="branchname" readonly>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label" readonly>Problem</label>
                                      <input type="text" value="{{ $rcm->problem }}" class="form-control" name="problem">
                                  </div>
                                  <div class="mb-3">
                                      <label for="dateFound" class="form-label" readonly >Date Found</label>
                                      <input type="text" value="{{ $rcm->date_found }}" class="form-control" id="dateFound" name="date_found">
                                  </div>
                                  <div class="mb-3">
                                      <label for="slaTarget" class="form-label" readonly >SLA Target</label>
                                      <input type="text" class="form-control" value="{{ $rcm->sla_target }}" id="slaTarget" name="sla_target" readonly>
                                  </div>
                                  <div class="mb-3">
                                      <label for="issue" class="form-label">Issue</label>
                                      <select class="form-select" id="issue" name="issue">
                                          <option value="Machine Issue">Machine Issue</option>
                                          <option value="SOP Issue">SOP Issue</option>
                                          <option value="Network Issue">Network Issue</option>
                                          <option value="People Issue">People Issue</option>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Analysis</label>
                                      <input type="text" value="{{ $rcm->analysis }}" class="form-control" name="analysis">
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <div class="btn-group" role="group" aria-label="Status">
                                        <input type="radio" class="btn-check" name="status" id="statusOnProgress" autocomplete="off"
                                            value="On Progress" {{ $rcm->status == 'On Progress' ? 'checked' : '' }}>
                                        <label class="btn btn-warning" for="statusOnProgress">On Progress</label>
                                
                                        <input type="radio" class="btn-check" name="status" id="statusDone" autocomplete="off"
                                            value="Done" {{ $rcm->status == 'Done' ? 'checked' : '' }}>
                                        <label class="btn btn-success" for="statusDone">Done</label>
                                    </div>
                                </div>
                                
                                <div class="mb-3" id="dateDoneContainer" style="display: none;">
                                    <label for="date_done" class="form-label">Date Done</label>
                                    <input type="datetime-local" value="{{ $rcm->date_done }}" class="form-control" name="date_done">
                                </div>

                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Note</label>
                                      <input type="text" value="{{ $rcm->note }}" class="form-control" name="note">
                                  </div>
                                    <!-- ... (form elements lainnya) ... -->
                                    <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script src="../../template/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../template/js/sidebarmenu.js"></script>
  <script src="../../template/js/app.min.js"></script>
  <script src="../../template/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../template/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../template/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

  <script>
    // Mendapatkan elemen-elemen yang dibutuhkan
    var statusOnProgressRadio = document.getElementById('statusOnProgress');
    var statusDoneRadio = document.getElementById('statusDone');
    var dateDoneContainer = document.getElementById('dateDoneContainer');

    // Menetapkan fungsi yang akan dipanggil saat radio diubah
    function updateDateDoneVisibility() {
        // Memeriksa apakah 'Status Done' dipilih
        if (statusDoneRadio.checked) {
            // Menampilkan elemen Date Done
            dateDoneContainer.style.display = 'block';
        } else {
            // Menyembunyikan elemen Date Done
            dateDoneContainer.style.display = 'none';
        }
    }

    // Menetapkan fungsi yang akan dipanggil saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        // Menetapkan status 'On Progress' sebagai default
        statusOnProgressRadio.checked = true;

        // Memanggil fungsi untuk mengatur visibilitas Date Done berdasarkan radio yang dipilih
        updateDateDoneVisibility();

        // Menetapkan fungsi yang akan dipanggil saat radio 'Status On Progress' diubah
        statusOnProgressRadio.addEventListener('change', updateDateDoneVisibility);

        // Menetapkan fungsi yang akan dipanggil saat radio 'Status Done' diubah
        statusDoneRadio.addEventListener('change', updateDateDoneVisibility);
    });
</script>
    

</body>

</html>
