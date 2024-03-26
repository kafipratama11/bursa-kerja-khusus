@extends('layouts.app')
@section('content')
<div class="container">
      <div class="row mt-5 pb-5">
            <div class="col-6">
                  <div class="">
                        <div class="mb-5">
                              <div class="nama-perusahaan fs-4 text-secondary mb-3 fw-bolder">{{$data->name}}</div>
                              <div class="row d-flex align-items-center">
                                    <div class="col-3 mt-2 me-5">
                                          <div class="card-profile-perusahaan">
                                                <img src="{{ asset('storage/photo-employe/'.$data->image)}}" alt="">
                                          </div>
                                    </div>
                                    <div class="col-7">
                                          <div class="">
                                                <div style="font-size: 15px">
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-geo-alt"></i>
                                                            {{$data->lokasi}}
                                                      </div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-envelope"></i>
                                                            {{$data->email}}
                                                      </div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-telephone"></i>
                                                            {{$data->no_telp}}
                                                      </div>
                                                      <small class="mb-2 fw-medium text-secondary">
                                                            Bergabung pada tanggal {{$data->created_at}}
                                                      </small>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-6">
                  <div>
                        <div class="mb-5">
                              <div class="fw-bolder mb-4 text-center text-secondary rounded p-2">TENTANG PERUSAHAAN</div>
                              <div class="row">
                                    <p class="deskripsi-perusahaan fw-light">
                                          {{$data->deskripsi}}
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
            <div>
                  <div class="fw-bolder mb-4 mt-5 text-center text-secondary rounded p-2">LOKER PERUSAHAAN</div>
                  <div class="row">
                        @foreach ($data->loker as $item)
                        <div class="col-6 mb-3">
                              <a class="card ps-4 p-3 pe-3 link-underline link-underline-opacity-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                    <div class="pt-2">
                                          <div class="d-flex">
                                                <div class="position fw-bolder mb-3">{{$item->nama_pekerjaan}}</div>
                                                <small class="ms-auto text-secondary">{{$item->created_at}}</small>
                                          </div>
                                          <div class="ps-4">
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      {{$item->lokasi}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-building"></i>
                                                      Rp.{{$item->gaji}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      {{$item->waktu}}
                                                </div>
                                                <small class="mb-2 mt-3 fw-medium text-body-tertiary">
                                                      Dibuka sampai tanggal {{$item->expired}}
                                                </small>
                                          </div>
                                    </div>
                              </a>
                              @include('partials.modal-loker')
                              @include('partials.modal-login-user')
                        </div>
                        @endforeach
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

@endsection