@extends('layouts.admin')

@include('partials.navbar-dashboard-admin')

@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/employe/index">HOME</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/employe/dashboard-employe">DASHBOARD</a>
            </li>
      </ul>
</div>
@endsection

@section('content-admin')
<div class="container">
      <form action="">
            <div class="card mt-5">
                  <div class="card-header text-center">Buat Lowongan Baru</div>
                  <div class="card-body px-5 pt-5">
                        <div class="row">
                              <div class="col-xl-4 col-md-3 col-sm-12">
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Posisi</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: Keuangan">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Sub Posisi</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="ex: Akuntan">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Kota</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="ex: Jakarta Barat, Jakarta">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Email</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="ex: namaperusahaan@gmail.com">
                                    </div>
                              </div>
                              <div class="col-xl-8 col-md-9 col-sm-12">
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Deskripsi Pekerjaan</label>
                                          <textarea class="form-control" name="jobdesc" rows="5" placeholder="Masukkan Job Desc"></textarea>
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Persyaratan Pekerjaan</label>
                                          <textarea class="form-control" name="jobrequirement" rows="5" placeholder="Masukkan Job Desc"></textarea>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="card-footer bg-white px-5">
                        <div class="d-flex justify-content-end">
                              <button class="btn btn-success px-5" type="submit">Buat</button>
                        </div>
                  </div>
            </div>
      </form>
      @include('partials.footer')
</div>

@endsection
