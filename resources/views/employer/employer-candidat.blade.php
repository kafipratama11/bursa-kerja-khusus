@extends('layouts.dashboard-employer')

@include('partials.navbar-dashboard-admin')

@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/employe/index">HOME</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/employe/dashboard-employe">DASHBOARD</a>
            </li>
      </ul>
</div>
@endsection

@section('content-admin')

<body class="bg-body-tertiary">
      <div class="container pt-5">
            <div class="row">
                  <div class="col-xl-8 col-md-12 col-sm-12">
                        <div class="card bg-white mb-3">
                              <div class="card-body ps-4">
                                    <div class="d-flex gap-4">
                                          <div>
                                                <img src="../../../img/bg_iu.jpg" alt="" class="rounded-pill ratio ratio-1x1 img-profile-user">
                                          </div>
                                          <div>
                                                <div class="d-flex gap-2 align-items-center">
                                                      <div class="fw-semibold text-black fs-5">Muhammad Kafi Pratama</div>
                                                      <div class="fw-light text-secondary" style="font-size: 12px">(He/Him)</div>
                                                </div>
                                                <div class="text-secondary">Jakarta Barat, Jakarta</div>
                                                <div class="mt-2 text-secondary" style="font-size: 13px">
                                                      <div class="d-flex gap-3">
                                                            <i class="bi bi-envelope-at"></i>kafipratama1512@gmail.com
                                                      </div>
                                                      <div class="d-flex gap-3">
                                                            <i class="bi bi-telephone"></i>0813-7414-0161
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-3">
                                          <div class="fw-semibold mb-3">About</div>
                                    </div>
                                    <div style="font-size: 14px">
                                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae ut aspernatur consequuntur recusandae quasi doloremque sunt, libero minima odio eligendi maiores, quos optio mollitia dignissimos sint nisi illum! Distinctio doloribus, eveniet vel provident odit earum, necessitatibus qui sapiente voluptates ipsam itaque doloremque nemo nihil magni in? Est a ipsam accusantium deserunt, harum et cupiditate enim eveniet voluptate quos! Sint reprehenderit voluptas cupiditate est officiis illum quia debitis labore rem quas nulla minima, animi atque quisquam distinctio voluptate perspiciatis! Dicta eveniet voluptatibus ad rem assumenda est perspiciatis voluptatum, ullam omnis porro? Architecto, quis minima debitis perferendis itaque incidunt non fuga qui quo explicabo ad laudantium sapiente natus distinctio quae, consequatur officiis ipsum pariatur? Ullam vitae impedit error debitis maxime! Atque magnam tenetur laudantium totam hic, numquam, deserunt illum iure doloremque deleniti iste, modi explicabo aut architecto repudiandae dolores reprehenderit nesciunt quidem eius odit itaque harum? Distinctio deleniti labore numquam beatae illum!</p>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Education</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-semibold" style="font-size: 14px">SMKN 4 Tangerang</div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">Rekayasa Perangkat Lunak</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">2020 - 2025</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="d-flex gap-2 align-items-center">
                                                <div class="fw-semibold" style="font-size: 14px">Universitas Indonesia</div>
                                          </div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">Ilmu Komunikasi</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">2025 - 2029</div>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Experience</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-semibold" style="font-size: 14px">SMKN 4 Tangerang</div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">Rekayasa Perangkat Lunak</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">2020 - 2025</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="d-flex gap-2 align-items-center">
                                                <div class="fw-semibold" style="font-size: 14px">Universitas Indonesia</div>
                                          </div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">Ilmu Komunikasi</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">2025 - 2029</div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card mb-3">
                              <div class="card-body">
                                    <div class="fw-semibold mb-2">Skills</div>
                                    <div class="d-flex gap-3 mb-1" style="font-size: 13px">
                                          <div style="width: 60px">Softskills</div>
                                          <div>:</div>
                                          <div>Critical Thinking, Communication, </div>
                                    </div>
                                    <div class="d-flex gap-3" style="font-size: 13px">
                                          <div style="width: 60px">Hardskills</div>
                                          <div>:</div>
                                          <div>UI/UX, JavaScript, VueJS, Kotlin, Adobe Illustration, Mc Office</div>
                                    </div>
                              </div>
                        </div>
                        <div class="card mb-2">
                              <div class="card-body">
                                    <div class="fw-semibold">Resume</div>
                              </div>
                        </div>
                        <div class="card mb-2">
                              <div class="card-body">
                                    <div class="fw-semibold">Portfolio</div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>

@endsection
