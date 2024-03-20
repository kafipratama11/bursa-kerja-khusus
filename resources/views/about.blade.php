@extends('layouts.app')
@section('content')
<div class="container pt-5">
      @include('partials.modal-login-user')
      <div class="card">
            <div class="card-body">
                  <div class="d-flex gap-4 p-4">
                        <div class="d-flex align-items-center justify-content-center">
                              <div class="fw-bold fs-2 bg-warning px-3 rounded d-flex gap-1">J4bSeeker<i class="bi bi-search"></i></div>
                        </div>
                        <div>
                              <div class="fw-semibold fs-5 mb-2">Solusi Pencarian Kerja untuk Alumni SMKN 4</div>
                              <div class="text-secondary">J4BSeeker adalah aplikasi pencarian kerja yang didesain khusus untuk membantu para alumni SMKN 4 menemukan peluang karir yang sesuai dengan keterampilan dan minat mereka. Dengan akses ke berbagai lowongan kerja, sumber daya karir, dan komunitas alumni yang aktif, J4BSeeker memudahkan Anda dalam memulai atau melanjutkan karir Anda setelah menyelesaikan pendidikan di SMKN 4.</div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="mt-5 p-5 pb-0 bg-body-tertiary" style="border-radius: 25px">
            <div class="row">
                  <div class="col-5">
                        <div class="bg-white box-warning-alert border-start border-top border-end pt-3 pb-3 px-2 pb-0">
                              <div class="fw-bolder text-center d-flex justify-content-center">
                                    <p class="bg-body-tertiary py-1 rounded-pill px-3 text-dark" style="font-size: 12px">TIPS CARI LOKER</p>
                              </div>
                              <div class="fw-semibold mt-2 text-center mb-4" style="font-size: 15px">CATATAN UNTUK MEMILIH LOKER</div>
                              <div class="d-flex px-4 gap-3 mb-2">
                                    <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-1-circle-fill"></i></div>
                                    <div class="">
                                          <div class="fw-semibold text-dark mb-1" style="font-size: 14px">Waspadai Penipuan</div>
                                          <div class="about-warning text-secondary">Berhati-hatilah terhadap tawaran pekerjaan yang terlalu bagus untuk menjadi kenyataan atau meminta Anda untuk memberikan informasi pribadi seperti nomor kartu kredit atau nomor jaminan sosial sebelum Anda dipekerjakan.</div>
                                    </div>
                              </div>
                              <div class="d-flex px-4 gap-3 mb-2">
                                    <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-2-circle-fill"></i></div>
                                    <div class="">
                                          <div class="fw-semibold text-dark mb-1" style="font-size: 14px">Gunakan Email Profesional</div>
                                          <div class="about-warning text-secondary">Ketika mengirimkan aplikasi pekerjaan, gunakan alamat email profesional yang mudah diidentifikasi. Hindari menggunakan alamat email pribadi yang tidak terkait dengan nama Anda.</div>
                                    </div>
                              </div>
                              <div class="d-flex px-4 gap-3 mb-2">
                                    <div class="box-icon-about rounded d-flex align-items-center justify-content-center"><i class="bi bi-3-circle-fill"></i></div>
                                    <div class="">
                                          <div class="fw-semibold text-dark mb-1" style="font-size: 14px">Pelajari Hak Anda</div>
                                          <div class="about-warning text-secondary">Ketahui hak-hak Anda sebagai pencari kerja, termasuk hak privasi dan perlindungan data. Jika Anda merasa hak-hak Anda dilanggar, Anda memiliki hak untuk melaporkannya.</div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-7">
                        <div class="d-flex align-items-center">
                              <div class="text-secondary fs-5">
                                    Mencari pekerjaan secara aman tidak hanya berarti memperhatikan faktor-faktor keamanan fisik, tetapi juga melibatkan perlindungan terhadap privasi, keamanan data, dan memastikan bahwa Anda terhindar dari penipuan atau ancaman online.
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      @include('partials.footer')
</div>
@endsection
