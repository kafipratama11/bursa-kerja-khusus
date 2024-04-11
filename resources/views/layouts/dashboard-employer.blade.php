<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="website icon" type="jpg" href="../../../img/jobseeker-bg-darkblue.jpg">
      <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../../../css/style.css" />
      <link rel="stylesheet" href="../../css/dashboard.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
      @yield('content-admin')
      <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
      <script>
            CKEDITOR.replace('jobdesc');
            CKEDITOR.replace('jobrequirement');

      </script>
      <script src="../../../js/script.js"></script>
      <script>
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                  .then(response => response.json())
                  .then(provinces => {
                        var data = provinces;
                        var tampung = '<option>Pilih Provinsi</option>';
                        data.forEach(element => {
                              tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById('provinsi').innerHTML = tampung;
                  });

            const selectProvinsi = document.getElementById('provinsi');

            selectProvinsi.addEventListener('change', (e) => {
                  var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
                  fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                        .then(response => response.json())
                        .then(provinces => {
                              var data = provinces;
                              var tampung = '<option>Pilih Kota/Kabupaten</option>';
                              data.forEach(element => {
                                    tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
                              });
                              document.getElementById('kota_kabupaten').innerHTML = tampung;
                        });
            });

      </script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
