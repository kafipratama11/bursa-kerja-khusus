      @extends('layouts.admin')
      @section('content-admin')
      @section('nav')
      <div class="dropdown">
            <a class="dropdown-toggle text-light link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  @auth
                  {{ Auth::user()->name }}
                  @endauth
            </a>
            <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-danger" href="{{ route('logout')}}">Log Out</a></li>
            </ul>
      </div>
      @endsection

      @include('partials.navbar-dashboard-admin')
      <div class="d-flex dashboard-content">
            <div class="left w-25 h-100 mt-5">
                  <div class="kiri">
                        @include('partials.sidebar-dashboard-admin')
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
                                                            900
                                                      </p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="box bg-white rounded mt-3 ps-3">
                                          <p class="pt-2">Total Perusahaan</p>
                                          <div class="d-flex mt-2 align-items-center text-align-center">
                                                <i class="bi bi-bar-chart-fill"></i>
                                                <div class="total text-center">
                                                      <p>
                                                            13
                                                      </p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="box bg-white rounded mt-3 ps-3">
                                          <p class="pt-2">Total Pekerjaan</p>
                                          <div class="d-flex mt-2 align-items-center text-align-center">
                                                <i class="bi bi-bar-chart-fill"></i>
                                                <div class="total text-center">
                                                      <p>
                                                            230
                                                      </p>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <!-- table -->
                        <div class="d-flex justify-content-center mb-4">
                              <div class="card" style="width: 1000px">
                                    <div class="card-header" style="color: #e3edff">Dashboard</div>
                                    <div class="card-body">
                                          <table class="table table-hover table-bordered mt-3 table-striped pt-3" id="table">
                                                <thead>
                                                      <tr>
                                                            <th scope="col" style="width: 50px;">NO</th>
                                                            <th scope="col" style="width: 270px;">NAMA PERUSAHAAN</th>
                                                            <th scope="col" style="width: 180px;">JUMLAH LOKER</th>
                                                            <th scope="col" style="width: 300px;">JUMLAH LAMARAN DITERIMA</th>
                                                            <th scope="col">ACTION</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <th>
                                                                  1
                                                            </th>
                                                            <td> PT Freeport Indonesia</td>
                                                            <td> 23</td>
                                                            <td> 142</td>
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

                                                      {{-- <tr>

                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                              <div class="card" style="width: 1000px">
                                    <div class="card-header" style="color: #e3edff">Data Perusahaan</div>
                                    <div class="card-body">
                                          <table class="table table-hover table-bordered mt-3 table-striped pt-3" id="table">
                                                <thead>
                                                      <tr>
                                                            <th scope="col" style="max-width: 50px;">NO</th>
                                                            <th scope="col" style="max-width: 270px;">NAMA PERUSAHAAN</th>
                                                            <th scope="col" style="max-width: 230px;">EMAIL PERUSAHAAN</th>
                                                            <th scope="col" style="max-width: 230px;">NO.TELP</th>
                                                            <th scope="col" style="max-width: 300px;">LOGO PERUSAHAAN</th>
                                                            <th scope="col">ACTION</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>

                                                            <th>
                                                                  1
                                                            </th>
                                                            <td style="max-width: 270px;"> PT Freeport Indonesia</td>
                                                            <td style="max-width: 230px;"> freeportind@gmail.com</td>
                                                            <td> 0851-6874-5263</td>
                                                            <td class="text-center"> <img src="../img/bca.png" style="height: 100px" alt=""></td>
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
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                              <div class="card" style="width: 1000px">
                                    <div class="card-header" style="color: #e3edff">Data User</div>
                                    <div class="card-body">
                                          <table class="table table-hover table-bordered mt-3 table-striped pt-3" id="table">
                                                <thead>
                                                      <tr>
                                                            <th scope="col" style="max-width: 50px;">NO</th>
                                                            <th scope="col" style="max-width: 200px;">NISN</th>
                                                            <th scope="col" style="max-width: 200px;">NAMA</th>
                                                            <th scope="col" style="max-width: 230px;">EMAIL</th>
                                                            <th scope="col" style="max-width: 230px;">NO.TELP</th>
                                                            <th scope="col">ACTION</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <th>
                                                                  1
                                                            </th>
                                                            <td style="max-width: 270px;">1298364738936728</td>
                                                            <td style="max-width: 230px;">Azar Dwi Prasetyo</td>
                                                            <td style="max-width: 230px;">azarganteng123@gmail.com</td>
                                                            <td>0813-7286-8492</td>
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
                                                      </tr> --}}
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
                        </div>
                        <!-- end table -->
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
                  </div>
            </div>
      </div>
      @endsection
