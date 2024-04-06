@extends('layouts.app')
@section('content')
<body class="bg-body-tertiary">
      <div class="container pt-5">
            <div class="row">
                  <div class="col-8">
                        <div class="card bg-white mb-3">
                              <div class="card-body ps-4">
                                    <div class="d-flex gap-4">
                                          <div>
                                                <img src="../img/bg_iu.jpg" alt="" class="rounded-pill ratio ratio-1x1 img-profile-user">
                                          </div>
                                          <div>
                                                <div class="d-flex gap-2 align-items-center">
                                                      <div class="fw-semibold text-black fs-5">{{$dataU->name}}</div>
                                                      <div class="fw-light text-secondary" style="font-size: 12px">({{$dataU->profile_user->jk}})</div>
                                                      <div class=""><a href=""><i class="bi bi-pen text-secondary"></i></a></div>
                                                </div>
                                                <div class="text-dark">{{$dataU->nisn}}</div>
                                                <div class="text-secondary">{{$dataU->profile_user->jk}}</div>
                                                <div><a href="" class="link-offset-1 link-underline link-underline-opacity-75" style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact info</a></div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$dataU->name}}</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <div class="modal-body px-4">
                                                                        <div class="d-flex">
                                                                              <div class="mb-3">Contact Info</div>
                                                                              <a href="" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="ms-auto"><i class="bi bi-pen text-secondary"></i></a>
                                                                        </div>
                                                                        <div class="mb-2">
                                                                              <div class="fw-semibold text-secondary">Email</div>
                                                                              <small><a href="" class="link-underline link-underline-opacity-0">{{$dataU->profile_user->email}}</a></small>
                                                                        </div>
                                                                        <div class="mb-2">
                                                                              <div class="fw-semibold text-secondary">No Telephone</div>
                                                                              <small>{{$dataU->profile_user->no_telp}}</small>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Edit info contact</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <div class="modal-body px-4">
                                                                        <div class="mb-3">
                                                                              <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                                              <input type="email" class="form-control" id="exampleFormControlInput1" value="kafipratama1512@gmail.com">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                              <label for="exampleFormControlInput2" class="form-label">Telp</label>
                                                                              <input type="text" class="form-control" id="exampleFormControlInput2" value="085174140161">
                                                                        </div>
                                                                  </div>
                                                                  <div class="modal-footer d-flex gap-2" style="font-size: 12px">
                                                                        <button class="btn btn-outline-secondary rounded-pill" data-bs-target="#exampleModal" data-bs-toggle="modal">Cancel</button>
                                                                        <button class="btn btn-primary rounded-pill px-4" type="submit">Save</button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="mt-2 text-secondary" style="font-size: 13px">
                                                      <div class="d-flex gap-3">
                                                            <i class="bi bi-envelope-at"></i>{{$dataU->profile_user->email}}
                                                      </div>
                                                      <div class="d-flex gap-3">
                                                            <i class="bi bi-telephone"></i>{{$dataU->profile_user->no_telp}}
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-3">
                                          <div class="fw-semibold mb-3">About</div>
                                          <div><a href=""><i class="bi bi-pen text-secondary"></i></a></div>
                                    </div>
                                    <div style="font-size: 14px">
                                          <p>{{$dataU->profile_user->about}}</p>
                                    </div>
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Education</div>
                                          <div><a href="" style="font-size: 18px"><i class="bi bi-plus-lg text-dark"></i></a></div>
                                    </div>
                                    @foreach ($dataU->education as $item)
                                    <div class="mb-2">
                                          <div class="fw-semibold" style="font-size: 14px">{{$item->nama_sekolah}}</div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">{{$item->jurusan}}</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">{{$item->tahun}}</div>
                                    </div>
                                    @endforeach
                              </div>
                        </div>
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="mb-3">
                                          <div class="fw-semibold">Setting</div>
                                    </div>
                                    <div style="font-size: 14px"><a class="text-danger link-underline link-underline-opacity-0" href="{{ route('user.logout')}}">Logout</a></div>
                              </div>
                        </div>
                  </div>
                  <div class="col-4">
                        <div>
                              <div class="card history-apply-user overflow-auto p-4 ps-3 pe-2" style="min-width: 350px">
                                    <div class="w-100">
                                          <div class="text-center fw-semibold text-black mb-3">History Apply</div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                          <div class="card mb-2">
                                                <div class="p-2">
                                                      <div class="d-flex gap-3">
                                                            <div class="d-flex justify-content-center">
                                                                  <div><img src="../img/bca.png" style="width: 50px" alt=""></div>
                                                            </div>
                                                            <div class="">
                                                                  <div class="fw-medium" style="font-size: 14px">PT Freeport Indonesia</div>
                                                                  <div style="font-size: 14px">Administrasi</div>
                                                            </div>
                                                      </div>
                                                      <div class="text-secondary fw-light text-end" style="font-size: 12px">1 hari yang lalu</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>

@endsection
