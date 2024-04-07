<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>J4bSeeker</title>
      <link rel="website icon" type="jpg" href="../../../../img/jobseeker-bg-darkblue.jpg">
      <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../../css/style.css" />
      <link rel="stylesheet" href="../../css/dashboard.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-8o5ZR1Z5g8dyjEgjWZBP08fJ2A53HOJM+UXYPZM/Zq8x9o58r+AZa68y6V9Vc74YO/l6BL/+tnUcckyU5T2zpg==" crossorigin="anonymous" />
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
                                    <a class="nav-link active text-light" aria-current="page" href="{{ route('company-list')}}">PERUSAHAAN</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="{{route('about')}}">TENTANG</a>
                              </li>
                        </ul>
                        @else
                        <ul class="navbar-nav d-flex gap-3">
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/user/dashboard">LOKER</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="{{route('user.company-list')}}">PERUSAHAAN</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="{{route('user.about')}}">TENTANG</a>
                              </li>
                        </ul>
                        @endguest
                  </div>
                  @guest
                  <form class="d-flex justify-content-end" role="search">
                        <button class="btn btn-outline-warning me-2 px-5 fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="liveToastBtn">
                              Login
                        </button>
                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                              <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                          <img src="..." class="rounded me-2" alt="...">
                                          <strong class="me-auto">Bootstrap</strong>
                                          <small>11 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                          Hello, world! This is a toast message.
                                    </div>
                              </div>
                        </div>
                        <a href="{{ route('employer-site')}}" class="btn btn-light me-2 fw-bolder" type="button">
                              Employer Site
                        </a>
                  </form>
                  @else
                  <div class="d-flex align-items-center gap-3">
                        <div class="text-light">
                              @auth
                              {{ Auth::user()->name }}
                              @endauth
                        </div>
                        <div><a href="{{ route('user.user-profile',['id' => $dataU->id]) }}"><img src="../img/bg_iu.jpg" style="width: 40px" class="rounded-pill" alt=""></a></div>
                  </div>
                  @endguest
                  @yield('nav')
            </div>
      </nav>
      @yield('content')
      <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
      <script>
            CKEDITOR.replace('content');

      </script>
      <script src="../../js/script.js"></script>
      <script>
             fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(provinces => {
                    var data = provinces;
                    var tampung = '<option>Pilih Provinsi Anda</option>';
                    data.forEach(element => {
                        tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById('lokasi').innerHTML = tampung;
                });
             fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(provinces => {
                    var data = provinces;
                    var tampung = '<option>Pilih Provinsi Anda</option>';
                    data.forEach(element => {
                        tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById('provinsi').innerHTML = tampung;
                });
      </script>
</body>
</html>
