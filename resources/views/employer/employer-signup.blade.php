@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center mt-4">
      <div class="card w-50 shadow">
            <form action="{{ route('employe-register')}}" method="POST">
                  @csrf
                  <div class="card-body px-5">
                        <div class="mb-4">
                              <div class="title-signup fw-bolder fs-3 text-center">Daftar</div>
                        </div>
                        <div class="mb-3">
                        </div>
                        <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Perusahaan" value="{{old('name')}}">
                        </div>
                        @error('name')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-4">
                              <label for="exampleFormControlInput1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukan Password Perusahaan anda">
                        </div>
                        @error('password')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-3">
                              <label for="exampleFormControlInput2" class="form-label">Lokasi</label>
                             <select class="form-control" name="lokasi" id="provinsi">
                              <option>Pilih Provinsi Anda</option>
                             </select>
                        </div>
                        @error('lokasi')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-4">
                              <label for="exampleFormControlInput1" class="form-label">no Telepon</label>
                              <input type="text" name="no_telp" class="form-control" id="inputPassword" placeholder="Masukan Password Perusahaan anda">
                        </div>
                        @error('no_telp')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-4">
                              <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                              <input type="text" name="deskripsi" class="form-control" id="inputPassword" placeholder="Masukan Password Perusahaan anda">
                        </div>
                        @error('deskripsi')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="">
                              <button type="submit" class="btn btn-signup w-100 mb-2 fw-medium ">Daftar</button>
                        </div>
                        <div class="text-center fw-medium mb-5">
                              <p>Sudah memiliki akun?<a href="" class="text-dark"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk Sekarang</a></p>
                        </div>
                  </div>
            </form>
      </div>
      @include('partials.modal-login-perusahaan')
</div>
@endsection
