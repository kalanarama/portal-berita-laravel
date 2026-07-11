@extends('master')
@section('title', 'Beranda')
@section('body')

<!-- berita populer -->
<div class="judul-section">
    <i class="fas fa-fire me-2"></i>Berita Populer
</div>

<!-- berita utama -->
@php $utama = $popular->first() @endphp
<div class="kartu-berita mb-3">
    <img src="{{ $utama->image_url }}"
         alt="{{ $utama->title }}" class="img-berita-utama">
    <div class="card-body">
        <div class="d-flex align-items-center gap-2">
            <span class="badge-nomor">1</span>
            <span class="label-kategori">{{ $utama->category }}</span>
        </div>
        <a href="{{ url('/posts/'.$utama->id) }}" class="link-berita">
            <div class="card-title mt-2 judul-utama">{{ $utama->title }}</div>
        </a>
        <div class="info-kecil mt-2 d-flex flex-wrap align-items-center gap-2">
            <span><i class="fas fa-user me-1"></i>{{ $utama->publisher }}</span>
            <span>&bull;</span>
            <span><i class="far fa-calendar me-1"></i>{{ $utama->event_date ? $utama->event_date->format('d M Y') : $utama->created_at->format('d M Y') }}</span>
            <span>&bull;</span>
            <span><i class="fas fa-clock me-1"></i>{{ $utama->created_at->format('H:i') }} WIB</span>
            <span>&bull;</span>
            <span><i class="fas fa-eye me-1"></i>{{ number_format($utama->views) }} Views</span>
        </div>
    </div>
</div>

<!-- 4 berita lainnya -->
<div class="row g-3 mb-4">
    @foreach($popular->skip(1) as $index => $post)
        <div class="col-md-3">
            <div class="kartu-berita h-100">
                <img src="{{ $post->image_url }}"
                     alt="{{ $post->title }}">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge-nomor">{{ $loop->iteration + 1 }}</span>
                        <span class="label-kategori">{{ $post->category }}</span>
                    </div>
                    <a href="{{ url('/posts/'.$post->id) }}" class="link-berita">
                        <div class="card-title mt-2">{{ $post->title }}</div>
                    </a>
                    <div class="info-kecil mt-2 d-flex flex-wrap align-items-center gap-2">
                        <span><i class="fas fa-user me-1"></i>{{ $post->publisher }}</span>
                        <span>&bull;</span>
                        <span><i class="far fa-calendar me-1"></i>{{ $post->event_date ? $post->event_date->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                        <span>&bull;</span>
                        <span><i class="fas fa-clock me-1"></i>{{ $post->created_at->format('H:i') }} WIB</span>
                        <span>&bull;</span>
                        <span><i class="fas fa-eye me-1"></i>{{ number_format($post->views) }} Views</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- berita terbaru -->
<div class="judul-section">
    <i class="fas fa-newspaper me-2"></i>Berita Terbaru
</div>
@foreach($posts as $post)
    <div class="item-berita">
        <img src="{{ $post->image_url }}"
             alt="{{ $post->title }}">
        <div>
            <span class="label-kategori">{{ $post->category }}</span>
            <a href="{{ url('/posts/'.$post->id) }}" class="link-berita">
                <div class="judul-berita">{{ $post->title }}</div>
            </a>
            <div class="preview-konten text-muted">
                {{ Str::limit($post->content, 120) }}
            </div>
            <div class="meta-berita d-flex flex-wrap align-items-center gap-2">
                <span><i class="fas fa-user me-1"></i>{{ $post->publisher }}</span>
                <span>&bull;</span>
                <span><i class="far fa-calendar me-1"></i>{{ $post->event_date ? $post->event_date->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                <span>&bull;</span>
                <span><i class="fas fa-clock me-1"></i>{{ $post->created_at->format('H:i') }} WIB</span>
                <span>&bull;</span>
                <span><i class="fas fa-eye me-1"></i>{{ number_format($post->views) }} Views</span>
            </div>
        </div>
    </div>
@endforeach

<div class="d-flex justify-content-center mt-4 mb-2">
    {{ $posts->onEachSide(1)->links() }}
</div>

@endsection