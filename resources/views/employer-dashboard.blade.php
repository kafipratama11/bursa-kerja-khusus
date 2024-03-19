<<<<<<< HEAD
@extends('layouts.app')
@section('content')

@section('nav')
<div class="dropdown">
      <a class="dropdown-toggle text-light link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::guard('employe')->user()->name }}
      </a>
      <ul class="dropdown-menu">
            <li><a class="dropdown-item text-danger" href="{{ route('employe-logout')}}">Log Out</a></li>
      </ul>
</div>
@endsection
<div class="container">
      <h1 class="text-primary fs-1">hello world</h1>
</div>
@endsection
=======
>>>>>>> 05fdb51a9c41e8852d14fe951a59dde2ff42e5cc
