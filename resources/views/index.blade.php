@extends('layouts.app')
@section('content')

@section('nav')
@endsection

<div class="pt-5">
      <div class="container">
            @include('partials.modal-login-user')
            <form class="d-none d-xl-block d-md-block" action="{{ route('user.search') }}" method="GET">
                  <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control py-3" placeholder="Search Job" aria-label="Username" aria-describedby="basic-addon1">
                        <select class="form-select py-3" aria-label="Username" aria-describedby="basic-addon1" name="jurusan" id="klasifikasi">
                              <option selected>Pilih Jurusan</option>
                              @foreach ($jurusan as $item)
                              <option id="myText">
                                    {{$item->jurusan}}
                              </option>
                              @endforeach
                        </select>
                        <select class="form-select py-3" aria-label="Default select example" name="provinsi" aria-describedby="basic-addon1" id="provinsi" onclick="loadProvinsi()">
                              <option value="">Pilih Kota Anda</option>
                        </select>
                        <button class="btn btn-search px-5 text-light fw-semibold" type="submit">
                              Cari
                        </button>
                  </div>
            </form>
            <form action="{{route('user.search')}}" method="GET" class="d-sm-none">
                  <div class="row d-flex justify-content-center">
                        <div class="col-xl-4 col-md-4 col-sm-12">
                              <label for="formGroupExampleInput" class="form-label fw-bold">Posisi Yang Dicari</label>
                              <input type="text" name="search" class="form-control py-3" id="formGroupExampleInput" placeholder="Cari Posisi Yang Anda Inginkan"/>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                              <label for="klasifikasi" class="fw-bold form-label">Klasifikasi</label>
                              <select class="form-select py-3" aria-label="Default select example" name="jurusan" id="klasifikasi">
                                    <option selected>Pilih Jurusan</option>
                                    @foreach ($jurusan as $item)
                                    <option id="myText">
                                          {{$item->jurusan}}
                                    </option>
                                    @endforeach
                              </select>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                              <label for="where" class="fw-bold form-label">Domisili</label>
                              <div class="d-flex gap-3">
                                    <select class="form-select py-3" aria-label="Default select example" name="provinsi" id="provinsi" onclick="loadProvinsi()">
                                          <option value="">Pilih Kota Anda</option>
                                    </select>
                                    <button class="btn btn-search px-5 text-light fw-semibold" type="submit">
                                          Cari
                                    </button>
                              </div>
                        </div>
                  </div>
            </form>
            <div class="row d-flex justify-content-center mt-5">
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card pt-2 px-3 fw-bold">
                              <div class="d-flex gap-2 justify-content-center">
                                    {{-- <i class="bi bi-journal-text"></i> --}}
                                    <p>LOWONGAN</p>
                              </div>
                              <div class="text-center d-flex justify-content-center align-items-center">
                                    <h2 class="z-3">{{$loker}}</h2>
                                    <i class="bi bi-journal-text position-absolute" style="font-size: 50px; color: #f1f1f1;"></i>
                              </div>
                              <hr/>
                        </div>
                  </div>
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card pt-2 px-3 fw-bold">
                              <div class="d-flex gap-2 justify-content-center">
                                    {{-- <i class="bi bi-person-fill"></i> --}}
                                    <p>ALUMNI</p>
                              </div>
                              <div class="text-center d-flex justify-content-center align-items-center">
                                    <h2 class="z-3">{{$user}}</h2>
                                    <i class="bi bi-person-fill position-absolute" style="font-size: 60px; color: #f1f1f1;"></i>
                              </div>
                              <hr />
                        </div>
                  </div>
                  <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="card pt-2 px-3 fw-bold">
                              <div class="d-flex gap-2 justify-content-center">
                                    {{-- <i class="bi bi-buildings-fill"></i> --}}
                                    <p>PERUSAHAAN</p>
                              </div>
                              <div class="text-center d-flex justify-content-center align-items-center">
                                    <h2 class="z-3">{{$employe}}</h2>
                                    <i class="bi bi-buildings-fill position-absolute" style="font-size: 50px; color: #f1f1f1;"></i>
                              </div>
                              <hr />
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="container">
      <div class="row mt-5">
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
                                                <div class="mb-2" style="font-size: 12px">
                                                      <div class="where d-flex gap-1 align-items-center">
                                                            <div id="myText">{{$item->kota_kabupaten}},</div>
                                                            <div>{{$item->provinsi}}</div>
                                                      </div>
                                                      <div class="salary">
                                                            @php
                                                            $gajiF = $item->gaji;
                                                            @endphp
                                                            Rp. {{$gaji_terformat = number_format($gajiF, 0, ',', '.')}}
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
                                    <div class="deskription text-secondary text-truncate" style="font-size: 14px">
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
