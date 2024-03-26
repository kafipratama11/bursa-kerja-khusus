@extends('layouts.app')
@section('content')

@section('nav')
@endsection

<div class="container">
      @include('partials.modal-login-user')
      <div class="row mt-5 d-flex justify-content-center">
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <label for="formGroupExampleInput" class="form-label fw-bold">Posisi Yang Dicari</label>
                  <input type="text" class="form-control py-3" id="formGroupExampleInput" placeholder="Cari Posisi Yang Anda Inginkan" />
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <label for="klasifikasi" class="fw-bold form-label">Klasifikasi</label>
                  <select class="form-select py-3" aria-label="Default select example" id="klasifikasi">
                        <option selected>Piih Jurusan Anda</option>
                        <option value="1">RPL</option>
                        <option value="2">DPIB</option>
                        <option value="3">Geomatika</option>
                  </select>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <label for="where" class="fw-bold form-label">Domisili</label>
                  <div class="d-flex gap-3">
                        <select class="form-select py-3" aria-label="Default select example" id="where">
                              <option selected>Pilih Kota Anda</option>
                              <option value="1">Tangerang</option>
                              <option value="2">Malang</option>
                              <option value="3">Jogja</option>
                        </select>
                        <button class="btn btn-search px-5 text-light fw-semibold" type="submit">
                              Cari
                        </button>
                  </div>
            </div>
      </div>
      <div class="row d-flex justify-content-center mt-5">
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <div class="card pt-2 px-3 fw-bold">
                        <div class="d-flex gap-2 justify-content-center">
                              <i class="bi bi-journal-text"></i>
                              <p>LOWONGAN PEKERJAAN</p>
                        </div>
                        <div class="text-center">
                              <h2>56</h2>
                        </div>
                        <hr />
                  </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <div class="card pt-2 px-3 fw-bold">
                        <div class="d-flex gap-2 justify-content-center">
                              <i class="bi bi-person-fill"></i>
                              <p>ALUMNI</p>
                        </div>
                        <div class="text-center">
                              <h2>1208</h2>
                        </div>
                        <hr />
                  </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                  <div class="card pt-2 px-3 fw-bold">
                        <div class="d-flex gap-2 justify-content-center">
                              <i class="bi bi-buildings-fill"></i>
                              <p>PERUSAHAAN</p>
                        </div>
                        <div class="text-center">
                              <h2>27</h2>
                        </div>
                        <hr />
                  </div>
            </div>
      </div>
      <div class="row mt-5">
            @foreach ($data as $item)
            <div class="col-xl-6 col-md-12 col-sm-12">
                  <a href="" class="link-underline link-underline-opacity-0" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                        <div class="card card-loker mb-3">
                              <div class="card-body p-2 px-5 pt-3 pb-3">
                                    <div class="mb-2">
                                          <div class="position fw-medium fs-4">{{$item->nama_pekerjaan}}</div>
                                          <div class="nama-perusahaan">{{$item->nama_perusahaan}}</div>
                                    </div>
                                    <div class="row">
                                          <div class="col-1 text-end">
                                                <div class="vr h-100"></div>
                                          </div>
                                          <div class="col">
                                                <div class="mb-2">
                                                      <div class="where">{{$item->lokasi}}</div>
                                                      <div class="salary">
                                                            Rp. {{$item->gaji}}
                                                      </div>
                                                      <div class="detail-position">
                                                            {{$item->bagian}}
                                                      </div>
                                                      <div class="detail-position">
                                                            {{$item->waktu}}
                                                      </div>
                                                </div>
                                                <div class="deskription text-secondary" style="font-size: 14px">
                                                      {{$item->deskripsi}}
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-footer">
                                    <div class="loker-post-day text-center">Dibuka sampai tanggal {{$item->expired}}</div>
                              </div>
                        </div>
                  </a>
                  @include('partials.modal-loker')
            </div>
            @endforeach
      </div>
      @include('partials.footer')
</div>
@endsection