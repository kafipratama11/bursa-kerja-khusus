@extends('layouts.admin')
@section('content-admin')
@include('partials.navbar-dashboard-admin')
<div class="d-flex dashboard-content">
      <div class="left w-25 h-100 mt-5">
            <div class="kiri">
                  @include('partials.sidebar-dashboard-company')
            </div>
      </div>
      <div class="pe-5">
            <table class="table table-striped border" style="width: 1000px;">
                  <thead>
                        <tr>
                              <th scope="col">No</th>
                              <th scope="col">Departemen</th>
                              <th scope="col">Bagian</th>
                              <th scope="col">Lokasi</th>
                              <th scope="col">Waktu</th>
                              <th scope="col">Gaji</th>
                              <th scope="col">Email</th>
                              <th scope="col">Ditutup</th>
                              <th scope="col">Action</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($employE->loker as $item)
                        <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$item->nama_pekerjaan}}</td>
                              <td>{{$item->bagian}}</td>
                              <td>{{$item->lokasi}}</td>
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
                                                <li><a class="dropdown-item text-danger d-flex gap-3" href="#"><i class="bi bi-trash"></i>Delete</a></li>
                                          </ul>
                                    </div>
                              </td>
                        </tr>
                        @endforeach
                  </tbody>
            </table>
      </div>
</div>
@endsection
