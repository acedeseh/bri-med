<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BRI-MED</title>
  <link rel="stylesheet" href="../template/css/styles.min.css" />
  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
 
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

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
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Digital CS Problem</h5>
              <div class="card">
                <div class="card-body">
                  <form id="inputDigitalCS" method="post" action="{{ url('/digital-cs/store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="branchCode" class="form-label">Branch Code</label>
                        <select class="form-select" id="branchCode" name="branchcode"></select>
                        <div id="branchCodeError" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label for="branchName" class="form-label">Branch Name</label>
                        <input type="text" class="form-control" id="branchName" name="branchname" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Problem</label>
                        <input type="text" class="form-control" name="problem">
                    </div>
                    <div class="mb-3">
                        <label for="dateFound" class="form-label">Date Found</label>
                        <input type="datetime-local" class="form-control" id="dateFound" name="date_found">
                    </div>
                    <div class="mb-3">
                        <label for="slaTarget" class="form-label">SLA Target</label>
                        <input type="text" class="form-control" id="slaTarget" name="sla_target" readonly>
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
                        <input type="text" class="form-control" name="analysis">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <input type="text" class="form-control" value="Not Done (On Progress)" readonly name="status">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Note</label>
                        <input type="text" class="form-control" name="note">
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                </form>
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
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

  <script>
function fillBranchName(branchCode) {
  // Mengambil data branch code dari server
  fetch(`/getBranchName?branchCode=${branchCode}`)
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      // Mengisi nilai Branch Name ke dalam input
      var branchNameInput = document.getElementById('branchName');
      branchNameInput.value = data.branchName || '';
    })
    .catch(error => console.error('Error:', error));
}

// Mendapatkan elemen select
var branchCodeSelect = document.getElementById('branchCode');

// Event listener untuk perubahan pada select Branch Code
branchCodeSelect.addEventListener('change', function () {
  // Ambil nilai Branch Code yang dipilih
  var selectedBranchCode = this.value;

  // Panggil fungsi untuk mengisi Branch Name berdasarkan Branch Code yang dipilih
  fillBranchName(selectedBranchCode);
});  

     // Event listener untuk perubahan pada input Date Found
    document.getElementById('dateFound').addEventListener('change', function () {
    var dateFoundValue = this.value;

    if (dateFoundValue) {
        var dateFound = moment(dateFoundValue, 'YYYY-MM-DDTHH:mm');
        var slaTarget = dateFound.add(180, 'minutes');

        // Format waktu SLA Target menggunakan moment.js dengan format yang sesuai
        var formattedSlaTarget = slaTarget.format('YYYY-MM-DD HH:mm:ss');

        document.getElementById('slaTarget').value = formattedSlaTarget;
    } else {
        document.getElementById('slaTarget').value = '';
    }
    });
  </script>
  <script src="{{ asset('js/select2.min.js') }}"></script>

</body>

</html>