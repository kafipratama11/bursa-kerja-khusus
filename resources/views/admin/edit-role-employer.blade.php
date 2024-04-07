@extends('layouts.admin')
@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="{{ route('user.index-user')}}">BACK</a>
            </li>
      </ul>
</div>
@endsection

@section('content-admin')
@include('partials.navbar-dashboard-admin')

<div class="container">
      <div class="row pb-5">
            <div class="col-4">
                  <div class="logo d-flex justify-content-center mt-5">
                        <img src="{{ asset('storage/photo-employe/'.$employe->image)}}" style="width: 100%" alt="">
                  </div>
                  <div class="fw-bolder fs-3 text-secondary">
                        {{$employe->name}}
                  </div>
                  <p class="mt-2">
                        <button class="btn border-secondary w-100 fw-medium btn-dark text-light fw-bolder" style="font-size: 15px" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Edit profile
                        </button>
                  </p>
                  <div class="collapse" id="collapseExample">
                        <div class="card card-body pt-4">
                              <form action="{{ route('user.update-role', ['id' => $employe->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Nama Role</label><br>
                                          <select name="role" style="font-size: 14px" class="form-control">
                                                <option class="form-label fw-bolder text-secondary">{{$roles = $employe->getRoleNames()->join(', ');}}</option>
                                                @foreach ($role as $item)
                                                <option class="form-label fw-bolder text-secondary">{{$item->name}}</option>
                                                @endforeach
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Nama Perusahaan</label>
                                          <input type="text" readonly name="name" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="{{$employe->name}}">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Alamat perusahaan</label>
                                          <input type="text" readonly name="lokasi" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="{{$employe->lokasi}}">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">No Telepon</label>
                                          <input type="text" readonly name="no_telp" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="{{$employe->no_telp}}">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Email</label>
                                          <input type="email" readonly name="email" style="font-size: 14px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$employe->email}}">
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleFormControlTextarea1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Deskripsi</label>
                                          <textarea class="form-control" name="deskripsi" readonly id="exampleFormControlTextarea1" rows="7" style="font-size: 14px">{{$employe->deskripsi}}</textarea>
                                    </div>
                                    <div class="mb-3 d-flex gap-3">
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                          <div class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancel</div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
            <div class="col pt-4">
                  <div class="row mt-5">
                        <div class="fw-medium mb-1">
                              Lowongan Kerja
                        </div>
                        <div class="row">
                              @foreach ($employe->loker as $item)
                              <div class="col-6 mb-3">
                                    <div class="card w-full" style="font-size: 14px">
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col-9">
                                                            <div class="fw-bolder"><a href="{{ route('user.detail-loker', ['id' =>$item->id])}}" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-100-hover link-dark">{{$item->nama_pekerjaan}}</a></div>
                                                      </div>
                                                      <div class="col">
                                                            <div class="text-end text-primary text-end fw-bolder">{{$item->status}}</div>
                                                      </div>
                                                </div>
                                                <div class="text-secondary mt-2">{{$item->bagian}}</div>
                                          </div>
                                          <div class="card-footer text-center text-secondary">
                                                12 Kandidat
                                          </div>
                                    </div>
                              </div>                                                    
                              @endforeach
                        </div>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>

@endsection
