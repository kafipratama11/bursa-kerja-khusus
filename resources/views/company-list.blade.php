@extends('layouts.app')
@section('content')

@section('nav')
<form class="d-flex justify-content-end" role="search">
      <button class="btn btn-outline-warning me-2 px-5 fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Login
      </button>
      <a href="{{ route('employer-site')}}" class="btn btn-light me-2 fw-bolder" type="button">
            Employer Site
      </a>
</form>
@endsection

<div class="container">
      <div class="row mt-5">
            <div class="col-4 mb-3">
                  <a href="/profile-perusahaan" class="link-underline link-underline-opacity-0">
                        <div class="card card-company-list ">
                              <div class="pt-3 ps-4 p-3 pb-1">
                                    <div class="fw-bolder fs-5 mb-2">Shopee Indonesia</div>
                                    <div class="d-flex gap-2">
                                          <div class="vr h-full ms-3 p-1 text-body-tertiary rounded-pill"></div>
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
                              <div class="card-footer bg-light mt-2 ps-5">
                                    Jumlah loker : 3
                              </div>
                        </div>
                  </a>
            </div>
      </div>
</div>

@endsection
