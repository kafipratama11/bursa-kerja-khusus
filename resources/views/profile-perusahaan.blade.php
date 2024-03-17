@extends('layouts.app')
@section('content')
<div class="container">
     
      <div class="row mt-5 pb-5">
            <div class="col-4">
                  <div class="scroll-nav w-25">
                        <div id="list-example" class="list-group">
                              <a class="list-group-item list-group-item-action" href="#list-item-1">Profile Perusahaan</a>
                              <a class="list-group-item list-group-item-action" href="#list-item-2">Deskripsi Perusahaan</a>
                              <a class="list-group-item list-group-item-action" href="#list-item-3">Loker Perusahaan</a>
                        </div>
                  </div>
            </div>
            <div class="col-8">
                  <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                        <div id="list-item-1" class="mb-5">
                              <div class="fw-bolder mb-4 text-center text-dark bg-body-tertiary rounded p-2">PROFILE PERUSAHAAN</div>
                              <div class="row">
                                    <div class="col-3 mt-2">
                                          <div class="card card-profile-perusahaan p-5">
                                                <img src="img/bca.png" alt="">
                                          </div>
                                    </div>
                                    <div class="col">
                                          <div class="mb-5">
                                                <div class="nama-perusahaan fs-2 fw-bolder">Shopee Indonesia</div>
                                                <div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-geo-alt"></i>
                                                            Yogyakarta, DI Yogyakarta
                                                      </div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-building"></i>
                                                            shopeeind@yahoo.co.id
                                                      </div>
                                                      <div class="d-flex gap-3 mb-2">
                                                            <i class="bi bi-clock"></i>
                                                            085174140161
                                                      </div>
                                                      <div class="mb-2 fw-medium text-secondary">
                                                            Bergabung pada tanggal 10/09/21
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div id="list-item-2" class="mb-5">
                              <div class="fw-bolder mb-4 text-center text-dark bg-body-tertiary rounded p-2">DESKRIPSI PERUSAHAAN</div>
                              <div class="row">
                                    <div class="deskripsi-perusahaan">
                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. At architecto accusantium veritatis aut porro delectus earum amet perferendis atque optio labore repellendus harum, corrupti, consectetur unde dignissimos vel. Illum blanditiis amet non aperiam quod? Consequuntur assumenda laborum ipsa ullam quisquam, nesciunt provident, officiis nulla, architecto aliquid exercitationem! Dolorem mollitia, odio ducimus consequatur quidem qui, perspiciatis eligendi dolores at quas molestias nihil, nisi tenetur nobis! Quo quidem maiores, quibusdam perferendis dignissimos necessitatibus. Officia odit eligendi ipsa consequatur molestias esse illo aspernatur sed quos sunt voluptas expedita molestiae mollitia corporis, aliquid excepturi vel. Eligendi optio numquam fugiat perferendis, voluptate rerum hic doloremque alias natus ad aperiam animi repudiandae eius quaerat magni! Error, dolores quia repellendus qui rerum architecto dolore, sit corrupti, delectus placeat autem provident dolorum accusantium aut ex in porro exercitationem odio iusto maxime? Possimus corporis fugiat illo delectus vero, est necessitatibus praesentium quo, quidem eos optio quod! Illo repudiandae asperiores, quos doloremque molestias facilis illum praesentium nisi. Iste, molestiae. Beatae vero dicta minus officia sapiente, a rerum ipsum dolorum neque similique eveniet, minima unde repellat molestias non veniam ducimus suscipit velit voluptatem, ullam amet distinctio labore. Alias, eum. Quod, quos excepturi dolorem ab molestias similique fugit! Omnis dicta praesentium blanditiis!
                                    </div>
                              </div>
                        </div>
                        <div id="list-item-3">
                              <div class="fw-bolder mb-4 mt-5 text-center text-dark bg-body-tertiary rounded p-2">LOKER PERUSAHAAN</div>
                              <div class="row">
                                    <div class="col-6 mb-3">
                                          <a class="card ps-3 p-2 pe-3 link-underline link-underline-opacity-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <div class="text-end text-secondary">1 hari yang lalu</div>
                                                <div class="pt-2">
                                                      <div class="position fw-bolder mb-3">Administrasi</div>
                                                      <div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-geo-alt"></i>
                                                                  Yogyakarta, DI Yogyakarta
                                                            </div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-building"></i>
                                                                  Rp. 5,000,000 - Rp 6,000,000
                                                            </div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-clock"></i>
                                                                  Full Time
                                                            </div>
                                                            <div class="mb-2 mt-3 fw-medium text-body-tertiary">
                                                                  Dibuka sampai tanggal 10/09/23
                                                            </div>
                                                      </div>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="col-6 mb-3">
                                          <a class="card ps-3 p-2 pe-3 link-underline link-underline-opacity-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <div class="text-end text-secondary">1 hari yang lalu</div>
                                                <div class="pt-2">
                                                      <div class="position fw-bolder mb-3">Administrasi</div>
                                                      <div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-geo-alt"></i>
                                                                  Yogyakarta, DI Yogyakarta
                                                            </div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-building"></i>
                                                                  Rp. 5,000,000 - Rp 6,000,000
                                                            </div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-clock"></i>
                                                                  Full Time
                                                            </div>
                                                            <div class="mb-2 mt-3 fw-medium text-body-tertiary">
                                                                  Dibuka sampai tanggal 10/09/23
                                                            </div>
                                                      </div>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="col-6 mb-3">
                                          <a class="card ps-3 p-2 pe-3 link-underline link-underline-opacity-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <div class="text-end text-secondary">1 hari yang lalu</div>
                                                <div class="pt-2">
                                                      <div class="position fw-bolder mb-3">Administrasi</div>
                                                      <div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-geo-alt"></i>
                                                                  Yogyakarta, DI Yogyakarta
                                                            </div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-building"></i>
                                                                  Rp. 5,000,000 - Rp 6,000,000
                                                            </div>
                                                            <div class="d-flex gap-3 mb-2">
                                                                  <i class="bi bi-clock"></i>
                                                                  Full Time
                                                            </div>
                                                            <div class="mb-2 mt-3 fw-medium text-body-tertiary">
                                                                  Dibuka sampai tanggal 10/09/23
                                                            </div>
                                                      </div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                              @include('partials.modal-loker')
                        </div>
                  </div>
            </div>
      </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

@endsection
