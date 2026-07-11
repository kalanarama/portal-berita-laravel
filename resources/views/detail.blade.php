@extends('master')
@section('title', $post->title)
@section('body')

<div class="row justify-content-center">
    <div class="col-md-8">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="link-kuning">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="link-kuning">{{ $post->category }}</a>
                </li>
                <li class="breadcrumb-item active text-muted">Artikel</li>
            </ol>
        </nav>

        <span class="label-kategori mb-2 d-inline-block">{{ $post->category }}</span>

        <h1 class="judul-artikel">{{ $post->title }}</h1>

        <!-- info penulis -->
        <div class="meta-artikel d-flex flex-wrap align-items-center gap-2 mb-3">
            <span><i class="fas fa-user me-1"></i>{{ $post->publisher }}</span>
            <span>&bull;</span>
            <span><i class="far fa-calendar me-1"></i>{{ $post->event_date ? $post->event_date->format('d M Y') : $post->created_at->format('d M Y') }}</span>
            <span>&bull;</span>
            <span><i class="fas fa-clock me-1"></i>{{ $post->created_at->format('H:i') }} WIB</span>
            <span>&bull;</span>
            <span><i class="fas fa-eye me-1"></i>{{ number_format($post->views) }} Views</span>
        </div>

        <hr class="garis-pembatas">

        <img src="{{ $post->image_url }}"
             alt="{{ $post->title }}"
             class="w-100 mb-4 foto-artikel">

        <div class="isi-artikel">
            {{ $post->content }}
        </div>

        <div class="mt-4 mb-5">
            <a href="{{ url('/') }}" class="btn-kembali">&larr; Kembali ke Beranda</a>
        </div>

    </div>
</div>

@endsection