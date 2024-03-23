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
<div class="dropdown">
      <a class="dropdown-toggle text-light link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth
            {{ Auth::user()->name }}
            @endauth
      </a>

      <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark menu-sidebar" href="/employe/edit-profile">Profile</a></li>
            <li><a class="dropdown-item text-danger menu-sidebar" href="{{ route('employe-logout')}}">Logout</a></li>
      </ul>
</div>
@endsection

@section('content-admin')

@include('partials.navbar-dashboard-admin')

<div class="container">
      <div class="row mt-5">
            <div class="col-4">
                  <div class="">
                        <div class="card-body">
                              <div class="logo d-flex justify-content-center">
                                    <img src="{{ asset('storage/photo-employe/'.$dataE->image)}}" style="width: 100%" alt="">
                              </div>
                        </div>
                  </div>
                  <div class="fw-bolder mt-3 fs-4 mb-4 lh-sm">{{$dataE->name}}</div>
                  <div style="font-size: 14px">
                        <div class="d-flex gap-3 mb-2 align-items-center">
                              <i class="bi bi-geo-alt"></i>
                              <div>{{$dataE->lokasi}}</div>
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
                  <hr class="mt-4 mb-4">
                  <div style="font-size: 14px">
                        {{$dataE->deskripsi}}
                  </div>
            </div>
            <div class="col">
                  <div class="row mb-3">
                        <div class="col d-flex justify-content-start">
                              <div>
                                    <a class="btn btn-dark px-5 fw-semibold" href="{{ route('employe.new-loker', ['id' => $dataE->id]) }}" style="font-size: 12px" href="#" role="button">BUAT LOKER</a>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-6 mb-3">
                              <div class="card w-full" style="font-size: 14px">
                                    <div class="card-body">
                                          <div class="row">
                                                <div class="col-9">
                                                      <div class="fw-bolder"><a href="/view/loker-edit/kode-loker" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-100-hover link-dark">Employee Relations</a></div>
                                                </div>
                                                <div class="col">
                                                      <div class="text-end text-primary text-end fw-bolder">Aktif</div>
                                                </div>
                                          </div>
                                          <div class="text-secondary mt-2">Human Resource</div>
                                    </div>
                                    <div class="card-footer text-center text-secondary">
                                          12 Kandidat
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>
@endsection
