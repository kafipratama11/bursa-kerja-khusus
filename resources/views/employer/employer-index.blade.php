@extends('layouts.dashboard-employer')

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
<div class="dropdown">
      <div class="text-light link-underline link-underline-opacity-0">
            @auth
            {{ Auth::user()->name }}
            @endauth
      </div>
</div>
@endsection

@section('content-admin')

@include('partials.navbar-dashboard-admin')

<div class="container pb-5">
      <div class="row mt-5 justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="d-flex justify-content-center mb-4">
                        <div class="card d-flex justify-content-center align-items-center rounded-pill border border-primary shadow" style="width: 270px; height: 270px;">
                              <div class="p-2">
                                    <div class="logo d-flex justify-content-center">
                                          <img src="{{ asset('storage/photo-employe/'.$dataE->image)}}" style="width: 100%" alt="">
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="mt-3 p-3 rounded" style="background-color: #E1F7F5;">
                        <div class="fw-semibold mb-2" style="color: #0E46A3;">{{$dataE->name}}</div>
                        <div class="ps-2" style="font-size: 14px">
                              <div class="d-flex gap-3 mb-2 align-items-center">
                                    <i class="bi bi-geo-alt"></i>
                                    <div id="myText">{{$dataE->lokasi}}</div>
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-envelope"></i>
                                    <div>{{$dataE->email}}</div>
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-telephone"></i>
                                    <div>{{$dataE->no_telp}}</div>
                              </div>
                        </div>
                  </div>
                  <div class="mt-3 p-3 rounded mb-3" style="background-color: #E1F7F5;">
                        <div class="fw-semibold mb-1" style="color: #0E46A3;">About {{$dataE->name}}</div>
                        <div class="ps-2" style="font-size: 12px">
                              {{$dataE->deskripsi}}
                        </div>
                  </div>
            </div>
            <div class="col">
                  <div class="row mb-3">
                        <div class="col d-flex justify-content-start">
                              <div>
                                    <a class="btn px-5 text-light rounded-0 shadow fw-semibold" href="{{ route('employe.new-loker', ['id' => $dataE->id]) }}" style="font-size: 12px; background-color: #0E46A3;" role="button">BUAT LOKER</a>
                              </div>
                        </div>
                  </div>
                  <div class="row justify-content-center">
                        @if ($dataE->loker->isEmpty())
                              <img src="../../../img/no-data-grey.png" alt="" style="width: 350px">
                              <div class="mt-2 text-center text-secondary">Tidak ada loker</div>
                        @else
                        @foreach ($dataE->loker as $item)
                        {{-- <div class="col-6 mb-3">
                              <div class="card w-full" style="font-size: 14px">
                                    <div class="card-body">
                                          <div class="row">
                                                <div class="col-9">
                                                      <div class="fw-bolder"><a href="{{ route('employe.detail-loker', ['id' =>$item->id])}}" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-100-hover link-dark">{{$item->nama_pekerjaan}}</a></div>
                                                </div>
                                                <div class="col">
                                                      <div class="text-end text-primary text-end fw-bolder">{{$item->status}}</div>
                                                </div>
                                          </div>
                                          <div class="text-secondary mt-2">{{$item->bagian}}</div>
                                    </div>
                                    <div class="card-footer text-center text-secondary">
                                          12 Kandidat
                                    </div>
                              </div>
                        </div> --}}
                        <div class="col-xl-6 my-3">
                              <a href="{{ route('employe.detail-loker', ['id' =>$item->id])}}" class="link-underline link-underline-opacity-0 text-secondary">
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
                        @endforeach
                        @endif
                  </div>
            </div>
      </div>
      
</div>
@include('sweetalert::alert')
@if($message = Session::get('new_account'))
<script>
      Swal.fire({
            icon: "info"
            , title: "{{$message}}"
            , text: "Perusahaan anda sedang dalam verifikasi"
            , footer: "Tunggu beberapa saat"
      });

</script>
@endif
@endsection
