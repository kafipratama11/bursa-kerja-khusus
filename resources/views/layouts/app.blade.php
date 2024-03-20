<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>J4bSeeker</title>
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</head>
<body>
      <nav class="navbar sticky-top shadow p-3 navbar-expand-lg stroke">
            <div class="container">
                  <a class="navbar-brand text-warning fw-bold me-5" href="/">J4bSeeker</a>
                  <button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-light"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                        @guest
                        <ul class="navbar-nav d-flex gap-3">
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/">LOKER</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/perusahaan-list">PERUSAHAAN</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/tentang">TENTANG</a>
                              </li>
                        </ul>
                        @else
                        <ul class="navbar-nav d-flex gap-3">
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/user/index-user">LOKER</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/user/perusahaan-list">PERUSAHAAN</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/user/tentang">TENTANG</a>
                              </li>
                        </ul>
                        @endguest
                  </div>
                  @guest
                  <form class="d-flex justify-content-end" role="search">
                        <button class="btn btn-outline-warning me-2 px-5 fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Login
                        </button>
                        <a href="{{ route('employer-site')}}" class="btn btn-light me-2 fw-bolder" type="button">
                              Employer Site
                        </a>
                  </form>
                  @else
                  <div class="dropdown">
                        <a class="dropdown-toggle text-light link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              @auth
                              {{ Auth::user()->name }}
                              @endauth
                        </a>
                        <ul class="dropdown-menu">
                              <li><a class="dropdown-item text-danger" href="{{ route('user.logout')}}">Log Out</a></li>
                        </ul>
                  </div>
                  @endguest
                  @yield('nav')
            </div>
      </nav>
      @yield('content')
      <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
