<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                  <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                              Modal title
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body ps-5 pb-5">
                        <div class="mb-4">
                              <div class="modal-position-loker fs-4 fw-semibold">
                                    Administrasi
                              </div>
                              <div class="modal-perusahaan-loker fs-5 fw-normal">
                                    PT First Property Abadi
                              </div>
                        </div>
                        <div class="mb-3">
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-geo-alt"></i>
                                    Yogyakarta, DI Yogyakarta
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-building"></i>
                                    Entry Data dan Pengolahan Data
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-clock"></i>
                                    Full Time
                              </div>
                              <div class="d-flex gap-3 mb-2">
                                    <i class="bi bi-cash-stack"></i>
                                    Rp. 4,500,000 - Rp. 5,000,000
                              </div>
                        </div>
                        <div class="modal-post-day-loker mb-3 text-body-tertiary">
                              Diposting 1 hari yang lalu
                        </div>
                        <div class="modal-jobdesc mb-4">
                              <div class="title-modal-jobdesc mb-2 fw-bolder">JOB DESCRIPTION</div>
                              <div class="detail-modal-jobdesc">
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                              </div>
                        </div>
                        <div class="modal-requirement mb-4">
                              <div class="title-modal-requirement mb-2 fw-bolder">
                                    JOB REQUIREMENT
                              </div>
                              <div class="detail-modal-requirement">
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                                    <div>
                                          > Lorem ipsum dolor sit amet consectetur adipisicing
                                          elit. Temporibus, incidunt.
                                    </div>
                              </div>
                        </div>
                        @guest
                        <a type="button" href="apply" class="btn btn-apply-loker px-5 fw-bolder" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Lamaran Cepat
                        </a>
                        @else
                        <a type="button" href="/user/apply" class="btn btn-apply-loker px-5">
                              Lamaran Cepat
                        </a>
                        @endguest
                  </div>
            </div>
      </div>
</div>
