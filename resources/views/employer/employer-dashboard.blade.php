@extends('layouts.dashboard-employer')
@section('content-admin')
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
<div class="d-flex dashboard-content">
      <div class="left w-25 h-100 mt-5">
            <div class="kiri">
                  @include('partials.sidebar-dashboard-company')
            </div>
      </div>
      <div class="kanan w-75 mt-5">
            <div class="container content-body" style="width: 1000px">
                  <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-dashboard-list">dashboard</div>
                        <div class="tab-pane fade" id="list-loker{{ $employE->id }}" role="tabpanel" aria-labelledby="list-loker-list">
                              <div class="pe-5">
                                    <table class="table table-striped border" style="width: 950px;">
                                          <thead>
                                                <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Bagian</th>
                                                      <th scope="col">Lokasi</th>
                                                      <th scope="col">Waktu</th>
                                                      <th scope="col">Gaji</th>
                                                      <th scope="col">Email</th>
                                                      <th scope="col">Batas Waktu</th>
                                                      <th scope="col">Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @foreach ($employE->loker as $item)
                                                <tr>
                                                      <td>{{$loop->iteration}}</td>
                                                      <td>{{$item->bagian}}</td>
                                                      <td>{{$item->provinsi}},{{$item->kota_kabupaten}}</td>
                                                      <td>{{$item->waktu}}</td>
                                                      <td>{{$item->gaji}}</td>
                                                      <td>{{$item->email}}</td>
                                                      <td>{{$item->expired}}</td>
                                                      <td>
                                                            <div class="dropdown">
                                                                  <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item d-flex gap-3" href="{{ route('employe.detail-loker', ['id' =>$item->id])}}"><i class="bi bi-eye"></i>Show</a></li>
                                                                        <li>
                                                                              <form action="{{ route('employe.delete',['id' => $item->id]) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="dropdown-item d-flex gap-3"><i class="bi bi-trash"></i> Hapus</button>
                                                                              </form>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                @endforeach
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="list-apply{{ $employE->id }}" role="tabpanel" aria-labelledby="list-apply-list">
                              <div class="pe-5">
                                    <table class="table table-striped border">
                                          <thead>
                                                <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Nama</th>
                                                      <th scope="col">Job Name</th>
                                                      <th scope="col">Job Position</th>
                                                      <th scope="col">Tanggal Apply</th>
                                                      <th scope="col">Berkas</th>
                                                      <th scope="col">Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @foreach ($applies as $item)
                                                <tr>
                                                      <th scope="row">{{$loop->iteration}}</th>
                                                      <td>{{ $item->user_name }}</td>
                                                      <td>{{ $item->nama_pekerjaan }}</td>
                                                      <td>{{ $item->bagian }}</td>
                                                      <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                                      <td>
                                                            <div class="dropdown">
                                                                  <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item text-dark d-flex gap-3" href="{{route('employe.download-cv',['id' => $item->id])}}"><i class="bi bi-postcard"></i>Download CV</a></li>
                                                                        <li><a class="dropdown-item text-dark d-flex gap-3" href="{{route('employe.download-portofolio',['id' => $item->id])}}"><i class="bi bi-inbox"></i>Download Portofolio</a></li>
                                                                        @if(empty($item->porto))
                                                                        <li><a class="dropdown-item text-dark d-flex gap-3" href="#"><i class="bi bi-x-lg"></i>No Site</a></li>
                                                                        @else
                                                                        <li><a class="dropdown-item text-dark d-flex gap-3" href="{{ $item->porto }}" target="_blank"><i class="bi bi-send"></i>visit this site</a></li>
                                                                        @endif
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                      <td>
                                                            <div class="dropdown">
                                                                  <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#terima{{$item->id}}">
                                                                              <li><a class="dropdown-item text-dark d-flex gap-3" href="#"><i class="bi bi-check-lg"></i>Terima</a></li>
                                                                        </button>
                                                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#tolak{{$item->id}}">
                                                                              <li><a class="dropdown-item text-danger d-flex gap-3" href="#"><i class="bi bi-x-lg"></i>Tolak</a></li>
                                                                        </button>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                {{-- terima --}}
                                                <div class="modal fade" id="terima{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <form action="{{route('employe.interview',['id' => $item->id])}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Kirim surat interview kepada {{$item->user_name}} </h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <div class="mb-1">
                                                                        <label for="formFile2" class="form-label">Surat Interview</label>
                                                                        <input class="form-control" name="surat_interview" type="file" id="formFile2" style="font-size: 14px">
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                  <button type="submit" class="btn btn-primary">Kirim</button>
                                                            </div>
                                                            </div>
                                                            </div>
                                                      </form>
                                                </div>
                                                {{-- tolak --}}
                                                <div class="modal fade" id="tolak{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                      <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->nama_pekerjaan }} title</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                            ...
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                      </div>
                                                      </div>
                                                </div>
                                                @endforeach
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="list-candidat" role="tabpanel" aria-labelledby="list-candidat-list">
                              <div class="pe-5">
                                    <table class="table table-striped border">
                                          <thead>
                                                <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Nama</th>
                                                      <th scope="col">Kode Loker</th>
                                                      <th scope="col">Job Position</th>
                                                      <th scope="col">Tanggal Apply</th>
                                                      <th scope="col">Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                      <th scope="row">1</th>
                                                      <td>Muhammad Kafi Pratama</td>
                                                      <td>LSHOPEE12132023001</td>
                                                      <td>Akuntan</td>
                                                      <td>30/09/2023</td>
                                                      <td>
                                                            <div class="dropdown">
                                                                  <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item d-flex gap-3" href="/view/loker-edit/kode-loker/kode-candidat"><i class="bi bi-eye"></i>Show</a></li>
                                                                        <li><a class="dropdown-item text-danger d-flex gap-3" href="#"><i class="bi bi-trash"></i>Delete</a></li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
@endsection
