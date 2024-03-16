@extends('layouts.app')
@section('content')

@section('nav')
<form class="d-flex" role="search">
      <button class="btn btn-outline-light me-2 px-5 fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Login
      </button>
      <a href="{{ route('employer-site')}}" class="btn btn-light me-2 fw-medium" type="button">
            Employer Site
      </a>
</form>
@endsection

<div class="container">
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('login-proses')}}" method="POST">
                              @csrf
                              <div class="modal-body px-5">
                                    <div class="mb-3">
                                          <div class="title-signup fw-bolder fs-3 text-center">Login</div>
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">NISN</label>
                                          <input type="text" name="nisn" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-4">
                                          <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                          <input type="password" name="password" class="form-control" id="inputPassword">
                                    </div>
                                    <div class="mb-5">
                                          <button type="submit" class="btn btn-signup w-100 fw-medium mb-2">Login</button>
                                          <button type="button" class="btn btn-login-cancel w-100 fw-medium bg-light" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <label for="formGroupExampleInput" class="form-label fw-bold">Posisi Yang Dicari</label>
                  <input type="text" class="form-control py-3" id="formGroupExampleInput" placeholder="Example input placeholder" />
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <label for="klasifikasi" class="fw-bold form-label">Klasifikasi</label>
                  <select class="form-select py-3" aria-label="Default select example" id="klasifikasi">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <label for="where" class="fw-bold form-label">Dimana</label>
                  <div class="d-flex gap-3">
                        <select class="form-select py-3" aria-label="Default select example" id="where">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                        </select>
                        <button class="btn btn-search px-5 text-light fw-semibold" type="submit">
                              Cari
                        </button>
                  </div>
            </div>
      </div>
      <div class="row d-flex justify-content-center mt-5">
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <div class="card pt-2 px-3 fw-bold">
                        <div class="d-flex gap-2 justify-content-center">
                              <i class="bi bi-journal-text"></i>
                              <p>LOWONGAN PEKERJAAN</p>
                        </div>
                        <div class="text-center">
                              <h2>56</h2>
                        </div>
                        <hr />
                  </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <div class="card pt-2 px-3 fw-bold">
                        <div class="d-flex gap-2 justify-content-center">
                              <i class="bi bi-person-fill"></i>
                              <p>ALUMNI</p>
                        </div>
                        <div class="text-center">
                              <h2>1208</h2>
                        </div>
                        <hr />
                  </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <div class="card pt-2 px-3 fw-bold">
                        <div class="d-flex gap-2 justify-content-center">
                              <i class="bi bi-buildings-fill"></i>
                              <p>PERUSAHAAN</p>
                        </div>
                        <div class="text-center">
                              <h2>27</h2>
                        </div>
                        <hr />
                  </div>
            </div>
      </div>
      <div class="row mt-5">
            <div class="col-xl-6 col-md-12 col-sm-12">
                  <a href="" class="link-underline link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card card-loker mb-3">
                              <div class="card-body p-2 px-5 pt-3 pb-3">
                                    <div class="mb-2">
                                          <div class="position fw-medium fs-4">Administrasi</div>
                                          <div class="nama-perusahaan">PT First Property Abadi</div>
                                    </div>
                                    <div class="row">
                                          <div class="col-1 text-end">
                                                <div class="vr h-100"></div>
                                          </div>
                                          <div class="col">
                                                <div class="mb-2">
                                                      <div class="where">Yogyakarta, DI Yogyakarta</div>
                                                      <div class="salary">
                                                            Rp. 4,500,000 - Rp. 5,000,000 per month
                                                      </div>
                                                      <div class="detail-position">
                                                            Administrasi & Dukungan Perkantoran
                                                      </div>
                                                </div>
                                                <div class="deskription">
                                                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                      Sed qui rerum adipisci reiciendis quam veniam perferendis
                                                      illo iure excepturi alias.
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-footer">
                                    <div class="loker-post-day text-center">Dibuka sampai tanggal 10/09/2021</div>
                              </div>
                        </div>
                  </a>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Modal title
                                          </h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ps-5">
                                          <div class="mb-4">
                                                <div class="modal-position-loker fs-4 fw-semibold">
                                                      Administrasi
                                                </div>
                                                <div class="modal-perusahaan-loker fs-5 fw-normal">
                                                      PT First Property Abadi
                                                </div>
                                          </div>
                                          <div class="mb-3">
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      Yogyakarta, DI Yogyakarta
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-building"></i>
                                                      Entry Data dan Pengolahan Data
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      Full Time
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-cash-stack"></i>
                                                      Rp. 4,500,000 - Rp. 5,000,000
                                                </div>
                                          </div>
                                          <div class="modal-post-day-loker mb-3 text-body-tertiary">
                                                Diposting 1 hari yang lalu
                                          </div>
                                          <div class="modal-jobdesc mb-4">
                                                <div class="title-modal-jobdesc mb-2">JOB DESCRIPTION</div>
                                                <div class="detail-modal-jobdesc">
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="modal-requirement mb-4">
                                                <div class="title-modal-requirement mb-2">
                                                      JOB REQUIREMENT
                                                </div>
                                                <div class="detail-modal-requirement">
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                      <div>
                                                            > Lorem ipsum dolor sit amet consectetur adipisicing
                                                            elit. Temporibus, incidunt.
                                                      </div>
                                                </div>
                                          </div>
                                          <a type="button" href="apply" class="btn btn-apply-loker px-5 fw-bolder" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Lamaran Cepat
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>
@endsection
