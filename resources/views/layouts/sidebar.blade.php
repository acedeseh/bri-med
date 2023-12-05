<!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
          <img src="../template/images/logos/favicon.png" alt="">
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
          </div>
      </div>
      <!-- Sidebar navigation-->

      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false">
                      <span>
                          <i class="ti ti-layout-dashboard"></i>
                      </span>
                      <span class="hide-menu">Dashboard</span>
                  </a>
              </li>

              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Self Service Banking Terminal</span>
              </li>

              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('digital-cs.index') }}" aria-expanded="false">
                      <span>
                          <i class="ti ti-device-analytics"></i>
                      </span>
                      <span class="hide-menu">Digital CS</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('sspp.index') }}" aria-expanded="false">
                      <span>
                          <i class="ti ti-device-analytics"></i>
                      </span>
                      <span class="hide-menu">SSPP</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('rcm.index') }}" aria-expanded="false">
                      <span>
                          <i class="ti ti-device-analytics"></i>
                      </span>
                      <span class="hide-menu">RCM</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('tcr.index') }}" aria-expanded="false">
                      <span>
                          <i class="ti ti-device-analytics"></i>
                      </span>
                      <span class="hide-menu">TCR</span>
                  </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('qms.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-device-analytics"></i>
                    </span>
                    <span class="hide-menu">QMS</span>
                </a>
            </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>

<!-- Sidebar End -->
