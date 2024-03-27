@extends('layouts.app')
@section('content')

@section('nav')

@endsection
@include('partials.modal-login-user')
<div class="container">
      <div class="row mt-5">
            @foreach ($data as $item)
            <div class="col-6 mb-3">
                  @guest
                  <a href="{{ route('profile-employer',['id'=>$item->id])}}" class="link-underline link-underline-opacity-0">
                        <div class="card card-company-list ">
                              <div class="pt-3 ps-4 p-3 pb-1">
                                    <div class="fw-bolder fs-5 mb-2">{{$item->name}}</div>
                                    <div class="ps-3">
                                          <div style="font-size: 14px" class="fw-light">
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      {{$item->lokasi}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-envelope"></i>
                                                      {{$item->email}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-telephone"></i>
                                                      {{$item->no_telp}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      Bergabung {{$item->created_at}}
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-footer bg-white mt-2 ps-5">
                                    <small>Jumlah loker : {{$item->loker_count}} </small>
                              </div>
                        </div>
                  </a>
                  @else
                  <a href="{{ route('user.profile-employer',['id'=>$item->id])}}" class="link-underline link-underline-opacity-0">
                        <div class="card card-company-list ">
                              <div class="pt-3 ps-4 p-3 pb-1">
                                    <div class="fw-bolder fs-5 mb-2">{{$item->name}}</div>
                                    <div class="ps-3">
                                          <div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-geo-alt"></i>
                                                      {{$item->lokasi}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-envelope"></i>
                                                      {{$item->email}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-telephone"></i>
                                                      {{$item->no_telp}}
                                                </div>
                                                <div class="d-flex gap-3 mb-2">
                                                      <i class="bi bi-clock"></i>
                                                      Bergabung {{$item->created_at}}
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-footer bg-white mt-2 ps-5">
                                    <small>Jumlah loker : {{$item->loker_count}} </small>
                              </div>
                        </div>
                  </a>
                  @endguest
            </div>
            @endforeach
      </div>
      @include('partials.footer')
</div>

@endsection