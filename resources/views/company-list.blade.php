@extends('layouts.app')
@section('content')

@section('nav')

@endsection
@include('partials.modal-login-user')
<body class="" style="background-color: #fbfbfb;">
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
                        <div class="card shadow-sm border-0 border-start d-flex mb-2" style="border-radius: 15px" style="background-color: #0E46A3">
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
                                    <div class="p-2 ps-3 shadow" style="background-image: linear-gradient(to bottom right, #0E46A3, #1E3D71); border-radius: 15px;">
                                          <div class="fw-bolder text-light mb-2" style="font-size: 16px">{{$item->name}}</div>
                                          <div class="text-light d-flex align-items-center gap-2" style="font-size: 12px">
                                                <div style="min-width: 45px">Industri</div>
                                                <div>:</div>
                                                <div class="fw-light">{{$item->industri}}</div>
                                          </div>
                                          <div class="text-light d-flex align-items-center gap-2" style="font-size: 12px">
                                                <div style="min-width: 45px">Lokasi</div>
                                                <div>:</div>
                                                <div class="text-capitalized fw-light">{{$item->lokasi}}</div>
                                          </div>
                                          <div class="text-light d-flex align-items-start gap-2" style="font-size: 12px">
                                                <div style="min-width: 45px">Alamat</div>
                                                <div>:</div>
                                                <div class="fw-light">{{$item->alamat}}</div>
                                          </div>
                                          <div class="h-auto mt-2 pe-3">
                                                <div class="h-100 d-flex align-items-end justify-content-center">
                                                      <a class="link-underline link-underline-opacity-0 icon-link link-light icon-link-hover" href="{{ route('profile-employer',['id'=>$item->id])}}" style="font-size: 14px">
                                                            Lihat Profile
                                                            <i class="bi bi-arrow-right mb-1"></i>
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        @else
                        <div class="card shadow-sm border-0 border-start d-flex mb-2" style="border-radius: 15px" style="background-color: #0E46A3">
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
                                    <div class="p-2 ps-3 shadow" style="background-image: linear-gradient(to bottom right, #0E46A3, #1E3D71); border-radius: 15px;">
                                          <div class="fw-bolder text-light mb-2" style="font-size: 16px">{{$item->name}}</div>
                                          <div class="text-light d-flex align-items-center gap-2" style="font-size: 12px">
                                                <div style="min-width: 45px">Industri</div>
                                                <div>:</div>
                                                <div class="fw-light">{{$item->industri}}</div>
                                          </div>
                                          <div class="text-light d-flex align-items-center gap-2" style="font-size: 12px">
                                                <div style="min-width: 45px">Lokasi</div>
                                                <div>:</div>
                                                <div class="text-capitalized fw-light">{{$item->lokasi}}</div>
                                          </div>
                                          <div class="text-light d-flex align-items-start gap-2" style="font-size: 12px">
                                                <div style="min-width: 45px">Alamat</div>
                                                <div>:</div>
                                                <div class="fw-light">{{$item->alamat}}</div>
                                          </div>
                                          <div class="h-auto mt-2 pe-3">
                                                <div class="h-100 d-flex align-items-end justify-content-center">
                                                      <a class="link-underline link-underline-opacity-0 icon-link link-light icon-link-hover" href="{{ route('profile-employer',['id'=>$item->id])}}" style="font-size: 14px">
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
      </div>
</body>

@endsection
