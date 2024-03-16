<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/dashboard.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>
<body>
      <nav class="navbar sticky-top shadow p-3">
            <div class="container">
                  <a class="navbar-brand text-light fw-bold" href="/">Bursa Kerja</a>
                  @yield('nav')
            </div>
      </nav>
      @yield('content')
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
