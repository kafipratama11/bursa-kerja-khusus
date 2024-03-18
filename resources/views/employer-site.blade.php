@extends('layouts.app')
@section('content')

@section('nav')

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
                              <div class="number-bg fw-bolder fs-3 pt-1 bg-warning">1</div>
                        </div>
                        <div class="proses-rekrut fw-bolder mb-3">Daftar Online</div>
                        <div class="detail-proses-rekrut">Buat dan verifikasi akun dengan alamat email anda</div>
                  </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-5 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="number-bg fw-bolder fs-3 pt-1 bg-warning">2</div>
                        </div>
                        <div class="proses-rekrut fw-bolder mb-3">Lengkapi Profil Perusahaan</div>
                        <div class="detail-proses-rekrut">Isi info tentang profil perusahaan anda dengan lengkap</div>
                  </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12">
                  <div class="box-rekrutment text-center p-3 pt-5 rounded mt-5 px-5">
                        <div class="d-flex justify-content-center mb-2">
                              <div class="number-bg fw-bolder fs-3 pt-1 bg-warning">3</div>
                        </div>
                        <div class="proses-rekrut fw-bolder mb-3">Kirim Pekerjaan</div>
                        <div class="detail-proses-rekrut">Kirim pekerjaan anda melalui form yang kami sediakan</div>
                  </div>
            </div>
      </div>
      <div class="text-center mt-3">
            <a href="{{ route('employe-signup')}}" type="button" class="btn btn-regis-perusahaan px-5 fw-bolder btn-warning">Buat Akun</a>
      </div>
      <hr class="mt-5">
      @include('partials.footer')
</div>
@endsection
