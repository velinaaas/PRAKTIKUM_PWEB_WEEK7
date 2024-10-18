@extends('components.template')
@section('title', 'welcomepage')
@section('content')

<div class="hero min-h-screen"
  style="background-image: url(https://images.pexels.com/photos/347867/pexels-photo-347867.jpeg);">
  <div class="hero-overlay bg-opacity-50"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
      <p class="mb-5">
        Ini adalah website untuk tugas praktikum pweb
      </p>
      <a href="/login" class="btn btn-sm">Get Started</a>
    </div>
  </div>
</div>
    
@endsection
