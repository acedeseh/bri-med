<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BRI-MED</title>
  <link rel="stylesheet" href="../template/css/styles.min.css" />
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
              <h5 class="card-title fw-semibold mb-4">Add TCR Problem</h5>
              <div class="card">
                <div class="card-body">
                  <form id="inputTCR" method="post" action="{{ url('/tcr/store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="branchName" class="form-label">Branch Name</label>
                      <select class="form-select" id="branchName" name="branchname"></select>
                    </div>    
                    
                    <div class="mb-3">
                      <label for="branchCode" class="form-label">Branch Code</label>
                      <input class="form-control" type="text" id="branchCode" name="branchcode" readonly>
                      <div id="branchCodeError" class="text-danger"></div>
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

  <script src="../template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../template/js/sidebarmenu.js"></script>
  <script src="../template/js/app.min.js"></script>
  <script src="../template/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../template/libs/simplebar/dist/simplebar.js"></script>
  <script src="../template/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

  <script>
    // Mendapatkan elemen select
    var branchCodeSelect = document.getElementById('branchCode');
    var branchNameSelect = document.getElementById('branchName');
    
    // Mengisi opsi-opsi pada elemen select dari server saat halaman dimuat
    fetch('/getBranchCodesAndNames')
      .then(response => response.json())
      .then(data => {
        // Simpan data untuk digunakan nanti
        var branchData = data;
    
        // Mengisi opsi-opsi pada elemen select
        branchData.branchCodesAndNames.forEach(branch => {
          // Option untuk Branch Code
          var optionCode = document.createElement('option');
          optionCode.value = branch.branchcode;
          optionCode.text = branch.branchcode;
          branchCodeSelect.appendChild(optionCode);
    
          // Option untuk Branch Name
          var optionName = document.createElement('option');
          optionName.value = branch.branchname;
          optionName.text = branch.branchname;
          branchNameSelect.appendChild(optionName);
        });
    
        // Event listener untuk perubahan pada select Branch Code
        branchCodeSelect.addEventListener('change', function () {
          // Ambil nilai Branch Code yang dipilih
          var selectedBranchCode = this.value;
    
          // Isi nilai Branch Code ke dalam input
          document.getElementById('branchCode').value = selectedBranchCode;
    
          // Panggil fungsi untuk mengisi Branch Name berdasarkan Branch Code yang dipilih
          fillBranchName(selectedBranchCode, branchData);
        });
    
        // Event listener untuk perubahan pada select Branch Name
        branchNameSelect.addEventListener('change', function () {
          // Ambil nilai Branch Name yang dipilih
          var selectedBranchName = this.value;
    
          // Temukan Branch Code yang sesuai dengan Branch Name
          var selectedBranch = branchData.branchCodesAndNames.find(branch => branch.branchname === selectedBranchName);
    
          // Periksa apakah Branch Code ditemukan
          if (selectedBranch) {
            // Isi nilai Branch Code ke dalam input
            document.getElementById('branchCode').value = selectedBranch.branchcode;
    
            // Panggil fungsi untuk mengisi Branch Name berdasarkan Branch Code yang dipilih
            fillBranchName(selectedBranch.branchcode);
          }
        });
      })
      .catch(error => console.error('Error:', error));
    
        // Event listener untuk perubahan pada input Date Found
    document.getElementById('dateFound').addEventListener('change', function () {
        // Ambil nilai Date Found yang dimasukkan
        var dateFoundValue = this.value;
    
        // Periksa apakah nilai Date Found valid
        if (dateFoundValue) {
            // Ubah format Date Found ke format MySQL
            var formattedDateFound = moment(dateFoundValue, 'YYYY-MM-DDTHH:mm').format('YYYY-MM-DD HH:mm:ss');
    
            // Isi nilai Date Found yang telah diubah ke dalam input
            this.value = formattedDateFound;
            
            // Hitung SLA Target (180 menit setelah Date Found)
            var dateFound = moment(dateFoundValue, 'YYYY-MM-DDTHH:mm');
            var slaTarget = dateFound.add(180, 'minutes');
    
            // Format waktu SLA Target menggunakan moment.js
            var formattedSlaTarget = slaTarget.format('YYYY/MM/DD HH:mm:ss');
    
            // Isi nilai SLA Target ke dalam input
            document.getElementById('slaTarget').value = formattedSlaTarget;
        } else {
            // Jika Date Found kosong, atur SLA Target kembali menjadi kosong
            document.getElementById('slaTarget').value = '';
        }
    });
      </script>

</body>

</html>