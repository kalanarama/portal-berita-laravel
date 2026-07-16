@extends('master')
@section('title', 'Tambah Berita')
@section('body')

<div class="col-md-8 offset-md-2">
    <div class="d-flex align-items-center gap-2 mb-3">
        <a href="{{ route('admin.posts.index') }}" class="btn-kembali">&larr; Kembali</a>
        <h4 class="fw-bold m-0">Tambah Berita Baru</h4>
    </div>

    <div class="kartu-berita p-4">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="fw-bold">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Judul berita...">
            </div>

            <div class="mb-3">
                <label class="fw-bold">Konten</label>
                <textarea name="content" class="form-control" rows="6" placeholder="Isi berita...">{{ old('content') }}</textarea>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="fw-bold">Kategori</label>
                    <select name="category" class="form-select">
                        @foreach(['Nasional','Internasional','Ekonomi','Teknologi','Olahraga','Lifestyle','Edukasi','Travel'] as $cat)
                            <option value="{{ $cat }}" {{ old('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="fw-bold">Publisher</label>
                    <input type="text" name="publisher" class="form-control" value="{{ old('publisher') }}" placeholder="Nama penulis...">
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="fw-bold">Tanggal Berita</label>
                    <input type="date" name="event_date" class="form-control" value="{{ old('event_date') }}">
                </div>
                <div class="col-md-6">
                    <label class="fw-bold">Foto Berita</label>
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="previewGambar(this)">
                    <img id="preview" src="#" alt="Preview" class="mt-2 rounded d-none" style="height:100px; object-fit:cover; width:100%;">
                </div>
            </div>

            <div class="mb-4">
                <label class="fw-bold">Status</label>
                <div class="d-flex gap-3 mt-1">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="published" value="yes" id="pubYes"
                               {{ old('published') == 'yes' ? 'checked' : '' }}>
                        <label class="form-check-label" for="pubYes">Publish</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="published" value="no" id="pubNo"
                               {{ old('published', 'no') == 'no' ? 'checked' : '' }}>
                        <label class="form-check-label" for="pubNo">Draft</label>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-daftar">Simpan Berita</button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-masuk">Batal</a>
            </div>
        </form>
    </div>
</div>

<script>
function previewGambar(input) {
    const preview = document.getElementById('preview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection