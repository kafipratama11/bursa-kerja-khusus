@extends('layouts.admin')

@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/perusahaan-list">DASHBOARD</a>
            </li>
      </ul>
</div>
@endsection

@section('nav')
<div class="dropdown">
      <a class="dropdown-toggle text-light link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth
            {{ Auth::user()->name }}
            @endauth
      </a>

      <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark menu-sidebar" href="/employe/edit-profile">Profile</a></li>
            <li><a class="dropdown-item text-danger menu-sidebar" href="{{ route('employe-logout')}}">Logout</a></li>
      </ul>
</div>
@endsection

@section('content-admin')
@include('partials.navbar-dashboard-admin')

<div class="container">
      <div class="row pb-5">
            <div class="col-4">
                  <div class="logo d-flex jusifi-content-center">
                        <img src="../img/bca.png" style="width: 100%" alt="">
                  </div>
                  <div class="fw-bolder fs-3 text-secondary">
                        PT Freeport Indonesia
                  </div>
                  <p class="mt-2">
                        <button class="btn border-secondary w-100 fw-medium btn-dark text-light fw-bolder" style="font-size: 15px" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Edit profile
                        </button>
                  </p>
                  <div class="collapse" id="collapseExample">
                        <div class="card card-body pt-4">
                              <form action="">
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Nama perusahaan</label>
                                          <input type="text" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="PT Freeport Indonesia">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Alamat perusahaan</label>
                                          <input type="text" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="JL. Veteran, Kota Tangerang, Banten">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Email</label>
                                          <input type="email" style="font-size: 14px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="freeportidn@yahoo.co.id">
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlTextarea1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Deskripsi</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum tenetur dolor eius cumque facilis, cupiditate ducimus culpa voluptate corporis fugiat? Quas natus asperiores iste, harum laboriosam nemo ipsam distinctio saepe maxime sequi porro quaerat quam expedita autem perferendis deserunt molestiae ducimus. Incidunt perspiciatis architecto excepturi fugiat magni quae nostrum adipisci, autem in porro quod consequuntur ea neque doloribus suscipit iusto repellendus! Rerum, deleniti illum maxime dolorem accusantium, ab aperiam sint impedit nobis rem necessitatibus aliquam aliquid. Similique, incidunt tempora doloribus ducimus eius, quia porro, error officia a voluptas dolorum odit culpa dicta quod. Voluptas et quia distinctio, nam fuga aut!</textarea>
                                    </div>
                                    <div class="mb-3 d-flex gap-3">
                                          <div class="btn btn-success">Simpan</div>
                                          <div class="btn btn-outline-secondary">Cancel</div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
            <div class="col pt-4">
                  <div class="row mt-5">
                        <div class="fw-medium mb-1">
                              Lowongan Kerja
                        </div>
                        <div class="col-6 mb-3">
                              <div class="card w-full" style="font-size: 14px">
                                    <div class="card-body">
                                          <div class="row">
                                                <div class="col-9">
                                                      <div class="fw-bolder">Employee Relations</div>
                                                </div>
                                                <div class="col">
                                                      <div class="text-end text-primary text-end fw-bolder">Aktif</div>
                                                </div>
                                          </div>
                                          <div class="text-secondary mt-2">Human Resource</div>
                                    </div>
                                    <div class="card-footer text-center text-secondary">
                                          12 Orang Melamar
                                    </div>
                              </div>
                        </div>
                        <div class="col-6 mb-3">
                              <div class="card w-full" style="font-size: 14px">
                                    <div class="card-body">
                                          <div class="row">
                                                <div class="col-9">
                                                      <div class="fw-bolder">Employee Relations</div>
                                                </div>
                                                <div class="col">
                                                      <div class="text-end text-primary text-end fw-bolder">Aktif</div>
                                                </div>
                                          </div>
                                          <div class="text-secondary mt-2">Human Resource</div>
                                    </div>
                                    <div class="card-footer text-center text-secondary">
                                          12 Orang Melamar
                                    </div>
                              </div>
                        </div>
                        <div class="col-6 mb-3">
                              <div class="card w-full" style="font-size: 14px">
                                    <div class="card-body">
                                          <div class="row">
                                                <div class="col-9">
                                                      <div class="fw-bolder">Employee Relations</div>
                                                </div>
                                                <div class="col">
                                                      <div class="text-end text-primary text-end fw-bolder">Aktif</div>
                                                </div>
                                          </div>
                                          <div class="text-secondary mt-2">Human Resource</div>
                                    </div>
                                    <div class="card-footer text-center text-secondary">
                                          12 Orang Melamar
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>

@endsection
