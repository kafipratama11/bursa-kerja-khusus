@extends('layouts.app')
@section('content')

<div class="container">
      <div class="mt-5 px-5">
            <div class="row">
                  <div class="col">
                        <div class="d-flex gap-4">
                              <div class="card card-profile-perusahaan d-flex justify-content-center">
                                    <img src="img/bca.png" alt="">
                              </div>
                              <div class="">
                                    <div class="fw-medium text-body-tertiary">Melamar untuk</div>
                                    <div class="position fw-medium fs-1">Administrasi</div>
                                    <div class="nama-perusahaan fs-5 mb-4">SHOPEE INDONESIA</div>
                                    <div><a href="" class="link-offset-2 link-underline link-underline-opacity-100 text-dark fw-medium" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <p>Lihat deskripsi pekerjaan</p>
                                          </a></div>
                              </div>
                              <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body pt-4 px-5">
                                          <div class="mb-4">
                                                <div class="position-offcanvas fs-2 fw-medium">Administrasi</div>
                                                <div class="nama-perusahaan-apply fs-4 fw-medium text-body-tertiary">Shopee Indonesia</div>
                                          </div>
                                          <div class="job-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere fuga illo qui possimus velit itaque odit eius rem quam, sequi veritatis laboriosam ex optio error molestias eligendi asperiores temporibus, sed nisi corporis debitis ea cumque assumenda? Beatae voluptatibus repudiandae, vitae odio similique dolorum sapiente eveniet neque molestiae dolores quidem omnis quod aspernatur officia. Nostrum sint, quas dolores repellendus quos molestiae asperiores itaque obcaecati facilis, tempora maxime. Fugiat facilis vitae provident rem quibusdam neque omnis exercitationem alias nesciunt labore earum, error consectetur, delectus repellendus. Nulla odio sequi natus doloribus laudantium reprehenderit, veniam delectus sint! Officia, est! Quod inventore explicabo sit delectus cupiditate? Dolorem laborum quisquam exercitationem, placeat officiis earum praesentium voluptates at dolore quia tenetur iure sed dolor id doloribus dignissimos, accusamus ducimus. Sequi quasi totam voluptatem eaque aspernatur consequuntur. Ducimus blanditiis fuga, officiis illo repellat laborum est soluta nemo ad animi sunt beatae nisi aliquam culpa velit ipsa! Nam, neque tenetur esse velit officia ea possimus obcaecati impedit pariatur, cum, animi in distinctio ad cupiditate enim facere? Animi dolor ipsum commodi in, magnam distinctio ipsa fuga ut nesciunt, illo id quaerat sequi, aperiam obcaecati doloribus. Culpa cumque architecto minus dolor, excepturi expedita numquam ipsam cupiditate quos odio ratione quas tenetur omnis illum molestias quaerat, hic minima magnam! Perspiciatis quidem expedita saepe voluptatum quod officia, doloribus veritatis maiores officiis, eius accusantium commodi rem facere necessitatibus neque, vel error asperiores non. Odio exercitationem perferendis expedita sit sunt necessitatibus nulla quasi iste ratione, voluptatum hic soluta veritatis, maiores consequatur quis consequuntur rerum possimus dolores itaque beatae recusandae. Eaque doloremque vel delectus optio? Eaque voluptate, in vitae debitis dicta minima, eius quaerat recusandae ea esse culpa pariatur quam! Sint laborum facere, quidem, quasi amet quo nam sequi adipisci magnam rem, architecto et dolores eum illo impedit iusto vitae eius reprehenderit est. Ducimus, laborum quam.</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="row mt-5">
                  <div class="col">
                        <div>
                              <div class="mb-3">
                                    <label for="formFile" class="form-label">Resume</label>
                                    <input class="form-control" type="file" id="formFile">
                              </div>
                              <div class="mb-3">
                                    <label for="formFile" class="form-label">Surat Lamaran</label>
                                    <input class="form-control" type="file" id="formFile">
                              </div>
                        </div>
                  </div>
                  <div class="col">
                        <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" value="kafipratama1512@gmail.com">
                        </div>
                        <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" value="085174140161" maxlength="12">
                        </div>
                  </div>
            </div>
            <button type="submit" class="btn btn-apply-loker px-5 mt-3 fw-bolder">
                  Kirim Lamaran
            </button>
      </div>
</div>
@endsection
