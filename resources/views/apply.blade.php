@extends('layouts.app')
@section('content')
@include('partials.navbar-tiga')
<div class="container">
      <div class="mt-5 px-5">
            <div class="row">
                  <div class="col">
                        <div class="d-flex gap-4">
                              <div class="card card-profile-perusahaan d-flex justify-content-center">
                                    <img src="img/bca.png" alt="">
                              </div>
                              <div class="">
                                    <div class="fw-medium text-body-tertiary">Melamar untuk</div>
                                    <div class="position fw-medium fs-1">Administrasi</div>
                                    <div class="nama-perusahaan fs-5 mb-4">SHOPEE INDONESIA</div>
                                    <div><a href="" class="link-offset-2 link-underline link-underline-opacity-100 text-dark fw-medium" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <p>Lihat deskripsi pekerjaan</p>
                                          </a></div>
                              </div>
                              <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-body pt-4 px-5">
                                          <div class="position-offcanvas fs-2 fw-medium">Administrasi</div>
                                    </div>
                              </div>
                        </div>
                        <div class="mt-5">
                              <div class="mb-3">
                                    <label for="formFile" class="form-label">Resume</label>
                                    <input class="form-control" type="file" id="formFile">
                              </div>
                              <div class="mb-3">
                                    <label for="formFile" class="form-label">Surat Lamaran</label>
                                    <input class="form-control" type="file" id="formFile">
                              </div>
                        </div>
                  </div>
                  <div class="col"></div>
            </div>
      </div>
</div>
@endsection
