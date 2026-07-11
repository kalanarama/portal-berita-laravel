<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Suara Nusa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F6FA;
            font-family: 'Segoe UI', sans-serif;
            color: #1B2A4A;
        }
        .nav-atas {
            background-color: #1B2A4A;
            padding: 10px 0;
        }
        .teks-logo {
            font-size: 1.6rem;
            font-weight: 800;
            color: #ffff !important;
            letter-spacing: -1px;
        }
        .teks-logo span {
            color: #F5A623;
        }
        
        .kotak-cari {
            border-radius: 20px;
            border: none;
            padding: 6px 16px;
            font-size: 0.85rem;
            width: 280px;
            background: #2d3e5e;
            color: #ffff;
        }
        .kotak-cari::placeholder {
            color: #aab4c8;
        }
        .kotak-cari:focus {
            outline: none;
            background: #3a4f72;
            color: #ffff;
        }
        .btn-masuk {
            background: transparent;
            border: 1px solid #F5A623;
            color: #F5A623;
            border-radius: 20px;
            padding: 5px 16px;
            font-size: 0.85rem;
        }
        .btn-masuk:hover {
            background: #F5A623;
            color: #1B2A4A;
        }
        .btn-daftar {
            background: #F5A623;
            border: none;
            color: #1B2A4A;
            border-radius: 20px;
            padding: 5px 16px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .btn-daftar:hover {
            background: #e09400;
        }
        .nav-kategori {
            background-color: #F5A623;
            padding: 8px 0;
        }
        .nav-kategori a {
            color: #1B2A4A;
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            margin: 0 12px;
        }
        .nav-kategori a:hover {
            color: #ffff;
        }
        .judul-section {
            font-size: 1.1rem;
            font-weight: 800;
            color: #1B2A4A;
            border-left: 4px solid #F5A623;
            padding-left: 10px;
            margin-bottom: 16px;
        }
        .kartu-berita {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            transition: transform 0.2s;
            background: #ffff;
        }
        .kartu-berita:hover {
            transform: translateY(-4px);
        }
        .kartu-berita img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }
        .kartu-berita .card-body {
            padding: 12px;
        }
        .kartu-berita .card-title {
            font-size: 0.88rem;
            font-weight: 700;
            color: #1B2A4A;
            margin: 6px 0;
            line-height: 1.4;
        }
        .kartu-berita .info-kecil {
            font-size: 0.68rem;
            color: #888;
        }
        .label-kategori {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
            background: #F5A623;
            color: #1B2A4A;
        }
        .badge-nomor {
            background-color: #1B2A4A;
            color: #F5A623;
            font-weight: 700;
            font-size: 0.75rem;
            padding: 3px 8px;
            border-radius: 50%;
            min-width: 24px;
            text-align: center;
            display: inline-block;
        }
        .img-berita-utama {
            width: 100%;
            height: 320px !important;
            object-fit: cover;
        }
        .judul-utama {
            font-size: 1.2rem;
        }
        .item-berita {
            display: flex;
            gap: 14px;
            padding: 16px 0;
            border-bottom: 1px solid #e8eaf0;
        }
        .item-berita img {
            width: 130px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }
        .item-berita .judul-berita {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1B2A4A;
            line-height: 1.4;
            margin: 4px 0 6px;
        }
        .item-berita .judul-berita:hover {
            color: #F5A623;
        }
        .item-berita .meta-berita {
            font-size: 0.75rem;
            color: #888;
        }

        /* halaman detail berita */
        .link-kuning {
            color: #F5A623;
            text-decoration: none;
        }
        .judul-artikel {
            font-size: 1.8rem;
            font-weight: 800;
            color: #1B2A4A;
            line-height: 1.3;
            margin: 12px 0;
        }
        .meta-artikel {
            font-size: 0.82rem;
            color: #888;
        }
        .garis-pembatas {
            border-color: #F5A623;
            border-width: 2px;
            opacity: 1;
            margin-bottom: 20px;
        }
        .foto-artikel {
            border-radius: 10px;
            max-height: 420px;
            object-fit: cover;
        }
        .isi-artikel {
            font-size: 1rem;
            line-height: 1.9;
            color: #1B2A4A;
            text-align: justify;
        }
        .btn-kembali {
            background: #1B2A4A;
            color: #F5A623;
            padding: 10px 24px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.88rem;
        }
        .btn-kembali:hover {
            background: #F5A623;
            color: #1B2A4A;
        }

        /* footer */
        .footer-bawah {
            background-color: #1B2A4A;
            color: #aab4c8;
            padding: 40px 0 0;
            margin-top: 40px;
        }
        .nama-footer {
            font-size: 1.4rem;
            font-weight: 800;
            color: #ffff;
        }
        .nama-footer span {
            color: #F5A623;
        }
        .deskripsi-footer {
            font-size: 0.82rem;
            color: #aab4c8;
            margin-top: 8px;
            line-height: 1.6;
        }
        .judul-footer {
            color: #F5A623;
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 12px;
        }
        .link-footer a {
            display: block;
            color: #aab4c8;
            text-decoration: none;
            font-size: 0.82rem;
            margin-bottom: 6px;
        }
        .link-footer a:hover {
            color: #F5A623;
        }
        .sosmed-footer a {
            display: block;
            color: #aab4c8;
            text-decoration: none;
            font-size: 0.82rem;
            margin-bottom: 8px;
        }
        .sosmed-footer a:hover {
            color: #F5A623;
        }
        .copyright-bar {
            background-color: #111e33;
            text-align: center;
            padding: 12px 0;
            font-size: 0.78rem;
            color: #888;
            margin-top: 30px;
        }

        /* pagination */
        .pagination {
            justify-content: center;
        }
        .pagination .page-item .page-link {
            color: #1B2A4A;
            border-radius: 6px;
            margin: 0 2px;
        }
        .pagination .page-item.active .page-link {
            background-color: #F5A623;
            border-color: #F5A623;
            color: #1B2A4A;
            font-weight: 700;
        }

        .icon-cari {
            color: #aab4c8;
        }
        .input-cari {
            background: transparent;
            border: none;
            outline: none;
            color: #ffff;
            width: 100%;
            font-size: 0.85rem;
        }
        .input-cari::placeholder {
            color: #aab4c8;
        }

        .teks-user {
            color: #ffff;
            font-size: 0.85rem;
            padding-top: 6px;
        }

        .link-berita {
            text-decoration: none;
            color: inherit;
        }
        .preview-konten {
            font-size: 0.82rem;
            margin-bottom: 6px;
        }
    </style>
