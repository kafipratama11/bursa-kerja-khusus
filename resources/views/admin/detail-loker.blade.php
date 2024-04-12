@extends('layouts.dashboard-employer')

@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
        <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="{{ route('user.index-user')}}">DASHBOARD</a>
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

                        <!-- Modal 1-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit {{$data->nama_pekerjaan}} </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Bagian</label>
                                                      <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->nama_pekerjaan}}">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Posisi</label>
                                                      <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->bagian}}">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                                                      <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->provinsi}} , {{$data->kota_kabupaten}}">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Status</label>
                                                      <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->waktu}}">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Gaji</label>
                                                      <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->gaji}}">
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Selanjutnya</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        {{-- modal 2 --}}
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Analyst</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Deskripsi Pekerjaan</label>
                                                      <textarea type="text" class="form-control" id="exampleFormControlInput1" cols="30" rows="10" value="">{{ $data->deskripsi}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Persyaratan Pekerjaan</label>
                                                      <textarea type="text" class="form-control" id="exampleFormControlInput1" cols="30" rows="10" value="">{{ $data->requirement}}</textarea>
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
                              <div>{{ $data->provinsi}} , {{$data->kota_kabupaten}} </div>
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
                              Rp. {{ $data->gaji}}
                        </div>
                        <hr>
                        <div class="modal-jobdesc mb-4">
                              <div class="title-modal-jobdesc mb-2 fw-bolder">JOB DESCRIPTION</div>
                              <div class="detail-modal-jobdesc">
                                    <div>
                                          {{ $data->deskripsi}}
                                    </div>
                              </div>
                        </div>
                        <div class="modal-requirement mb-4">
                              <div class="title-modal-requirement mb-2 fw-bolder">
                                    JOB REQUIREMENT
                              </div>
                              <div class="detail-modal-requirement">
                                    <div>
                                          {{ $data->requirement}}
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
