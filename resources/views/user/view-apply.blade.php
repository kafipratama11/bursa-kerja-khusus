@extends('layouts.app')
@section('content')

<div class="container">
      <div class="mt-5">
            <div class="row">
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-5">
                        <div class="d-flex gap-4">
                              <div class="">
                                    <div class="position fw-medium" style="font-size: 20px">{{$apply->nama_loker}}</div>
                                    <div class="d-flex gap-2 align-items-center">
                                          <div class="nama-perusahaan text-secondary">{{$apply->nama_perusahaan}}</div>
                                          <div>-</div>
                                          <div class="text-secondary fw-light" id="myText" style="font-size: 13px">{{$apply->kota}}, {{$apply->provinsi}}</div>
                                    </div>
                                    <div class="mt-3 mb-4" style="font-size: 15px">
                                          <div class="d-flex gap-3 mb-2 align-items-center">
                                                <i class="bi bi-clock-fill text-secondary"></i>
                                                <div>dibuka sampai {{$apply->waktu}}</div>
                                          </div>
                                          <div class="d-flex gap-3 mb-2 align-items-center">
                                                <i class="bi bi-list-check text-secondary"></i>
                                                <div>{{$apply->bagian}}</div>
                                          </div>
                                    </div>
                                    <div>
                                          <div class="d-flex gap-3">
                                                <button type="button" disabled class="btn btn-dark rounded-pill d-flex gap-1 align-items-center justify-content-center px-4 fw-medium">Applied<i class="bi bi-check-lg"></i></button>
                                                <form action="{{route('user.delete-apply',['id' => $apply->id])}}" method="POST">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="btn btn-danger rounded-pill d-flex gap-1 align-items-center justify-content-center px-4 fw-medium">Canceled<i class="bi bi-x-lg"></i></button>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="pe-4">
                              <div>
                                    <div class="mt-5 fw-medium mb-2 text-black">About the job</div>
                                    <div class="text-secondary" style="font-size: 14px">
                                          {{$apply->deskripsi}}
                                    </div>
                              </div>
                              <div>
                                    <div class="mt-5 fw-medium mb-2 text-black">Job Requirement</div>
                                    <div class="text-secondary" style="font-size: 14px">
                                          {{$apply->requirement}}
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-4">
                        <div class="text-black mb-3 text-center">Loker lainnya dari perusahaan ini</div>
                        @foreach ($otherLoker as $item)
                        <div>
                              <a href="" class="link-underline link-underline-opacity-0">
                                    <div class="border-bottom pb-2 pt-2 px-4">
                                          <div>
                                                <div class="text-black fw-semibold" style="font-size: 15px">{{$item->nama_perusahaan}}</div>
                                                <div class="mt-1">
                                                      <div class="text-secondary fw-light" style="font-size: 14px">Jakarta Barat, Jakarta</div>
                                                      <div class="text-secondary fw-light" style="font-size: 14px">Contract</div>
                                                      <div class="text-secondary fw-light" style="font-size: 14px">Rp. 10.000.000/bulan</div>
                                                </div>
                                                <div class="mt-4 d-flex gap-2 align-items-center">
                                                      <div class="text-secondary fw-light" style="font-size: 12px">1 bulan yang lalu</div>
                                                      <div>-</div>
                                                      <div class="text-secondary fw-medium" style="font-size: 12px">29 Pelamar</div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>
                        @endforeach
                  </div>
            </div>
      </div>
</div>
@endsection
