@extends('components.template')
@section('title', 'login')
@section('content')
<div class="hero min-h-screen"
  style="background-image: url(https://images.pexels.com/photos/347867/pexels-photo-347867.jpeg);">
  <div class="hero-overlay bg-opacity-50"></div>
  <div class="hero-content text-neutral-content ">
    <div class="card bg-base-100 w-96 shadow-xl bg-opacity-40 ">
        <div class="card-body">
          <h2 class="card-title text-2xl text-white">Login</h2>
          <p class="text-white">Welcome!</p>
          <p class="text-white">Please login to continue</p>
          <div class="card-actions gap-5 justify-center">
            <a href="/homepage" class="btn btn-custom">Login</a>
            <button class="btn btn-custom">Register</button>
          </div>
        </div>
      </div>
  </div>
</div>


@endsection
