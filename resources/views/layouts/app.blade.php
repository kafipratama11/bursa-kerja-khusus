<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</head>
<body>
      <nav class="navbar sticky-top shadow p-3 navbar-expand-lg">
            <div class="container">
                  <a class="navbar-brand text-warning fw-bold me-5" href="/">J4bSeeker</a>
                  <button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-light"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex gap-3">
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/">Loker</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/perusahaan-list">Perusahaan</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#">Tentang</a>
                              </li>
                        </ul>
                  </div>
                  @yield('nav')
            </div>
      </nav>
      @yield('content')
      <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
