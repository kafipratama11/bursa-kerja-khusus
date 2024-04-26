@extends('layouts.app')
@section('content')

@section('nav')

@endsection

<div class="container" style="min-height: 1000px">
      @include('partials.modal-login-user')
      @include('partials.modal-login-perusahaan')
      <div class="title-proses-rekrut fw-bold text-center mt-5 fs-2 mb-5">
            Mulai rekrutmen dalam 3 langkah
      </div>
      <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-2 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="d-flex justify-content-center align-items-center number-bg fw-bolder fs-3 bg-warning">1</div>
                        </div>
                        <div class="proses-rekrut fw-bolder mb-3">Daftar Online</div>
                        <div class="detail-proses-rekrut">Buat dan lengkapi profile perusahaan anda</div>
                  </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-2 px-5">
                        <div class="d-flex justify-content-center align-items-center mb-2">
                              <div class="d-flex justify-content-center align-items-center number-bg fw-bolder fs-3 bg-warning">2</div>
                        </div>
                        <div class="proses-rekrut fw-bolder mb-3">Akun Dalam Proses Verifikasi</div>
                        <div class="detail-proses-rekrut">Tunggu admin verifikasi akun perusahaan anda</div>
                  </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-2 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="d-flex justify-content-center align-items-center number-bg fw-bolder fs-3 bg-warning">3</div>
                        </div>
                        <div class="proses-rekrut fw-bolder mb-3">Kirim Pekerjaan</div>
                        <div class="detail-proses-rekrut">Kirim pekerjaan anda melalui form yang kami sediakan</div>
                  </div>
            </div>
      </div>
      <div class="row mt-5 justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12">
                  <a href="{{ route('employe-signup')}}" type="button" class="btn w-100 fw-medium btn-warning rounded-0">Buat Akun</a>
                  <div class="d-flex gap-1 justify-content-center align-items-center">
                        <hr class="w-100">
                        <div class="text-secondary fw-light" style="font-size: 13px">atau</div>
                        <hr class="w-100">
                  </div>
                  <a href=""></a>
                  <a href="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropE" class="btn w-100 fw-medium btn-secondary rounded-0">Masuk</a>
            </div>
      </div>
</div>
<div class="container">
      @include('partials.footer')
</div>
@endsection
