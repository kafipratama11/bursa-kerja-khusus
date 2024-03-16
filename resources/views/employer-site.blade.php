@extends('layouts.app')
@section('content')
@include('partials.navbar-dua')
<div class="container">
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-5">
                              <div class="mb-3">
                                    <div class="title-signup fw-bolder fs-3 text-center">Login</div>
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword">
                              </div>
                              <div class="mb-5">
                                    <button type="button" class="btn btn-signup w-100 fw-medium mb-2">Login</button>
                                    <button type="button" class="btn btn-login-cancel w-100 fw-medium bg-light" data-bs-dismiss="modal">Cancel</button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="title-proses-rekrut fw-bold text-center mt-5 fs-2">
            Mulai rekrutmen dalam 3 langkah
      </div>
      <div class="row d-flex justify-content-center">
            <div class="col-xl-4 col-md-12 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-5 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="number-bg fw-bolder fs-3 pt-1">1</div>
                        </div>
                        <div class="proses-rekrut fw-medium mb-3">Daftar Online</div>
                        <div class="detail-proses-rekrut">Buat dan verifikasi akun dengan alamat email anda</div>
                  </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-5 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="number-bg fw-bolder fs-3 pt-1">1</div>
                        </div>
                        <div class="proses-rekrut fw-medium mb-3">Daftar Online</div>
                        <div class="detail-proses-rekrut">Buat dan verifikasi akun dengan alamat email anda</div>
                  </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-5 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="number-bg fw-bolder fs-3 pt-1">1</div>
                        </div>
                        <div class="proses-rekrut fw-medium mb-3">Daftar Online</div>
                        <div class="detail-proses-rekrut">Buat dan verifikasi akun dengan alamat email anda</div>
                  </div>
            </div>
      </div>
      <div class="text-center mt-3">
            <a href="signup" type="button" class="btn btn-regis-perusahaan px-5 fw-bolder">Buat Akun</a>
      </div>
      <hr class="mt-5">
</div>
@endsection
