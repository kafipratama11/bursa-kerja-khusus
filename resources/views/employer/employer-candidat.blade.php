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
@include('partials.navbar-dashboard-admin')




@section('content-admin')

<body class="bg-body-tertiary">
      <div class="container pt-5">
            <div class="row justify-content-center">
                  <div class="col-xl-7 col-md-10 col-sm-12">
                        <div class="card bg-white mb-3">
                              <div class="card-body ps-4">
                                    <div class="d-flex gap-4 align-items-center">
                                          <div>
                                                @if ($dataU->profile_user->image)
                                                <a href="" data-bs-toggle="modal" data-bs-target="#detailphoto">
                                                      <img src="{{ asset('storage/photo-user/'.$dataU->profile_user->image)}}" alt="" class="rounded-pill ratio ratio-1x1 img-profile-user">
                                                </a>
                                                @else
                                                @if ($dataU->profile_user->jk === 'she/her')
                                                <a href="" data-bs-toggle="modal" data-bs-target="#detailphoto">
                                                      <img src="{{ asset('../../img/person-default-female.jpg')}}" alt="" class="rounded-pill ratio ratio-1x1 img-profile-user">
                                                </a>
                                                @else
                                                <a href="" data-bs-toggle="modal" data-bs-target="#detailphoto">
                                                      <img src="{{ asset('../../img/person-default.jpg')}}" alt="" class="rounded-pill ratio ratio-1x1 img-profile-user">
                                                </a>
                                                @endif
                                                @endif
                                          </div>
                                          <div>
                                                <div class="d-flex gap-2 align-items-center">
                                                      <div class="fw-semibold text-black" style="font-size: 16px">{{$dataU->name}}</div>
                                                      <div class="fw-light text-secondary" style="font-size: 12px">({{$dataU->profile_user->jk}})</div>
                                                </div>
                                                <div class="text-secondary" id="myText" style="font-size: 13px"> {{$dataU->profile_user->kota}}, {{$dataU->profile_user->provinsi}}</div>
                                                <div class="mt-2 text-secondary" style="font-size: 13px">
                                                      <div class="mt-2 text-secondary" style="font-size: 13px">
                                                            <div class="d-flex gap-3 align-items-center">
                                                                  <i class="bi bi-envelope"></i>
                                                                  <div class="d-flex gap-1 align-items-center">
                                                                        <div id="text-to-copy-email">{{$dataU->profile_user->email}}</div>
                                                                        <a id="copy-link-email" class="email text-secondary" href="#"><i class="bi bi-clipboard"></i></a>
                                                                  </div>
                                                            </div>
                                                            <div class="d-flex gap-3 align-items-center">
                                                                  <i class="bi bi-telephone"></i>
                                                                  <div class="d-flex gap-1 align-items-center">
                                                                        <div id="text-to-copy" hidden>{{$dataU->profile_user->no_telp}}</div>
                                                                        <div>{{$formattedPhoneNumber = implode('-', str_split($dataU->profile_user->no_telp, 4))}}</div>
                                                                        <a id="copy-link" class="text-secondary" href="#"><i class="bi bi-clipboard"></i></a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-3">
                                          <div class="fw-semibold mb-3">About</div>
                                    </div>
                                    <div style="font-size: 14px">
                                          <p>{!! nl2br(e($dataU->profile_user->about)) !!}</p>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Education</div>
                                    </div>
                                    @foreach ($dataU->education as $index => $item)
                                    <div class="d-flex pb-2 mb-2 gap-2">
                                          <div class="text-center pt-1">
                                                <div class="rounded-circle" style="height: 15px; width:15px; background-color:#0E46A3;"></div>
                                                @if ($index < count($dataU->education) - 1)
                                                      <div class="vr h-100" style="color: #0E46A3;"></div>
                                                      @endif
                                          </div>
                                          <div class="">
                                                <div class="fw-semibold" style="font-size: 14px">{{$item->nama_sekolah}}</div>
                                                <div class="fw-normal text-secondary" style="font-size: 14px">{{$item->jurusan}}</div>
                                                <div class="fw-light text-secondary" style="font-size: 12px">{{$item->tahun}}</div>
                                          </div>
                                    </div>
                                    @endforeach

                              </div>
                        </div>
                  </div>

                  <div class="col-xl-5 col-md-10 col-sm-12">
                        <div class="card mb-3">
                              <div class="card-body">
                                    <div class="fw-semibold mb-3">Skills</div>
                                    <div style="font-size: 13px">
                                          <div class="d-flex gap-2 mb-2">
                                                <div class="fw-medium" style="width: 70px">Softskill</div>
                                                <div>:</div>
                                                <div class="text-secondary">
                                                      @foreach ($dataU->softskill as $key => $item)
                                                      {{$item->skill}}
                                                      @if (!$loop->last)
                                                      ,
                                                      @endif
                                                      @endforeach
                                                </div>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <div class="fw-medium" style="width: 70px">Hardskills</div>
                                                <div>:</div>
                                                <div class="text-secondary">
                                                      @foreach ($dataU->hardskill as $key => $item)
                                                      {{$item->skill}}
                                                      @if (!$loop->last)
                                                      ,
                                                      @endif
                                                      @endforeach
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="card mb-3">
                              <div class="card-body">
                                    <div class="mb-2 fw-semibold">Experience</div>
                                    <div>
                                          @foreach ($dataU->experiences as $exp)
                                          <div class="mb-3">
                                                <div class="d-flex gap-2 align-items-center">
                                                      <div class="fw-semibold" style="font-size: 14px">{{$exp->nama_perusahaan}}</div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                      <div class="fw-normal text-secondary" style="font-size: 14px">{{$exp->nama_pekerjaan}}</div>
                                                      <div class="fw-light text-secondary" style="font-size: 12px">{{$exp->status}}</div>
                                                </div>
                                                <div class="fw-light text-secondary" style="font-size: 12px">{{$exp->lama_bekerja}}</div>
                                                <div class="fw-light text-secondary mt-3" style="font-size: 12px">{{$exp->deskripsi}}</div>
                                          </div>
                                          @endforeach
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div id="copy-feedback-email">Email berhasil disalin!</div>
            <div id="copy-feedback">No telephone berhasil disalin!</div>
      </div>
</body>

@endsection
