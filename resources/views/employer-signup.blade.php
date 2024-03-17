@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center mt-4">
      <div class="card w-50 shadow">
            <div class="card-body px-5">
                  <div class="mb-4">
                        <div class="title-signup fw-bolder fs-3 text-center">Daftar</div>
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
                        <a href="" type="button" class="btn btn-signup w-100 mb-2 fw-medium ">Daftar</a>
                  </div>
                  <div class="text-center fw-medium mb-5">
                        <p>Sudah memiliki akun?<a href=""  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk Sekarang</a></p>
                  </div>
            </div>
      </div>
      @include('partials.modal-login-perusahaan')
</div>
@endsection
