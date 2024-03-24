@extends('layouts.admin')

@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="{{ route('employe.employe')}}">HOME</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="{{ route('employe.dashboard-employe')}}">DASHBOARD</a>
            </li>
      </ul>
</div>
@endsection

@section('nav')
<div class="text-white">
      @auth
      {{ Auth::user()->name }}
      @endauth
</div>
@endsection

@include('partials.navbar-dashboard-admin')

@section('content-admin')
<div class="container">
      <form action="{{ route('employe.create-new-loker', ['id' => $data->id]) }}" method="POST">
            @csrf
            <div class="card mt-5">
                  <div class="card-header text-center text-white">Buat Lowongan Baru</div>
                  <div class="card-body px-5 pt-5">
                        <div class="row">
                              <div class="col-xl-4 col-md-3 col-sm-12">
                                    <input type="hidden" name="employe_id" class="form-control" id="exampleFormControlInput1" value="{{ $data->id}}"  placeholder="ex: Keuangan">
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Nama Pekerjaan</label>
                                          <input type="text" name="nama_pekerjaan" class="form-control" id="exampleFormControlInput1"  placeholder="ex: Keuangan">
                                    </div>
                                    @error('nama_pekerjaan')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Bagian</label>
                                          <input type="text" name="bagian" class="form-control" id="exampleFormControlInput2" placeholder="ex: backend Developer">
                                    </div>
                                    @error('bagian')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <input type="hidden" name="nama_perusahaan" class="form-control" id="exampleFormControlInput2" value="{{ $data->name}}" readonly placeholder="ex: Hostinger">
                                    <div class="mb-3" hidden>
                                          <label for="exampleFormControlInput2" class="form-label">Nama Perusahaan</label>
                                          <input type="text" name="nama_perusahaan" class="form-control" id="exampleFormControlInput2" value="{{ $data->name}}" readonly placeholder="ex: Hostinger">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Lokasi</label>
                                          <input type="text" name="lokasi" class="form-control" id="exampleFormControlInput2" placeholder="ex: Jakarta Barat, Jakarta">
                                    </div>
                                    @error('lokasi')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Waktu</label>
                                          <input type="text" name="waktu" class="form-control" id="exampleFormControlInput2" placeholder="ex: Full Time">
                                    </div>
                                    @error('waktu')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Gaji</label>
                                          <input type="text" name="gaji" class="form-control" id="exampleFormControlInput2" placeholder="ex: 50.000.000">
                                    </div>
                                    @error('gaji')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Email</label>
                                          <input type="email" name="email" class="form-control" id="exampleFormControlInput2" value="{{ $data->email}}" placeholder="ex: namaperusahaan@gmail.com">
                                          <input type="email" name="email" class="form-control" id="exampleFormControlInput2" value="{{ $data->email}}" placeholder="ex: namaperusahaan@gmail.com">
                                    </div>
                                    @error('email')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput2" class="form-label">Dibuka Sampai Tanggal</label>
                                          <input type="date" name="expired" class="form-control" id="exampleFormControlInput2">
                                    </div>
                                    @error('dibuka_sampai')
                                    <small>{{ $message }}</small>
                                    @enderror
                              </div>
                              <div class="col-xl-8 col-md-9 col-sm-12">
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Deskripsi Pekerjaan</label>
                                          <textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan Job Desc"></textarea>
                                    </div>
                                    @error('deskripsi')
                                    <small>{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Persyaratan Pekerjaan</label>
                                          <textarea class="form-control" name="requirement" rows="5" placeholder="Masukkan Job Desc"></textarea>
                                    </div>
                                    @error('requirement')
                                    <small>{{ $message }}</small>
                                    @enderror
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
