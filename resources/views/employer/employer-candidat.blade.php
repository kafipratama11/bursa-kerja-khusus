@extends('layouts.dashboard-employer')

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

<body class="bg-body-tertiary">
      <div class="container pt-5">
            <div class="row">
                  <div class="col-xl-8 col-md-12 col-sm-12">
                        <div class="card bg-white mb-3">
                              <div class="card-body ps-4">
                                    <div class="d-flex gap-4">
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
                                                      <div class="fw-semibold text-black fs-5">{{$dataU->name}}</div>
                                                      <div class="fw-light text-secondary" style="font-size: 12px">({{$dataU->profile_user->jk}})</div>
                                                </div>
                                                <div class="text-secondary">{{$dataU->profile_user->provinsi}},{{$dataU->profile_user->kota}}</div>
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
                                          <p>{{$dataU->profile_user->about}}</p>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Education</div>
                                    </div>
                                    @foreach ($dataU->education as $item)
                                          <div class="mb-2">
                                                <div class="fw-semibold" style="font-size: 14px">{{$item->nama_sekolah}}</div>
                                                <div class="fw-normal text-secondary" style="font-size: 14px">{{$item->jurusan}}</div>
                                                <div class="fw-light text-secondary" style="font-size: 12px">{{$item->tahun}}</div>                                               
                                          </div>
                                    @endforeach
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Experience</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-semibold" style="font-size: 14px">SMKN 4 Tangerang</div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">Rekayasa Perangkat Lunak</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">2020 - 2025</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="d-flex gap-2 align-items-center">
                                                <div class="fw-semibold" style="font-size: 14px">Universitas Indonesia</div>
                                          </div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">Ilmu Komunikasi</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">2025 - 2029</div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card mb-3">
                              <div class="card-body">
                                    <div>Skills</div>
                                    <div>
                                          Softskills :
                                          @foreach ($dataU->softskill as $key => $item)
                                          {{$item->skill}}
                                          @if (!$loop->last)
                                          ,
                                          @endif
                                          @endforeach
                                    </div>
                                    <div>
                                          Hardskills :
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
            <div id="copy-feedback-email">Email berhasil disalin!</div>
            <div id="copy-feedback">No telephone berhasil disalin!</div>
      </div>
</body>

@endsection
