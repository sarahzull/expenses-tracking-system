<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
      .text-bold {
        color: #66669A;
      }
    </style>

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicon-16x16.png') }}?v={{ date('YmdHis') }}">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light dark">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/index">
                <img alt="logo" src="{{ asset('/assets/transparent.svg') }}" id="navbar-logo" style="width:20%;">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="/login">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <section class="slice py-5">
      <div class="container">
          <div class="row row-grid align-items-center">
              <div class="col-12 col-md-5 col-lg-6 order-md-2">
                  <!-- Image -->
                  <figure class="w-100">
                      <img alt="Image placeholder" src="{{ asset('/assets/illustration-3.svg') }}" class="img-fluid mw-md-120">
                  </figure>
              </div>
              <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                  <!-- Heading -->
                  <h1 class="display-4 text-center text-md-left mb-3">
                    Experience a fresh way to <strong class="text-bold"><b>manage money</b></strong>
                  </h1>
                  <!-- Buttons -->
                  <div class="text-center text-md-left mt-5">
                      <a href="/register" class="btn btn-primary btn-icon">
                          <span class="btn-inner--text">Get started</span><span class="btn-inner--icon">
                              <i data-feather="arrow-right"></i>
                          </span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 mb-4">
        <div class="container">
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-danger">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5 text-center">
                                <img src="{{ asset('/assets/illustration-1.svg') }}" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Get a quick overview</h5>
                            <p class="text-dark opacity-6 mb-0">about your total incomes, budgets and expenses at a glance and in one place</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-success">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5 text-center">
                                <img src="{{ asset('/assets/illustration-4.svg') }}" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Have perfect control</h5>
                            <p class="text-dark opacity-6 mb-0">over all your expenses, income and budgets and manage it by category.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-warning">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5 text-center">
                                <img src="{{ asset('/assets/illustration-6.svg') }}" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Use our smart budgets</h5>
                            <p class="text-dark opacity-6 mb-0">to save money for a new car, dreamy vacation or top university.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>