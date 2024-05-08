@extends('layouts.app')
@section('content')
@include('partials.modal-login-user')

<div class="container pb-5">
      <div class="row mt-5 justify-content-center">
            <div class="col-4">
                  <div class="d-flex justify-content-center mb-4">
                        <div class="card d-flex justify-content-center align-items-center rounded-pill border border-primary shadow" style="width: 270px; height: 270px;">
                              <div class="p-2">
                                    <div class="logo d-flex justify-content-center">
                                          @if ($data->image)
                                          <img class="w-100" src="{{ asset('storage/photo-employe/'.$data->image)}}" alt="">
                                          @else
                                          <div class="d-flex align-items-center justify-content-center fw-semibold" style="font-size: 54px">{{ $firstChar = str($data->name)->substr(0, 1); }}</div>
                                          @endif
                                          
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="mt-3 p-3 rounded" style="background-color: #E1F7F5;">
                        <div class="fw-semibold mb-2" style="color: #0E46A3;">{{$data->name}}</div>
                        <div class="ps-2" style="font-size: 14px">
                              <div class="d-flex gap-3 mb-2 align-items-center">
                                    <i class="bi bi-geo-alt"></i>
                                    <div id="myText">{{$data->lokasi}}</div>
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-envelope"></i>
                                    <div>{{$data->email}}</div>
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-telephone"></i>
                                    <div>{{$data->no_telp}}</div>
                              </div>
                        </div>
                  </div>
                  <div class="mt-3 p-3 rounded" style="background-color: #E1F7F5;">
                        <div class="fw-semibold mb-1" style="color: #0E46A3;">About {{$data->name}}</div>
                        <div class="ps-2" style="font-size: 12px">
                              {{$data->deskripsi}}
                        </div>
                  </div>
            </div>
            <div class="col">
                  <div class="row justify-content-center">
                        @if ($data->loker->isEmpty())
                        <img src="../../../img/no-data-grey.png" alt="" style="width: 350px">
                        <div class="mt-2 text-center text-secondary">Tidak ada loker</div>
                        @else
                        @foreach ($data->loker as $item)
                        <div class="col-xl-6 my-3">
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
                              @include('partials.modal-loker')
                              @include('partials.modal-login-user')
                        </div>
                        @endforeach
                        @endif
                  </div>
            </div>
      </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

@endsection
