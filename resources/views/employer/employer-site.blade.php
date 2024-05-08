@extends('layouts.app')
@section('content')

@section('nav')

@endsection

@include('partials.modal-login-user')
@include('partials.modal-login-perusahaan')
{{-- <div class="container" style="min-height: 1000px">
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
</div> --}}
<div class="container pt-5">
      <div class="row justify-content-center align-items-center" style="height: 400px">
            <div class="col">
                  <div class="ps-4">
                        <div class="fw-semibold lh-1" style="font-size: 32px; color: #0E46A3;">Lorem ipsum dolor sit amet consectetur.</div>
                        <div style="font-size: 16px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab totam sequi expedita laboriosam numquam quod deserunt quaerat culpa, ut ipsam, minus obcaecati nisi odio quis molestiae itaque ad enim error?</div>
                        <a href="{{ route('employe-signup')}}" class="btn px-4 mt-3" style="background-color: #0E46A3; color: #E1F7F5;">Register now</a>
                  </div>
            </div>
            <div class="col justify-content-center d-flex">
                  <div>
                        <img src="../../img/Humaaans-Research.png" alt="" style="width: 500px">
                  </div>
            </div>
      </div>
</div>
<div class="w-100">
      <div class="text-center fw-light text-secondary mt-4" style="font-size: 14px">Trusted By Top Companies</div>
      <marquee behavior="" direction="left">
            <div class="d-flex gap-3">
                  <img src="../../img/bca.png" alt="" style="width: 160px">
                  <img src="../../img/bca.png" alt="" style="width: 160px">
                  <img src="../../img/bca.png" alt="" style="width: 160px">
            </div>
      </marquee>
</div>
<div class="align-items-center d-flex" style="height: 500px; background-color: #E1F7F5;">
      <div class="container">
            <div class="row align-items-center">
                  <div class="col-4 text-center">
                        <img src="../../img/Humaaans-Research.png" alt="" style="width: 300px">
                        <div style="font-size: 18px; color: #1E0342;" class="fw-semibold">Lorem ipsum dolor sit amet.</div>
                        <div style="font-size: 14px" class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius expedita nulla recusandae facere officiis, quo distinctio sunt enim aperiam quos numquam labore deleniti.</div>
                  </div>
                  <div class="col-4 text-center">
                        <img src="../../img/Humaaans-Research.png" alt="" style="width: 300px">
                        <div style="font-size: 18px; color: #1E0342;" class="fw-semibold">Lorem ipsum dolor sit amet.</div>
                        <div style="font-size: 14px" class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius expedita nulla recusandae facere officiis, quo distinctio sunt enim aperiam quos numquam labore deleniti.</div>
                  </div>
                  <div class="col-4 text-center">
                        <img src="../../img/Humaaans-Research.png" alt="" style="width: 300px">
                        <div style="font-size: 18px; color: #1E0342;" class="fw-semibold">Lorem ipsum dolor sit amet.</div>
                        <div style="font-size: 14px" class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius expedita nulla recusandae facere officiis, quo distinctio sunt enim aperiam quos numquam labore deleniti.</div>
                  </div>
            </div>
      </div>
</div>
<div class="pt-5" style="height: 500px; background-color: #ffffff;">
      <div class="container">
            <div class="row justify-content-center">
                  <div class="col-6">
                        <div style="background-image: linear-gradient(to bottom right, #0E46A3, #1E3D71); border-radius: 20px;" class="p-3 px-5 py-5 shadow">
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-light">Email address</label>
                                    <input type="email" class="form-control login-company-input bg-transparent text-light" id="exampleFormControlInput1" placeholder="Email">
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-light">Password</label>
                                    <input type="password" class="form-control login-company-input bg-transparent text-light" id="exampleFormControlInput1" placeholder="Enter password">
                              </div>
                              <div class="mt-5">
                                    <button class="btn w-100 fw-semibold mb-3" style="background-color: #E1F7F5; color:#0E46A3;">Login</button>
                                    <div class="w-100 text-center">
                                          <a class="fw-semibold text-center link-underline link-underline-opacity-0" href="" style="color:#E1F7F5;">Register</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
@endsection
