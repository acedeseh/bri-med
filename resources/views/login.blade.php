<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BRI-MED</title>
  <link rel="icon" sizes="auto" href="../template/images/logos/favicon-32x32.png">
  <link rel="icon" sizes="auto" href="../temolate/images/logos/favicon-32x32">
  <link rel="stylesheet" href="../template/css/styles.min.css" />
  <style>
    .position-relative.overflow-hidden.radial-gradient.min-vh-100 {
      background-image: url('../template/images/backgrounds/bg.png');
      background-size: cover;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <p class="text-center">BRI-MED (Maintenance Evaluation Dashboard) </p>

                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                  @csrf
          
                  <!-- Email Address -->
                  <div class="mt-4">
                      <x-input-label class="form-label" for="email" :value="__('Email')" />
                      <x-text-input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
          
                  <!-- Password -->
                  <div class="mt-4">
                      <x-input-label class="form-label" for="password" :value="__('Password')" />
          
                      <x-text-input id="password" class="form-control"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" />
          
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
          
                  <!-- Remember Me -->
                  <div class="block mt-4">
                      <label for="remember_me"class="form-check-label text-dark">
                          <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                          <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                      </label>
                  </div>
          
                  <div class="text-primary fw-bold mt-6">
                      @if (Route::has('password.request'))
                          <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                          </a>
                      @endif
          
                      <x-primary-button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                          {{ __('Log in') }}
                      </x-primary-button>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../template/libs/jquery/dist/jquery.min.js"></script>
  <script src="../template/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>