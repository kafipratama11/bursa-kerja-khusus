@extends('layouts.admin')
@section('content-admin')
@include('partials.navbar-dashboard-admin')

<div class="container">
      <div class="row mt-5">
            <div class="col">
                  <div class="fw-semi-bold fs-3 text-secondary mb-3">Data Analyst</div>
                  <div style="font-size: 14px" class="text-secondary">
                        <div class="d-flex gap-3 mb-2">
                              <i class="bi bi-geo-alt"></i>
                              <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, nesciunt.</div>
                        </div>
                        <div class="d-flex gap-3 mb-2">
                              <i class="bi bi-envelope"></i>
                              <div>Lorem ipsum dolor sit </div>
                        </div>
                        <div class="d-flex gap-3 mb-2">
                              <i class="bi bi-telephone"></i>
                              <div>0813-9827-1374</div>
                        </div>
                        <div class="d-flex gap-3 mb-2">
                              <i class="bi bi-clock"></i>
                              Full Time
                        </div>
                        <div class="d-flex gap-3 mb-2">
                              <i class="bi bi-cash-stack"></i>
                              Rp. 4,500,000 - Rp. 5,000,000
                        </div>
                        <hr>
                        <div class="modal-jobdesc mb-4">
                              <div class="title-modal-jobdesc mb-2 fw-bolder">JOB DESCRIPTION</div>
                              <div class="detail-modal-jobdesc">
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                              </div>
                        </div>
                        <div class="modal-requirement mb-4">
                              <div class="title-modal-requirement mb-2 fw-bolder">
                                    JOB REQUIREMENT
                              </div>
                              <div class="detail-modal-requirement">
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col">
                  <div class="fw-bolder text-secondary fs-4 text-center bg-body-tertiary mb-3">Kandidat</div>
                  <div class="card">
                        <div class="card-body">
                              <div class="d-flex gap-2">
                                    <div>
                                          <img src="../../img/bg_iu.jpg" width="65px" height="65px" class="rounded"  alt="">
                                    </div>
                                    <div class="fw-semibold text-secondary">Krisna Saputra</div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>

@endsection
