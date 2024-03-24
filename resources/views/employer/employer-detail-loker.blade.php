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
<div class="text-white">
      @auth
      {{ Auth::user()->name }}
      @endauth
</div>
@endsection

@include('partials.navbar-dashboard-admin')
@section('content-admin')
<div class="container">
      <div class="row mt-5">
            <div class="col">
                  <div class="d-flex gap-2">
                        <div class="fw-semi-bold fs-3 text-dark mb-3">{{$data->nama_pekerjaan}}</div>
                        <!-- Button trigger modal -->
                        <a type="button" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover link-offset-2 pt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="bi bi-pen"></i>
                              edit
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Analyst</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                                                      <input type="text" class="form-control" id="exampleFormControlInput1" value="Jl. Melati 3 No. 24 Cengkareng Barat">
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div style="font-size: 14px" class="text-secondary">
                        <div class="d-flex gap-3 mb-2 align-items-center">
                              <i class="bi bi-building"></i>
                              <div>{{ $data->bagian}}</div>
                        </div>
                        <div class="d-flex gap-3 mb-2 align-items-center">
                              <i class="bi bi-geo-alt"></i>
                              <div>{{ $data->lokasi}}</div>
                        </div>
                        <div class="d-flex gap-3 mb-2 align-items-center">
                              <i class="bi bi-envelope"></i>
                              <div>{{ $data->email}}</div>
                        </div>
                        <div class="d-flex gap-3 mb-2 align-items-center">
                              <i class="bi bi-clock"></i>
                              {{ $data->waktu}}
                        </div>
                        <div class="d-flex gap-3 mb-2 align-items-center">
                              <i class="bi bi-cash-stack"></i>
                              Rp.{{ $data->gaji}}
                        </div>
                        <hr>
                        <div class="modal-jobdesc mb-4">
                              <div class="title-modal-jobdesc mb-2 fw-bolder">JOB DESCRIPTION</div>
                              <div class="detail-modal-jobdesc">
                                    <div>
                                          > {{ $data->deskripsi}}
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
                                          > {{ $data->requirement}}
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
                  <div style="max-height: 400px" class="overflow-auto">
                        <a href="/view/loker-edit/kode-loker/kode-candidat" class="link-underline link-underline-opacity-0">
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <div class="d-flex gap-3">
                                                <div>
                                                      <img src="../../img/bg_iu.jpg" width="70px" height="70px" class="rounded" alt="">
                                                </div>
                                                <div>
                                                      <div class="fw-semibold text-secondary">Krisna Saputra</div>
                                                      <div class="mt-1">
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-envelope"></i>
                                                                  <div>Krisnasptr@gmail.com</div>
                                                            </div>
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-telephone"></i>
                                                                  <div>0897-9142-4031</div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </a>
                        <a href="/view/loker-edit/kode-loker/kode-candidat" class="link-underline link-underline-opacity-0">
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <div class="d-flex gap-3">
                                                <div>
                                                      <img src="../../img/bg_iu.jpg" width="70px" height="70px" class="rounded" alt="">
                                                </div>
                                                <div>
                                                      <div class="fw-semibold text-secondary">Krisna Saputra</div>
                                                      <div class="mt-1">
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-envelope"></i>
                                                                  <div>Krisnasptr@gmail.com</div>
                                                            </div>
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-telephone"></i>
                                                                  <div>0897-9142-4031</div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </a>
                        <a href="/view/loker-edit/kode-loker/kode-candidat" class="link-underline link-underline-opacity-0">
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <div class="d-flex gap-3">
                                                <div>
                                                      <img src="../../img/bg_iu.jpg" width="70px" height="70px" class="rounded" alt="">
                                                </div>
                                                <div>
                                                      <div class="fw-semibold text-secondary">Krisna Saputra</div>
                                                      <div class="mt-1">
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-envelope"></i>
                                                                  <div>Krisnasptr@gmail.com</div>
                                                            </div>
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-telephone"></i>
                                                                  <div>0897-9142-4031</div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </a>
                        <a href="/view/loker-edit/kode-loker/kode-candidat" class="link-underline link-underline-opacity-0">
                              <div class="card mb-3">
                                    <div class="card-body">
                                          <div class="d-flex gap-3">
                                                <div>
                                                      <img src="../../img/bg_iu.jpg" width="70px" height="70px" class="rounded" alt="">
                                                </div>
                                                <div>
                                                      <div class="fw-semibold text-secondary">Krisna Saputra</div>
                                                      <div class="mt-1">
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-envelope"></i>
                                                                  <div>Krisnasptr@gmail.com</div>
                                                            </div>
                                                            <div class="d-flex gap-3 align-items-center text-secondary" style="font-size: 14px">
                                                                  <i class="bi bi-telephone"></i>
                                                                  <div>0897-9142-4031</div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </a>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>

@endsection
