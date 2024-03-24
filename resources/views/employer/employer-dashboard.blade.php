@extends('layouts.admin')
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
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">dashboard</div>
                        <div class="tab-pane fade" id="list-loker" role="tabpanel" aria-labelledby="list-loker-list">
                              <div class="pe-5">
                                    <table class="table table-striped border">
                                          <thead>
                                                <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Job Position</th>
                                                      <th scope="col">Upload</th>
                                                      <th scope="col">Expired</th>
                                                      <th scope="col">Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                      <th scope="row">1</th>
                                                      <td>Administrasi</td>
                                                      <td>12/09/2023</td>
                                                      <td>30/09/2023</td>
                                                      <td>
                                                            <div class="dropdown">
                                                                  <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item d-flex gap-3" href="/view/loker-edit/kode-loker"><i class="bi bi-eye"></i>Show</a></li>
                                                                        <li><a class="dropdown-item text-danger d-flex gap-3" href="#"><i class="bi bi-trash"></i>Delete</a></li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="list-apply" role="tabpanel" aria-labelledby="list-apply-list">apply</div>
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
