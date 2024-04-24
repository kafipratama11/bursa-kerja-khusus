@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center mt-4 pb-5">
      <div class="card shadow-sm">
            <form action="{{ route('employe-register')}}" method="POST">
                  @csrf
                  <div class="card-body px-5 fw-medium row" style="font-size: 14px">
                        <div class="mb-4">
                              <div class="title-signup fw-bolder fs-3 text-center">Daftar</div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" maxlength="50" value="{{old('name')}}">
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Industri</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" maxlength="50" value="{{old('name')}}">
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="" maxlength="100" value="{{old('email')}}">
                              </div>
                              @error('email')
                              <small>{{ $message }}</small>
                              @enderror
                              @error('name')
                              <small>{{ $message }}</small>
                              @enderror
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input class="form-control" id="inputPassword" placeholder="">
                              </div>
                              @error('password')
                              <small>{{ $message }}</small>
                              @enderror
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                              <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Lokasi</label>
                                    <select class="form-control" name="lokasi" id="provinsi">
                                          <option>Pilih Provinsi Anda</option>
                                    </select>
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="inputPassword" maxlength="100" placeholder="">
                              </div>
                              @error('lokasi')
                              <small>{{ $message }}</small>
                              @enderror
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No. Telepon</label>
                                    <input type="text" name="no_telp" class="form-control" id="inputPassword" maxlength="12" placeholder="">
                              </div>
                              @error('no_telp')
                              <small>{{ $message }}</small>
                              @enderror
                              <div class="mb-5">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Perusahaan</label>
                                    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" id="inputPassword" rows="7"></textarea>
                              </div>
                              @error('deskripsi')
                              <small>{{ $message }}</small>
                              @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                              <button type="submit" class="btn btn-signup w-50 mb-2 fw-medium rounded-pill">Daftar</button>
                        </div>
                        <div class="text-center fw-medium mb-5" style="font-size: 16px">
                              <p class="text-secondary">Sudah memiliki akun?<a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk Sekarang</a></p>
                        </div>
                  </div>
            </form>
      </div>
      @include('partials.modal-login-perusahaan')
</div>
@endsection
