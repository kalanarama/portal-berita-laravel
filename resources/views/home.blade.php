@extends('master')
@section('title', 'Home')
@section('body')
<div class="col-md-8 offset-md-2 mt-5">
    <h2>Selamat datang, {{ Auth::user()->name }}!</h2>
    <p>Email: {{ Auth::user()->email }}</p>
    <form method="POST" action="{{ url('/logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    <p class="mt-3">Portal Berita, <a href="{{ url('/') }}">Klik di sini!</a></p>
</div>
@stop