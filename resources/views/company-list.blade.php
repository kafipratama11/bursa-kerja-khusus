@extends('layouts.app')
@section('content')

@section('nav')

@endsection
@include('partials.modal-login-user')
<div class="container">
      <div class="row justify-content-center mt-5" style="min-height: 400px">
            @if($data->isEmpty())
            <div class="d-flex align-items-center justify-content-center">
                  <div style="width: 400px">
                        @include('svg.ilustration-nodatafound')
                  </div>
            </div>
            @else
            @foreach ($data as $item)
            <div class="col-xl-6 col-md-8 col-sm-12 mb-3">
                  @guest
                  <div class="card d-flex mb-2">
                        <div class="card-company-list d-flex" style="min-height: 170px">
                              <div class="d-flex align-items-center justify-content-center p-2">
                                    <div style="width: 130px">
                                          @if ($item->image)
                                          <img class="w-100" src="{{ asset('storage/photo-employe/'.$item->image)}}" alt="">
                                          @else
                                          <div class="d-flex align-items-center justify-content-center fw-semibold fs-1" style="">{{ $firstChar = str($item->name)->substr(0, 1); }}</div>
                                          @endif
                                    </div>
                              </div>
                              <div class="text-center vr"></div>
                              <div class="p-2 ps-3">
                                    <div class="fw-bolder fs-5 mb-2">{{$item->name}}</div>
                                    <div class="text-secondary d-flex align-items-center gap-2" style="font-size: 12px">
                                          <div style="min-width: 45px">Industri</div>
                                          <div>:</div>
                                          <div>Retail & Consumer Products</div>
                                    </div>
                                    <div class="text-secondary d-flex align-items-center gap-2" style="font-size: 12px">
                                          <div style="min-width: 45px">Lokasi</div>
                                          <div>:</div>
                                          <div>{{$item->lokasi}}</div>
                                    </div>
                                    <div class="text-secondary d-flex align-items-start gap-2" style="font-size: 12px">
                                          <div style="min-width: 45px">Alamat</div>
                                          <div>:</div>
                                          <div>Pacific Century Place Tower Lt. 26 SCBD (Sudirman Central Business District) Lot 10, Jl. Jend. Sudirman No.52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan</div>
                                    </div>
                                    <div class="h-auto mt-2 pe-3">
                                          <div class="h-100 d-flex align-items-end justify-content-center">
                                                <a class="link-underline link-underline-opacity-0 icon-link icon-link-hover" href="{{ route('profile-employer',['id'=>$item->id])}}" style="font-size: 14px">
                                                      Lihat Profile
                                                      <i class="bi bi-arrow-right mb-1"></i>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  @else
                  <div class="card d-flex mb-2">
                        <div class="card-company-list d-flex" style="min-height: 170px">
                              <div class="d-flex align-items-center justify-content-center p-2">
                                    <div style="width: 130px">
                                          @if ($item->image)
                                          <img class="w-100" src="{{ asset('storage/photo-employe/'.$item->image)}}" alt="">
                                          @else
                                          <div class="d-flex align-items-center justify-content-center fw-semibold fs-1" style="">{{ $firstChar = str($item->name)->substr(0, 1); }}</div>
                                          @endif
                                    </div>
                              </div>
                              <div class="text-center vr"></div>
                              <div class="p-2 ps-3">
                                    <div class="fw-bolder fs-5 mb-2">{{$item->name}}</div>
                                    <div class="text-secondary d-flex align-items-center gap-2" style="font-size: 12px">
                                          <div style="min-width: 45px">Industri</div>
                                          <div>:</div>
                                          <div>Retail & Consumer Products</div>
                                    </div>
                                    <div class="text-secondary d-flex align-items-center gap-2" style="font-size: 12px">
                                          <div style="min-width: 45px">Lokasi</div>
                                          <div>:</div>
                                          <div>{{$item->lokasi}}</div>
                                    </div>
                                    <div class="text-secondary d-flex align-items-start gap-2" style="font-size: 12px">
                                          <div style="min-width: 45px">Alamat</div>
                                          <div>:</div>
                                          <div>Pacific Century Place Tower Lt. 26 SCBD (Sudirman Central Business District) Lot 10, Jl. Jend. Sudirman No.52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan</div>
                                    </div>
                                    <div class="h-auto mt-2 pe-3">
                                          <div class="h-100 d-flex align-items-end justify-content-center">
                                                <a class="link-underline link-underline-opacity-0 icon-link icon-link-hover" href="{{ route('profile-employer',['id'=>$item->id])}}" style="font-size: 14px">
                                                      Lihat Profile
                                                      <i class="bi bi-arrow-right mb-1"></i>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  @endguest
            </div>
            @endforeach
            @endif
      </div>
      @include('partials.footer')
</div>

@endsection
