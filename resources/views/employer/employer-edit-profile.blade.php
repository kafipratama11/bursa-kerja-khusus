@extends('layouts.dashboard-employer')
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
      @section('nav')
      <div class="text-white">
            @auth
            {{ Auth::user()->name }}
            @endauth
      </div>
      @endsection
</div>
@endsection


@section('content-admin')
@include('partials.navbar-dashboard-admin')

<body class="bg-body-tertiary">
      <div class="container">
            <div class="row pb-5">
                  <div class="col-xl-4 col-md-6 col-sm-12 pt-4">
                        <div class="card bg-white border-0 shadow-sm px-5" style="border-radius: 20px">
                              <div class="logo d-flex justify-content-center w-100 mt-5" style="width:200px; height: 300px;">
                                    @if($employe->image)
                                    <img src="{{ asset('storage/photo-employe/'.$employe->image)}}" class="w-100 h-100 object-fit-contain" alt="">
                                    @else
                                    <img src="{{ asset('../../assets/images/building.jpg')}}" class="object-fit-contain" alt="">
                                    @endif
                              </div>
                        </div>
                        <a href="" data-bs-toggle="modal" data-bs-target="#photo" class="link-underline link-underline-opacity-0">
                              <div class="bg-dark text-light mt-3 mb-3 shadow-sm rounded-pill p-3 py-2 text-center">Ganti Logo</div>
                        </a>
                  </div>
                  <div class="col-xl-8 col-md-6 col-sm-12 pt-4">
                        <div class="row">
                              <div class="col" style="font-size: 15px">
                                    <div class="card bg-white border-0 shadow-sm ps-3 pt-3" style="border-radius: 20px">
                                          <div class="card-body">
                                                <div class="mb-2">
                                                      <div class="fw-medium">Nama Perusahaan</div>
                                                      <div class="text-secondary">{{ $employe->name }}</div>
                                                </div>
                                                <div class="mb-2">
                                                      <div class="fw-medium">Industri</div>
                                                      <div class="text-secondary">{{ $employe->industri }}</div>
                                                </div>
                                                <div class="mb-2">
                                                      <div class="fw-medium">Email</div>
                                                      <div class="text-secondary">{{ $employe->email }}</div>
                                                </div>
                                                <div class="mb-2">
                                                      <div class="fw-medium">No. Telp</div>
                                                      <div class="text-secondary">{{ $employe->no_telp }}</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col" style="font-size: 15px">
                                    <div class="card bg-white border-0 shadow-sm pt-3 ps-3" style="border-radius: 20px">
                                          <div class="card-body">
                                                <div class="mb-2">
                                                      <div class="fw-medium">Lokasi</div>
                                                      <div class="text-secondary" id="myText">{{ $employe->lokasi }}</div>
                                                </div>
                                                <div class="mb-2">
                                                      <div class="fw-medium">Alamat</div>
                                                      <div class="text-secondary">{{ $employe->alamat }}</div>
                                                </div>
                                                <div class="mb-2">
                                                      <div class="fw-medium">Deskripsi</div>
                                                      <div class="text-secondary">{{ $employe->deskripsi }}</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <p class="mt-5">
                              <button class="btn border-secondary w-100 fw-medium btn-dark text-light fw-bolder" style="font-size: 15px" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Edit profile
                              </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                              <div class="card card-body pt-4">
                                    <form action="{{ route('employe.update-profile', ['id' => $employe->id])}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Nama Perusahaan</label>
                                                <input type="text" name="name" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="{{$employe->name}}">
                                          </div>
                                          <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Alamat perusahaan</label>
                                                <input type="text" name="lokasi" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="{{$employe->lokasi}}">
                                          </div>
                                          <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label fw-bolder text-secondary" style="font-size: 15px">No Telepon</label>
                                                <input type="text" name="no_telp" style="font-size: 14px" class="form-control" id="exampleFormControlInput1" value="{{$employe->no_telp}}">
                                          </div>
                                          <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Email</label>
                                                <input type="email" name="email" style="font-size: 14px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$employe->email}}">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                          </div>
                                          <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label fw-bolder text-secondary" style="font-size: 15px">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="7" style="font-size: 14px">{{$employe->deskripsi}}</textarea>
                                          </div>
                                          <div class="mb-3 d-flex gap-3">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                <div class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancel</div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="modal fade" id="photo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                        <form action="{{route('employe.photo-profile',['id' =>$employe->id])}}" method="POST" enctype="multipart/form-data">
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
</body>

@endsection
