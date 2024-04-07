@extends('layouts.app')
@section('content')
<div class="container pt-5">
      @include('partials.modal-login-user')
      <div class="card">
            <div class="card-body">
                  <div class="d-flex row gap-4 p-4">
                        <div class="d-flex col-12-sm align-items-center justify-content-center">
                              <div class="fw-bold fs-2 bg-warning px-3 rounded d-flex gap-1">J4bSeeker<i class="bi bi-search"></i></div>
                        </div>
                        <div>
                              <div class="fw-semibold fs-5 mb-2">Solusi Pencarian Kerja untuk Alumni SMKN 4</div>
                              <div class="text-secondary">J4BSeeker adalah aplikasi pencarian kerja yang didesain khusus untuk membantu para alumni SMKN 4 menemukan peluang karir yang sesuai dengan keterampilan dan minat mereka. Dengan akses ke berbagai lowongan kerja, sumber daya karir, dan komunitas alumni yang aktif, J4BSeeker memudahkan Anda dalam memulai atau melanjutkan karir Anda setelah menyelesaikan pendidikan di SMKN 4.</div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="mt-5 pb-0 bg-body-tertiary" style="border-radius: 25px 25px 0 0">
            <div class="list-mekbuk">
                  <div class="d-flex justify-content-center">
                        <div class="phoni-mekbuk d-flex justify-content-end bg-dark">
                              <div class="camera me-3"></div>
                        </div>
                  </div>
                  <div class="row p-5 pb-0">
                        <div class="col-xl-5 col-sm-12">
                              <div class="bg-white box-warning-alert border-start border-top border-end pt-3 pb-3 px-2 pb-0 overflow-auto" style="max-height: 500px">
                                    <div class="fw-bolder text-start d-flex justify-content-center">
                                          <p class="bg-black py-1 rounded-pill px-3 text-secondary position-absolute dinamic-island-1" style="font-size: 12px"><i class="bi bi-music-note-beamed"></i>
                                                <div class="d-flex align-items-center">
                                                      <div class="camera-1 z-1 mt-1 position-absolute"></div>
                                                </div>
                                          </p>
                                    </div>
                                    <div>
                                          <div class="fw-semibold mt-4 text-center mb-4" style="font-size: 15px">CATATAN UNTUK MEMILIH LOKER</div>
                                          <div class="px-3">
                                                <div class="d-flex gap-3 mb-2">
                                                      <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-1-circle-fill"></i></div>
                                                      <div class="">
                                                            <div class="fw-semibold text-dark mb-1 lh-sm" style="font-size: 14px">Pertimbangkan Kembali Tujuan Karir Anda</div>
                                                            <div class="about-warning text-secondary">Sebelum melamar, pertimbangkan apakah lowongan kerja tersebut sesuai dengan tujuan karir jangka panjang Anda. Tinjau apakah pekerjaan tersebut akan membantu Anda mencapai tujuan tersebut atau tidak.</div>
                                                      </div>
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-2-circle-fill"></i></div>
                                                      <div class="">
                                                            <div class="fw-semibold text-dark mb-1 lh-sm" style="font-size: 14px">Perhatikan Lokasi dan Transportasi</div>
                                                            <div class="about-warning text-secondary">Pertimbangkan lokasi fisik perusahaan dan aksesibilitasnya dari tempat tinggal Anda. Pastikan Anda siap untuk melakukan perjalanan atau mengatur transportasi jika diperlukan.</div>
                                                      </div>
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-3-circle-fill"></i></div>
                                                      <div class="">
                                                            <div class="fw-semibold text-dark mb-1 lh-sm" style="font-size: 14px">Evaluasi Manfaat dan Kesempatan Karir</div>
                                                            <div class="about-warning text-secondary">Tinjau manfaat yang ditawarkan oleh perusahaan, seperti paket kompensasi, fleksibilitas kerja, kesempatan untuk pengembangan karir, dan program pelatihan.</div>
                                                      </div>
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-4-circle-fill"></i></div>
                                                      <div class="">
                                                            <div class="fw-semibold text-dark mb-1 lh-sm" style="font-size: 14px">Sesuaikan dengan Kualifikasi dan Minat Anda</div>
                                                            <div class="about-warning text-secondary">Pastikan untuk memilih lowongan kerja yang sesuai dengan kualifikasi, keahlian, dan minat Anda. Baca deskripsi pekerjaan dengan cermat dan pastikan Anda memenuhi persyaratan yang ditetapkan oleh perusahaan.</div>
                                                      </div>
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-5-circle-fill"></i></div>
                                                      <div class="">
                                                            <div class="fw-semibold text-dark mb-1 lh-sm" style="font-size: 14px">Perhatikan Kriteria Pencarian</div>
                                                            <div class="about-warning text-secondary"> Gunakan fitur pencarian di aplikasi job seeker untuk menyaring lowongan kerja berdasarkan kriteria yang penting bagi Anda, seperti lokasi, industri, level jabatan, dan gaji.</div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-7 col-sm-12">
                              <div class="d-flex align-items-center">
                                    <div class="text-secondary fs-5">
                                          Mencari pekerjaan secara aman tidak hanya berarti memperhatikan faktor-faktor keamanan fisik, tetapi juga melibatkan perlindungan terhadap privasi, keamanan data, dan memastikan bahwa Anda terhindar dari penipuan atau ancaman online.
                                    </div>
                              </div>
                              <div class="box-warning-alert2 shadow-sm bg-white text-secondary gap-2">
                                    <div style="width: 100%" class=" d-flex justify-content-end">
                                          <div class="d-flex p-3 text-secondary gap-4 justify-content-start" style="width: 100%">
                                                <div class="d-flex align-items-center">
                                                      <div class="dinamic-island bg-black d-flex justify-content-center rounded-pill">
                                                            <div class="camera"></div>
                                                      </div>
                                                </div>
                                                <div class="tab-content d-flex align-items-center text-dark" id="nav-tabContent" style="font-size: 16px">
                                                      <div class="tab-pane fade" id="list-satu" role="tabpanel" aria-labelledby="list-satu-list">Setiap pengguna yang mendaftar di J4BSeeker harus melewati proses verifikasi identitas untuk memastikan keaslian informasi yang diberikan. Hal ini membantu mencegah akun palsu atau penipuan identitas.</div>
                                                      <div class="tab-pane fade" id="list-dua" role="tabpanel" aria-labelledby="list-dua-list">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                  <div class="fw-bold d-flex gap-1 text-dark" style="font-size: 68px">J4bSeeker<i class="bi bi-search"></i></div>
                                                            </div>
                                                      </div>
                                                      <div class="tab-pane fade" id="list-tiga" role="tabpanel" aria-labelledby="list-tiga-list">Kami memiliki sistem pengaduan dan pelaporan yang memungkinkan pengguna untuk melaporkan aktivitas yang mencurigakan atau penipuan yang mereka temui. Tim kami akan segera menindaklanjuti setiap laporan dengan serius.</div>
                                                </div>
                                          </div>
                                          <div class="nav-iphone bg-body-tertiary py-4">
                                                <div class="vstack gap-5" role="tablist" id="list-tab">
                                                      <div class="d-flex align-items-center justify-content-center">
                                                            <a class="text-secondary" id="list-satu-list" data-bs-toggle="list" href="#list-satu" role="tab" aria-controls="list-satu" class="list-group-item list-group-item-action active" data-page="page1">
                                                                  <div class="hover-nav-iphone rounded-pill"><i class="bi bi-caret-up"></i></div>
                                                            </a>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-center">
                                                            <a class="text-secondary" id="list-dua-list" data-bs-toggle="list" href="#list-dua" role="tab" aria-controls="list-dua" class="list-group-item list-group-item-action" data-page="page1">
                                                                  <div class="hover-nav-iphone rounded-pill"><i class="bi bi-circle-fill"></i></i></div>
                                                            </a>
                                                      </div>
                                                      <div class="d-flex align-items-center justify-content-center">
                                                            <a class="text-secondary" id="list-tiga-list" data-bs-toggle="list" href="#list-tiga" role="tab" aria-controls="list-tiga" class="list-group-item list-group-item-action" data-page="page1">
                                                                  <div class="hover-nav-iphone rounded-pill"><i class="bi bi-caret-down"></i></div>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="card w-100 d-flex justify-content-center mt-5">
            <a class="w-full link-underline link-underline-opacity-0 text-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <div class="card-body text-center">
                        Team
                  </div>
            </a>
      </div>
      <div class="collapse" id="collapseExample">
            <div class="card card-body mt-2">
                  <div class="row">
                        <div class="col-xl-6 col-12-md col-12-sm mb-3">
                              <div class="d-flex gap-3">
                                    <div>
                                          <img src="../img/bg_iu.jpg" class="rounded" style="width: 100px" style="height: 100px" alt="">
                                    </div>
                                    <div>
                                          <div class="fw-semibold">Ihsan Ushain</div>
                                          <div class="text-secondary" style="font-size: 15px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nihil consequuntur corporis blanditiis et. Modi quae saepe temporibus illo! Itaque.</div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-6 col-12-md col-12-sm mb-3">
                              <div class="d-flex gap-3">
                                    <div>
                                          <img src="../img/bg_iu.jpg" class="rounded" style="width: 100px" style="height: 100px" alt="">
                                    </div>
                                    <div>
                                          <div class="fw-semibold">Ihsan Ushain</div>
                                          <div class="text-secondary" style="font-size: 15px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nihil consequuntur corporis blanditiis et. Modi quae saepe temporibus illo! Itaque.</div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-6 col-12-md col-12-sm mb-2">
                              <div class="d-flex gap-3">
                                    <div>
                                          <img src="../img/bg_iu.jpg" class="rounded" style="width: 100px" style="height: 100px" alt="">
                                    </div>
                                    <div>
                                          <div class="fw-semibold">Ihsan Ushain</div>
                                          <div class="text-secondary" style="font-size: 15px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nihil consequuntur corporis blanditiis et. Modi quae saepe temporibus illo! Itaque.</div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-6 col-12-md col-12-sm mb-2">
                              <div class="d-flex gap-3">
                                    <div>
                                          <img src="../img/bg_iu.jpg" class="rounded" style="width: 100px" style="height: 100px" alt="">
                                    </div>
                                    <div>
                                          <div class="fw-semibold">Ihsan Ushain</div>
                                          <div class="text-secondary" style="font-size: 15px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nihil consequuntur corporis blanditiis et. Modi quae saepe temporibus illo! Itaque.</div>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>

@endsection
