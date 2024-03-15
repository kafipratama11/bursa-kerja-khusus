@extends('layouts.app')
@section('content')
@include('partials.navbar-tiga')
<div class="container d-flex justify-content-center mt-4">
      <div class="card w-50 shadow">
            <div class="card-body px-5">
                  <div class="mb-5">
                        <div class="title-signup fw-bolder fs-3 text-center">Daftar</div>
                        <div class="subtitle-signup text-center fw-semibold">Sebagai Perusahaan</div>
                  </div>
                  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Perusahaan">
                  </div>
                  <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                  </div>
                  <div class="">
                        <button type="button" class="btn btn-signup w-100 mb-2 fw-medium ">Daftar</button>
                  </div>
                  <div class="text-center fw-medium mb-5">
                        <p>Sudah memiliki akun?<a href="">Masuk Sekarang</a></p>
                  </div>
            </div>
      </div>
</div>
@endsection
