@extends('layouts.admin')
@section('content-admin')

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
<div class="text-white">
      @auth
      {{ Auth::user()->name }}
      @endauth
</div>
@endsection

@include('partials.navbar-dashboard-admin')
<div class="d-flex dashboard-content">
      <div class="left w-25 h-100 mt-5">
            <div class="kiri">
                  @include('partials.sidebar-dashboard-company')
            </div>
      </div>
      <div class="kanan w-75 mt-5">
            <div class="container content-body" style="width: 1000px">
                  <div class="d-flex mb-4">
                        <div class="d-flex justify-content-start gap-3">
                              <div class="box bg-white rounded mt-3  3 ps-3">
                                    <p class="pt-2">Total User</p>
                                    <div class="d-flex mt-2 align-items-center text-align-center">
                                          <i class="bi bi-bar-chart-fill"></i>
                                          <div class="total text-center">
                                                <p>
                                                      10
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="box bg-white rounded mt-3 ps-3">
                                    <p class="pt-2">Total User</p>
                                    <div class="d-flex mt-2 align-items-center text-align-center">
                                          <i class="bi bi-bar-chart-fill"></i>
                                          <div class="total text-center">
                                                <p>
                                                      10
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="box bg-white rounded mt-3 ps-3">
                                    <p class="pt-2">Total User</p>
                                    <div class="d-flex mt-2 align-items-center text-align-center">
                                          <i class="bi bi-bar-chart-fill"></i>
                                          <div class="total text-center">
                                                <p>
                                                      10
                                                </p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">dashboard</div>
                        <div class="tab-pane fade" id="list-loker" role="tabpanel" aria-labelledby="list-loker-list">loker</div>
                        <div class="tab-pane fade" id="list-apply" role="tabpanel" aria-labelledby="list-apply-list">apply</div>
                        <div class="tab-pane fade" id="list-candidat" role="tabpanel" aria-labelledby="list-candidat-list">candidat</div>
                  </div>
            </div>
      </div>
</div>
@endsection
