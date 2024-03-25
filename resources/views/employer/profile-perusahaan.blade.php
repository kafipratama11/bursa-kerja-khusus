@extends('layouts.app')
@section('content')
<div class="container">
      <div class="row mt-5 pb-5">
            <div class="col-6">
                  <div class="">
                        <div class="mb-5">
                              <div class="nama-perusahaan fs-4 text-secondary mb-3 fw-bolder">Shopee Indonesia</div>
                              <div class="row d-flex align-items-center">
                                    <div class="col-3 mt-2 me-5">
                                          <div class="card-profile-perusahaan">
                                                <img src="../img/bca.png" alt="">
                                          </div>
                                    </div>
                                    <div class="col-7">
                                          <div class="">
                                                <div style="font-size: 15px">
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-geo-alt"></i>
                                                            Yogyakarta, DI Yogyakarta
                                                      </div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-envelope"></i>
                                                            shopeeind@yahoo.co.id
                                                      </div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-telephone"></i>
                                                            085174140161
                                                      </div>
                                                      <small class="mb-2 fw-medium text-secondary">
                                                            Bergabung pada tanggal 10/09/21
                                                      </small>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-6">
                  <div>
                        <div class="mb-5">
                              <div class="fw-bolder mb-4 text-center text-secondary rounded p-2">TENTANG PERUSAHAAN</div>
                              <div class="row">
                                    <p class="deskripsi-perusahaan fw-light">
                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. At architecto accusantium veritatis aut porro delectus earum amet perferendis atque optio labore repellendus harum, corrupti, consectetur unde dignissimos vel. Illum blanditiis amet non aperiam quod? Consequuntur assumenda laborum ipsa ullam quisquam, nesciunt provident, officiis nulla, is!
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
            <div>
                  <div class="fw-bolder mb-4 mt-5 text-center text-secondary rounded p-2">LOKER PERUSAHAAN</div>
                  <div class="row">
                        <div class="col-6 mb-3">
                              <a class="card ps-4 p-3 pe-3 link-underline link-underline-opacity-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <div class="pt-2">
                                          <div class="d-flex">
                                                <div class="position fw-bolder mb-3">Administrasi</div>
                                                <small class="ms-auto text-secondary">1 hari yang lalu</small>
                                          </div>
                                          <div class="ps-4">
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      Yogyakarta, DI Yogyakarta
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-building"></i>
                                                      Rp. 5,000,000 - Rp 6,000,000
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      Full Time
                                                </div>
                                                <small class="mb-2 mt-3 fw-medium text-body-tertiary">
                                                      Dibuka sampai tanggal 10/09/23
                                                </small>
                                          </div>
                                    </div>
                              </a>
                        </div>
                  </div>
            </div>
            @include('partials.modal-loker')
            @include('partials.modal-login-user')
      </div>
      @include('partials.footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

@endsection
