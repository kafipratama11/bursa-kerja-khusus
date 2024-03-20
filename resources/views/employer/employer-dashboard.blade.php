@extends('layouts.admin')
@section('content-admin')

@section('nav-link-employer')
<button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light"></span>
</button>
<div class="collapse navbar-collapse w-full d-flex ms-5" id="navbarNav">
      <ul class="navbar-nav d-flex gap-3">
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/employe/index">HOME</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/employe/dashboard-employe">DASHBOARD</a>
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
                  <div class="d-flex mb-4">
                        <div class="d-flex justify-content-start gap-3">
                              <div class="box bg-white rounded mt-3 ps-3">
                                    <p class="pt-2">Total User</p>
                                    <div class="d-flex mt-2 align-items-center text-align-center">
                                          <i class="bi bi-bar-chart-fill"></i>
                                          <div class="total text-center">
                                                <p>
                                                      10
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="box bg-white rounded mt-3 ps-3">
                                    <p class="pt-2">Total User</p>
                                    <div class="d-flex mt-2 align-items-center text-align-center">
                                          <i class="bi bi-bar-chart-fill"></i>
                                          <div class="total text-center">
                                                <p>
                                                      10
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="box bg-white rounded mt-3 ps-3">
                                    <p class="pt-2">Total User</p>
                                    <div class="d-flex mt-2 align-items-center text-align-center">
                                          <i class="bi bi-bar-chart-fill"></i>
                                          <div class="total text-center">
                                                <p>
                                                      10
                                                </p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">dashboard</div>
                        <div class="tab-pane fade" id="list-loker" role="tabpanel" aria-labelledby="list-loker-list">loker</div>
                        <div class="tab-pane fade" id="list-apply" role="tabpanel" aria-labelledby="list-apply-list">apply</div>
                        <div class="tab-pane fade" id="list-candidat" role="tabpanel" aria-labelledby="list-candidat-list">candidat</div>
                  </div>
                  <!-- table -->
                  {{-- <div class="d-flex justify-content-center mb-4">
                        <div class="card" style="width: 1000px">
                              <div class="card-header" style="color: #e3edff">Dashboard</div>
                              <div class="card-body">
                                    <table class="table table-hover table-bordered mt-3 table-striped pt-3" id="table">
                                          <thead>
                                                <tr>
                                                      <th scope="col" style="width: 50px;">NO</th>
                                                      <th scope="col" style="width: 150px;">ID PEGAWAI</th>
                                                      <th scope="col" style="width: 220px;">NAMA PEGAWAI</th>
                                                      <th scope="col" style="width: 100px;">GOLONGAN</th>
                                                      <th scope="col" style="width: 200px;">BAGIAN</th>
                                                      <th scope="col">ACTION</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <th>
                                                            1
                                                      </th>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td> 1</td>
                                                      <td>
                                                            <div class="dropdown text-center">
                                                                  <button class="btn dropdown-toggle text-success border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Option
                                                                  </button>
                                                                  <ul class="dropdown-menu">
                                                                        <li>
                                                                              <a class="dropdown-item gap-3 d-flex" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                                                    <i class="bi bi-pencil-square"></i>Edit
                                                                              </a>
                                                                        </li>
                                                                        <li>
                                                                              <a class="dropdown-item delete-btn gap-3 d-flex text-danger" type="button" id="btnHapus">
                                                                                    <i class="bi bi-trash"></i>Delete
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </td>
                                                </tr>
                                                <!-- Modal -->
                                                <form action="" method="post">
                                                      <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit
                                                                                    data
                                                                              </h1>
                                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              <input type="text" name="id_pegawai" hidden>
                                                                              <div class="input1 mt-2">
                                                                                    <label for="exampleFormControlInput1" class="form-label">Golongan</label>
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" maxlength="1" name="tgolongan_edit" required />
                                                                              </div>
                                                                              <div class="input2 mt-2">
                                                                                    <label for="exampleFormControlInput1" class="form-label">Kode
                                                                                          Bagian</label>
                                                                                    <input type="text" class="form-control" id="exampleFormControlInput1" maxlength="3" name="tkode_bagian_edit" required />
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                              <button type="submit" class="btn btn-primary" name="bedit">Simpan</button>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </form>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div> --}}
                  <!-- end table -->
            </div>
      </div>
</div>
@endsection
