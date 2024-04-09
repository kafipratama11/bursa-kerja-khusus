@extends('layouts.app')
@section('content')
<body class="bg-body-tertiary">
      <div class="container pt-5">
            <div class="row">
                  <div class="col-8">
                        <div class="card bg-white mb-3">
                              <div class="card-body ps-4">
                                    <div class="d-flex gap-4">
                                          <div class="d-flex">
                                                <img src="{{ asset('storage/photo-user/'.$dataU->profile_user->image)}}" alt="" class="rounded-pill ratio ratio-1x1 img-profile-user">
                                                <div class="d-flex align-items-end">
                                                      <a href="" class="text-secondary" style="font-size: 24px; margin-left: -1rem; margin-bottom: -10px;" data-bs-toggle="modal" data-bs-target="#photo"><i class="bi bi-arrow-repeat"></i></a>
                                                </div>
                                                <div class="modal fade" id="photo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered">
                                                            <form action="{{route('user.photo-profile',['id' =>$dataU->id])}}" method="POST" enctype="multipart/form-data">
                                                                  @csrf
                                                                  @method('PUT')
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Photo Profile</h1>
                                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              <div class="mb-3">
                                                                                    <input class="form-control" name="photo" type="file" id="formFile">
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary rounded-pill">Save changes</button>
                                                                        </div>
                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                          <div>
                                                <div class="d-flex gap-2 align-items-center">
                                                      <div class="fw-semibold text-black fs-5">{{$dataU->name}}</div>
                                                      <div class="fw-light text-secondary" style="font-size: 12px">({{$dataU->profile_user->jk}})</div>
                                                </div>
                                                <div class="text-dark text-secondary" style="font-size: 13px">{{$dataU->nisn}}</div>
                                                <div class="d-flex gap-2">
                                                      <div class="text-secondary">{{$dataU->profile_user->provinsi}}</div>
                                                      <div class=""><a href="" data-bs-toggle="modal" data-bs-target="#provinsiUser"><i class="bi bi-pen text-secondary"></i></a></div>
                                                </div>
                                                <div class="modal fade" id="provinsiUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <form action="{{ route('user.update-provinsi', ['id' => $dataU->id])}}" method="POST">
                                                                  @csrf
                                                                  @method('PUT')
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              <div class="d-flex gap-3">
                                                                                    <select class="form-select py-3" aria-label="Default select example" id="provinsi" name="provinsi" onclick="loadProvinsi()">
                                                                                          <option value="">Pilih Provinsi Anda</option>
                                                                                    </select>
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                                <div><a href="" class="link-offset-1 link-underline link-underline-opacity-75" style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#contact">Contact info</a></div>
                                                <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                              <small><a href="mailto:{{$dataU->profile_user->email}}" class="link-underline link-underline-opacity-0">{{$dataU->profile_user->email}}</a></small>
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
                                                            <form action="{{ route('user.update-contact', ['id' => $dataU->id])}}" method="POST">
                                                                  @csrf
                                                                  @method('PUT')
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Edit info contact</h1>
                                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body px-4">
                                                                              <div class="mb-3">
                                                                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$dataU->profile_user->email}}">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="exampleFormControlInput2" class="form-label">No Telp</label>
                                                                                    <input type="text" name="no_telp" class="form-control" id="exampleFormControlInput2" value="{{$dataU->profile_user->no_telp}}">
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer d-flex gap-2" style="font-size: 12px">
                                                                              <button class="btn btn-outline-secondary rounded-pill" data-bs-target="#contact" data-bs-toggle="modal">Cancel</button>
                                                                              <button class="btn btn-primary rounded-pill px-4" type="submit">Save</button>
                                                                        </div>
                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                                <div class="mt-2 text-secondary" style="font-size: 13px">
                                                      <div class="d-flex gap-3 align-items-center">
                                                            <i class="bi bi-envelope-at"></i>{{$dataU->profile_user->email}}
                                                      </div>
                                                      <div class="d-flex gap-3 align-items-center">
                                                            <i class="bi bi-telephone"></i>
                                                            <div class="d-flex gap-1 align-items-center">
                                                                  <div id="text-to-copy">{{$dataU->profile_user->no_telp}}</div><a id="copy-link" class="" href="#"><i class="bi bi-clipboard"></i> </a>
                                                            </div>
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
                                          <div><a href="" data-bs-toggle="modal" data-bs-target="#about"><i class="bi bi-pen text-secondary"></i></a></div>
                                    </div>
                                    <div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <form action="{{ route('user.update-about',['id' => $dataU->id])}}" method="POST">
                                                      @csrf
                                                      @method('PUT')
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">About</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="7">{{$dataU->profile_user->about}}</textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    <div style="font-size: 14px">
                                          <p>{{$dataU->profile_user->about}}</p>
                                    </div>
                              </div>
                        </div>
                        {{-- EDUCATION --}}
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Education</div>
                                          <div><a href="" data-bs-toggle="modal" data-bs-target="#education" style="font-size: 18px"><i class="bi bi-plus-lg text-dark"></i></a></div>
                                    </div>
                                    <div class="modal fade" id="education" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <form action="{{ route('user.add-education' , ['id' => $dataU->id])}}" method="POST">
                                                      @csrf
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Education</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <input type="hidden" name="user_id" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$dataU->id}}">
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Nama sekolah atau universitas</label>
                                                                        <input type="text" name="nama_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                                                        <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Tahun Ajaran</label>
                                                                        <input type="text" name="tahun" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    @foreach ($dataU->education as $item)
                                    <div class="mb-2">
                                          <div class="d-flex gap-2">
                                                <div class="fw-semibold" style="font-size: 14px">{{$item->nama_sekolah}}</div>
                                                <a href="" class="text-secondary" data-bs-toggle="modal" data-bs-target="#editEducation{{$item->id}}"><i class="bi bi-pen"></i></a>
                                          </div>
                                          <div class="fw-normal text-secondary" style="font-size: 14px">{{$item->jurusan}}</div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">{{$item->tahun}}</div>
                                    </div>
                                    <div class="modal fade" id="editEducation{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Education</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                            <input type="text" value="{{$dataU->id}}" hidden>
                                                            <input type="hidden" name="user_id" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$dataU->id}}">
                                                            <div class="mb-3">
                                                                  <label for="exampleFormControlInput1" class="form-label">Nama sekolah atau universitas</label>
                                                                  <input type="text" name="nama_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$item->nama_sekolah}}">
                                                            </div>
                                                            <div class="mb-3">
                                                                  <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                                                  <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$item->jurusan}}">
                                                            </div>
                                                            <div class="mb-3">
                                                                  <label for="exampleFormControlInput1" class="form-label">Tahun Ajaran</label>
                                                                  <input type="text" name="tahun" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$item->tahun}}">
                                                            </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <form action="{{ route('user.delete-education',['id' => $item->id])}}" method="POST">
                                                                  @csrf
                                                                  @method('DELETE')
                                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    @endforeach
                              </div>
                        </div>
                        {{-- EXPERIENCE --}}
                        <div class="card bg-white mb-3">
                              <div class="card-body pt-4 ps-4">
                                    <div class="d-flex gap-2 mb-3 align-items-center">
                                          <div class="fw-semibold">Experience</div>
                                          <div><a href="" data-bs-toggle="modal" data-bs-target="#experience" style="font-size: 18px"><i class="bi bi-plus-lg text-dark"></i></a></div>
                                    </div>
                                    <div class="modal fade" id="experience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <form action="{{ route('user.add-experience',['id' => $dataU->id])}}" method="POST">
                                                      @csrf
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Experience</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <input type="hidden" name="user_id" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$dataU->id}}">
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                                                                        <input type="text" name="nama_perusahaan" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Nama Pekerjaan</label>
                                                                        <input type="text" name="nama_pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                                                                        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="contract">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Lama Bekerja</label>
                                                                        <input type="text" name="lama_bekerja" class="form-control" id="exampleFormControlInput1" placeholder="2020-2021">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4"></textarea>
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    @foreach ($dataU->experiences as $exp)
                                    <div class="mb-2">
                                          <div class="d-flex gap-2">
                                                <div class="fw-semibold" style="font-size: 14px">{{$exp->nama_perusahaan}}</div>
                                                <a href="" class="text-secondary" data-bs-toggle="modal" data-bs-target="#editExperience{{$exp->id}}"><i class="bi bi-pen"></i></a>
                                          </div>
                                          <div class="d-flex gap-2 align-items-center">
                                                <div class="fw-normal text-secondary" style="font-size: 14px">{{$exp->nama_pekerjaan}}</div>
                                                <div class="fw-light text-secondary" style="font-size: 12px">{{$exp->status}}</div>
                                          </div>
                                          <div class="fw-light text-secondary" style="font-size: 12px">{{$exp->lama_bekerja}}</div>
                                          <div class="fw-light text-secondary mt-3" style="font-size: 12px">{{$exp->deskripsi}}</div>
                                    </div>
                                    <div class="modal fade" id="editExperience{{$exp->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <form action="{{ route('user.update-experience',['id' => $exp->id])}}" method="POST">
                                                      @csrf
                                                      @method('PUT')
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Experience</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <input type="hidden" name="user_id" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$dataU->id}}">
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                                                                        <input type="text" name="nama_perusahaan" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$exp->nama_perusahaan}}">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Nama Pekerjaan</label>
                                                                        <input type="text" name="nama_pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="contract" value="{{$exp->nama_pekerjaan}}">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                                                                        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="contract" value="{{$exp->status}}">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Lama Bekerja</label>
                                                                        <input type="text" name="lama_bekerja" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$exp->lama_bekerja}}">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4">{{$exp->deskripsi}}</textarea>
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <form action="{{ route('user.delete-experience', ['id' => $exp->id]) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>     
                                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    @endforeach
                              </div>
                        </div>
                        {{-- SETTINGS --}}
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
                                                                  <div><img src="../../../img/bca.png" style="width: 50px" alt=""></div>
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
            <div id="copy-feedback">No telp berhasil disalin!</div>
      </div>
</body>

@endsection