</head>
<body>

<!-- navbar utama -->
<nav class="nav-atas">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="text-decoration-none">
            <span class="teks-logo">Suara<span>Nusa</span></span>
        </a>
        <div class="kotak-cari d-flex align-items-center">
            <i class="fas fa-search me-2 icon-cari"></i>
            <input type="text" placeholder="Cari berita..." class="input-cari">
        </div>
        <div class="d-flex gap-2">
            @guest
                <a href="{{ url('/login') }}" class="btn btn-masuk">Masuk</a>
                <a href="{{ url('/register') }}" class="btn btn-daftar">Daftar</a>
            @endguest
            @auth
                <span class="teks-user">👋 {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ url('/logout') }}" class="mb-0">
                    @csrf
                    <button type="submit" class="btn btn-masuk">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<!-- navbar kategori -->
<div class="nav-kategori">
    <div class="container text-center">
        <a href="#">Nasional</a>
        <a href="#">Internasional</a>
        <a href="#">Ekonomi</a>
        <a href="#">Teknologi</a>
        <a href="#">Olahraga</a>
        <a href="#">Lifestyle</a>
        <a href="#">Edukasi</a>
        <a href="#">Travel</a>
    </div>
</div>

<!-- konten halaman -->
<div class="container mt-4">@yield('body')</div>

<!-- footer -->
<footer class="footer-bawah">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="nama-footer">Suara<span>Nusa</span></div>
                <p class="deskripsi-footer">Berita apa adanya, bukan yang seharusnya.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="judul-footer">Navigasi</div>
                <div class="link-footer">
                    <a href="#">Tentang Kami</a>
                    <a href="#">Redaksi</a>
                    <a href="#">Kontak</a>
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="judul-footer">Ikuti Kami</div>
                <div class="sosmed-footer">
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-x-twitter"></i> X (Twitter)</a>
                    <a href="#"><i class="fab fa-youtube"></i> YouTube</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">&copy; 2026 Suara Nusa</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>