@extends('layouts.app')
@section('content')

<div class="container">
      <div class="mt-5">
            <div class="row">
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-5">
                        <div class="d-flex gap-4">
                              <div class="">
                                    <div class="position fw-medium" style="font-size: 20px">{{$loker->nama_pekerjaan}}</div>
                                    <div class="d-flex gap-2 align-items-center">
                                          <div class="nama-perusahaan text-secondary">{{$loker->nama_perusahaan}}</div>
                                          <div>-</div>
                                          <div class="text-secondary fw-light">{{$loker->provinsi}},{{$loker->kota_kabupaten}}</div>
                                    </div>
                                    <div class="mt-3 mb-4" style="font-size: 15px">
                                          <div class="d-flex gap-3 mb-2 align-items-center">
                                                <i class="bi bi-clock-fill text-secondary"></i>
                                                <div>{{$loker->waktu}}</div>
                                          </div>
                                          <div class="d-flex gap-3 mb-2 align-items-center">
                                                <i class="bi bi-list-check text-secondary"></i>
                                                <div>{{$loker->bagian}}</div>
                                          </div>
                                    </div>
                                    <div>
                                          <button type="button" class="btn btn-primary rounded-pill d-flex gap-1 align-items-center justify-content-center px-4 fw-medium" data-bs-toggle="modal" data-bs-target="#modalapply1">Apply<i class="bi bi-box-arrow-in-up-right"></i></button>
                                          <div class="modal fade" id="modalapply1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                      <div class="modal-content">
                                                            <form action="{{route('user.apply-loker',['id' => $loker->id])}}" method="POST" class="needs-validation" novalidate>
                                                                  @csrf
                                                                  <div class="modal-header px-5">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply di {{$loker->nama_perusahaan}}</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <div class="modal-body px-5">
                                                                        <div class="d-flex gap-3 mb-3">
                                                                              @if ($dataU->profile_user->image)
                                                                              <img src="{{ asset('storage/photo-user/'.$dataU->profile_user->image)}}" class="rounded-pill" alt="" style="width: 100px">
                                                                              @else
                                                                              @if ($dataU->profile_user->jk === 'she/her')
                                                                              <img src="{{ asset('../../img/person-default-female.jpg')}}" class="rounded-pill" alt="" style="width: 100px">
                                                                              @else
                                                                              <img src="{{ asset('../../img/person-default.jpg')}}" class="rounded-pill" alt="" style="width: 100px">
                                                                              @endif
                                                                              @endif
                                                                              <div>
                                                                                    <div class="d-flex gap-2 align-items-center">
                                                                                          <div class="text-dark fw-medium">{{$dataU->name}}</div>
                                                                                          <div class="text-secondary fw-light" style="font-size: 13px">
                                                                                                @if ($dataU->profile_user->jk === 'she/her')
                                                                                                Female
                                                                                                @else
                                                                                                Male
                                                                                                @endif
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="text-secondary" style="font-size: 13px" id="myText">{{$dataU->profile_user->kota}}, {{$dataU->profile_user->provinsi}}</div>
                                                                                    <div class="text-dark mt-3" style="font-size: 13px">
                                                                                          @foreach ($dataU->hardskill as $key => $item)
                                                                                          {{$item->skill}}
                                                                                          @if (!$loop->last)
                                                                                          ,
                                                                                          @endif
                                                                                          @endforeach
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                        <div class="row" style="font-size: 13px">
                                                                              <div class="col">
                                                                                    <div class="mb-3">
                                                                                          <input type="hidden" name="user_id" class="form-control" id="validationCustom01" placeholder="" value="{{$dataU->id}}" required>
                                                                                          <input type="hidden" name="employe_id" class="form-control" id="validationCustom01" placeholder="" value="{{$loker->employe_id}}" required>
                                                                                          <input type="hidden" name="loker_id" class="form-control" id="validationCustom01" placeholder="" value="{{$loker->id}}" required>
                                                                                          <label for="validationCustom01" class="form-label text-secondary">Email address</label>
                                                                                          <input type="email" class="form-control" id="validationCustom01" placeholder="" value="{{$dataU->profile_user->email}}" required>
                                                                                          <div class="valid-feedback">
                                                                                                Looks good!
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col">
                                                                                    <div class="mb-3">
                                                                                          <label for="validationCustom02" class="form-label text-secondary">Phone Number</label>
                                                                                          <input type="text" class="form-control" id="validationCustom02" placeholder="" value="{{$dataU->profile_user->no_telp}}" required>
                                                                                          <div class="valid-feedback">
                                                                                                Looks good!
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                        <div class="row" style="font-size: 13px">
                                                                              <div class="col">
                                                                                    <div class="mb-3">
                                                                                          <label for="validationCustom03" class="form-label">Resume</label>
                                                                                          <input class="form-control" type="file" id="validationCustom03" required>
                                                                                          <div class="invalid-feedback">
                                                                                                Please provide a valid city.
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col">
                                                                                    <div class="mb-1">
                                                                                          <label for="formFile2" class="form-label">Portfolio</label>
                                                                                          <input class="form-control" type="file" id="formFile2">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                          <div class="input-group flex-nowrap">
                                                                                                <span class="input-group-text" id="addon-wrapping">url</span>
                                                                                                <input type="url" class="form-control" aria-label="portfolio" aria-describedby="addon-wrapping">
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="modal-footer px-5 ">
                                                                        <button class="bg-transparent border-0" data-bs-dismiss="modal" style="font-size: 14px">Cancel</button>
                                                                        <button type="submit" class="btn btn-dark rounded-pill px-4 fw-medium" style="font-size: 14px">Submit</button>
                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="pe-4">
                              <div>
                                    <div class="mt-5 fw-medium mb-2 text-black">About the job</div>
                                    <div class="text-secondary" style="font-size: 14px">
                                          {{$loker->deskripsi}}
                                    </div>
                              </div>
                              <div>
                                    <div class="mt-5 fw-medium mb-2 text-black">Job Requirement</div>
                                    <div class="text-secondary" style="font-size: 14px">
                                          {{$loker->requirement}}
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-xl-6 col-md-12 col-sm-12 mb-4">
                        <div class="text-black mb-3 text-center">Loker lainnya dari perusahaan ini</div>
                        <div>
                              <a href="" class="link-underline link-underline-opacity-0">
                                    <div class="border-bottom pb-2 pt-2 px-4">
                                          <div>
                                                <div class="text-black fw-semibold" style="font-size: 15px">{{$item->nama_pekerjaan}}</div>
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
                  </div>
            </div>
      </div>
</div>
@endsection
