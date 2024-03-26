@extends('layouts.app')
@section('content')

@section('nav')

@endsection
@include('partials.modal-login-user')
<div class="container">
      <div class="row mt-5">
            <div class="col-6 mb-3">
                  @guest
                  <a href="/profile-perusahaan" class="link-underline link-underline-opacity-0">
                        <div class="card card-company-list ">
                              <div class="pt-3 ps-4 p-3 pb-1">
                                    <div class="fw-bolder fs-5 mb-2">Shopee Indonesia</div>
                                    <div class="ps-3">
                                          <div style="font-size: 14px" class="fw-light">
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      Yogyakarta, DI Yogyakarta
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-building"></i>
                                                      shopeeind@yahoo.co.id
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      085174140161
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      Jl. Pegangsaan Timur No. 1 Lorem ipsum dolor sit.
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-footer bg-white mt-2 ps-5">
                                    <small>Jumlah loker : 3</small>
                              </div>
                        </div>
                  </a>
                  @else
                  <a href="/user/profile-perusahaan" class="link-underline link-underline-opacity-0">
                        <div class="card card-company-list ">
                              <div class="pt-3 ps-4 p-3 pb-1">
                                    <div class="fw-bolder fs-5 mb-2">Shopee Indonesia</div>
                                    <div class="d-flex gap-2">
                                          <div class="vr ms-3 p-1 text-body-tertiary rounded-pill"></div>
                                          <div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      Yogyakarta, DI Yogyakarta
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-building"></i>
                                                      shopeeind@yahoo.co.id
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      085174140161
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      Jl. Pegangsaan Timur No. 1 Lorem ipsum dolor sit.
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-footer bg-white mt-2 ps-5">
                                    <small>Jumlah loker : 3</small>
                              </div>
                        </div>
                  </a>
                  @endguest
            </div>
      </div>
      @include('partials.footer')
</div>

@endsection
