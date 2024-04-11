@extends('layouts.app')
@section('content')

@section('nav')
@endsection

<div style="background-color:#fbfbfb;" class="pt-5">
      <div class="container">
            @include('partials.modal-login-user')
            <div class="row d-flex justify-content-center">
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <label for="formGroupExampleInput" class="form-label fw-bold">Posisi Yang Dicari</label>
                        <input type="text" class="form-control py-3" id="formGroupExampleInput" placeholder="Cari Posisi Yang Anda Inginkan" />
                  </div>
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <label for="klasifikasi" class="fw-bold form-label">Klasifikasi</label>
                        <select class="form-select py-3" aria-label="Default select example" id="klasifikasi">
                              <option selected>Piih Jurusan Anda</option>
                              <option value="1">RPL</option>
                              <option value="2">DPIB</option>
                              <option value="3">Geomatika</option>
                        </select>
                  </div>
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <label for="where" class="fw-bold form-label">Domisili</label>
                        <div class="d-flex gap-3">
                              <select class="form-select py-3" aria-label="Default select example" id="provinsi" onclick="loadProvinsi()">
                                    <option value="">Pilih Kota Anda</option>
                              </select>
                              <button class="btn btn-search px-5 text-light fw-semibold" type="submit">
                                    Cari
                              </button>
                        </div>
                  </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card pt-2 px-3 fw-bold">
                              <div class="d-flex gap-2 justify-content-center">
                                    <i class="bi bi-journal-text"></i>
                                    <p>LOWONGAN PEKERJAAN</p>
                              </div>
                              <div class="text-center">
                                    <h2>{{$loker}}</h2>
                              </div>
                              <hr />
                        </div>
                  </div>
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card pt-2 px-3 fw-bold">
                              <div class="d-flex gap-2 justify-content-center">
                                    <i class="bi bi-person-fill"></i>
                                    <p>ALUMNI</p>
                              </div>
                              <div class="text-center">
                                    <h2>{{$user}}</h2>
                              </div>
                              <hr />
                        </div>
                  </div>
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card pt-2 px-3 fw-bold">
                              <div class="d-flex gap-2 justify-content-center">
                                    <i class="bi bi-buildings-fill"></i>
                                    <p>PERUSAHAAN</p>
                              </div>
                              <div class="text-center">
                                    <h2>{{$employe}}</h2>
                              </div>
                              <hr />
                        </div>
                  </div>
            </div>
      </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fbfbfb" fill-opacity="1" d="M0,224L30,224C60,224,120,224,180,202.7C240,181,300,139,360,138.7C420,139,480,181,540,181.3C600,181,660,139,720,138.7C780,139,840,181,900,197.3C960,213,1020,203,1080,170.7C1140,139,1200,85,1260,74.7C1320,64,1380,96,1410,112L1440,128L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
<div class="container">
      <div class="row">
            @if($data->isEmpty())
            <div class="d-flex align-items-center justify-content-center">
                  <img src="../assets/images/no_data_found2.png" style="width: 500px" alt="">
            </div>
            @else
            {{-- Tampilkan data yang ada --}}
            @foreach ($data as $item)
            <div class="col-xl-6 col-md-12 col-sm-12">
                  <a href="" class="link-underline link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                        <div class="card card-loker mb-3">
                              <div class="card-body p-2 px-5 pt-3 pb-3">
                                    <div class="mb-2">
                                          <div class="position fw-medium fs-4">{{$item->nama_pekerjaan}}</div>
                                          <div class="nama-perusahaan">{{$item->nama_perusahaan}}</div>
                                    </div>
                                    <div class="row">
                                          <div class="col-1 text-end">
                                                <div class="vr h-100"></div>
                                          </div>
                                          <div class="col">
                                                <div class="mb-2">
                                                      <div class="where">{{$item->provinsi}},{{$item->kota_kabupaten}}</div>
                                                      <div class="salary">
                                                            Rp. {{$item->gaji}}
                                                      </div>
                                                      <div class="detail-position">
                                                            {{$item->bagian}}
                                                      </div>
                                                      <div class="detail-position">
                                                            {{$item->waktu}}
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="deskription text-secondary" style="font-size: 14px">
                                          {{$item->deskripsi}}
                                    </div>
                              </div>
                              <div class="card-footer bg-white">
                                    <div class="loker-post-day text-center fw-light">
                                          <small>Dibuka sampai tanggal {{$item->expired}}</small>
                                    </div>
                              </div>
                        </div>
                  </a>
                  @include('partials.modal-loker')
            </div>
            @endforeach  
            @endif
      </div>
      @include('partials.footer')
</div>
@endsection
