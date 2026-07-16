@extends('master')
@section('title', 'Admin — Kelola Berita')
@section('body')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold m-0">Kelola Berita</h4>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-daftar">+ Tambah Berita</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="kartu-berita p-3">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Publisher</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $i => $post)
            <tr>
                <td>{{ $posts->firstItem() + $i }}</td>
                <td>{{ Str::limit($post->title, 50) }}</td>
                <td><span class="label-kategori">{{ $post->category }}</span></td>
                <td>{{ $post->publisher }}</td>
                <td>
                    @if($post->published === 'yes')
                        <span class="badge bg-success">Publish</span>
                    @else
                        <span class="badge bg-secondary">Draft</span>
                    @endif
                </td>
                <td>{{ $post->created_at->format('d M Y') }}</td>
                <td>
                    <div class="d-flex gap-1 flex-nowrap">
                        <a href="{{ url('/posts/'.$post->id) }}" class="btn btn-sm btn-outline-secondary" target="_blank">Lihat</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $posts->onEachSide(1)->links() }}
    </div>
</div>

@endsection