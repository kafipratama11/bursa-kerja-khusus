@extends('layouts.app')
@section('content')

@section('nav')
<form class="d-flex" role="search">
      <button class="btn btn-outline-light me-2 px-5 fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Login
      </button>
      <a class="btn btn-light me-2 px-3 fw-semibold" type="button" href="/signup">
            Sign Up
      </a>
</form>
@endsection

<div class="container">
      @include('partials.modal-login-perusahaan')
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
