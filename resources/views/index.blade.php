@extends('layouts.app')
@section('content')

@section('nav')
@endsection

<div class="">
      <div class="position-absolute">
            <img src="../../img/Frame_11.png" alt="" style="max-width: 100%">
      </div>
      <div class="container pt-5">
            @include('partials.modal-login-user')
            @guest
            <form class="d-none d-xl-block d-md-block" action="{{ route('search') }}" method="GET">
                  <div class="input-group mb-3 shadow">
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
                        @else
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
                                    @endguest
                              </div>
                        </form>
                        <form action="{{route('user.search')}}" method="GET" class="d-sm-none" method="GET">
                              <div class="row d-flex justify-content-center">
                                    <div class="col-xl-4 col-md-4 col-sm-12">
                                          <label for="formGroupExampleInput" class="form-label fw-bold">Posisi Yang Dicari</label>
                                          <input type="text" name="search" class="form-control py-3" id="formGroupExampleInput" placeholder="Cari Posisi Yang Anda Inginkan" />
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
                              
                              <div class="col-xl-4 col-md-4 col-sm-12 mb-2">
                                    <div class="card pt-2 px-3 fw-bold  card-sum">
                                          <div class="d-flex gap-2 justify-content-center">
                                                {{-- <i class="bi bi-person-fill"></i> --}}
                                                <p>LOUKER</p>
                                          </div>
                                          <div class="text-center d-flex justify-content-center align-items-center">
                                                <h2 class="z-3">{{$loker}}</h2>
                                                <i class="bi bi-person-fill position-absolute" style="font-size: 60px; color: #f1f1f1;"></i>
                                          </div>
                                          <hr />
                                    </div>
                              </div>
                              <div class="col-xl-4 col-md-4 col-sm-12 mb-2">
                                    <div class="card pt-2 px-3 fw-bold  card-sum">
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
                              <div class="col-xl-4 col-md-4 col-sm-12 mb-2">
                                    <div class="card pt-2 px-3 fw-bold  card-sum">
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

      <body class="" style="background-color: #fbfbfb;">
            <div class="container">
                  <div class="row mt-5 " style="padding-bottom: 100px;">
                        @if($data->isEmpty())
                        <div class="d-flex align-items-center justify-content-center">
                              <div style="width: 400px">
                                    @include('svg.ilustration-nodatafound')
                              </div>
                        </div>
                        @else
                        {{-- Tampilkan data yang ada --}}
                        @foreach ($data as $item)
                        <div class="col-xl-4 col-md-6 col-sm-12 my-3">
                              <a href="" class="link-underline link-underline-opacity-0 text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                    <div class="bg-white shadow-sm" style="border-radius: 18px">
                                          <div class="d-flex px-3 py-2 text-light align-items-center" style="border-radius: 18px 18px 0 0; background-color: #0E46A3;">
                                                <div style="font-size: 14px">{{$item->bagian}}</div>
                                                <div class="ms-auto" style="font-size: 12px">
                                                      @if (now()->toDateString() > $item->expired)
                                                      <div class="">Closed</div>
                                                      @else
                                                      <div class="">Opened</div>
                                                      @endif
                                                </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                                <div style="background-color: #E1F7F5; color:#0E46A3;" class="p-2 pb-1 pt-3">
                                                      <i class="bi bi-geo-alt-fill"></i>
                                                </div>
                                                <div class="p-2 fw-light pb-1 pt-3" style="font-size: 14px">{{ $item->kota_kabupaten }}</div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                                <div style="background-color: #E1F7F5; color:#0E46A3;" class="p-2 pb-1">
                                                      <i class="bi bi-building-fill"></i>
                                                </div>
                                                <div class="p-2 fw-light pb-1" style="font-size: 14px">{{ $item->nama_perusahaan }}</div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                                <div style="background-color: #E1F7F5; color:#0E46A3;" class="p-2 pb-1">
                                                      <i class="bi bi-clock-fill"></i>
                                                </div>
                                                <div class="p-2 fw-light pb-1" style="font-size: 14px">{{ $item->waktu }}</div>
                                          </div>
                                          <div class="d-flex align-items-center" style="border-radius: 0 0 18px 18px">
                                                <div style="background-color: #E1F7F5; color:#0E46A3; border-radius: 0 0 0 18px;" class="p-2 pb-3">
                                                      <i class="bi bi-cash-stack"></i>
                                                </div>
                                                <div class="p-2 fw-light pb-3" style="font-size: 14px">
                                                      @php
                                                      $gajiF = $item->gaji;
                                                      @endphp
                                                      Rp. {{$gaji_terformat = number_format($gajiF, 0, ',', '.')}}
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>
                        @include('partials.modal-loker')
                        @endforeach
                        @endif
                  </div>
            </div>
      </body>
      @endsection
