@extends('layouts.admin')

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
                  <a class="nav-link active text-light" aria-current="page" href="/view/dashboard-employe">DASHBOARD</a>
            </li>
      </ul>
</div>
@endsection

@section('nav')
<div class="dropdown">
      <a class="dropdown-toggle text-light link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth
            {{ Auth::user()->name }}
            @endauth
      </a>

      <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark menu-sidebar" href="/employe/edit-profile">Profile</a></li>
            <li><a class="dropdown-item text-danger menu-sidebar" href="{{ route('employe-logout')}}">Logout</a></li>
      </ul>
</div>
@endsection

@section('content-admin')

@include('partials.navbar-dashboard-admin')

<h1>heloo world</h1>

@endsection
