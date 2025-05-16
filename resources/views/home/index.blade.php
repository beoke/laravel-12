<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Aplikasi Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">LaravelApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Aplikasi Laravel</h1>
            <p class="lead">Ini adalah halaman beranda sederhana menggunakan Blade dan Bootstrap.</p>
            <a href="#" class="btn btn-primary btn-lg">Mulai Sekarang</a>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Fitur Unggulan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Cepat & Responsif</h5>
                            <p class="card-text">Dibangun dengan performa tinggi dan responsif di semua perangkat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Struktur MVC</h5>
                            <p class="card-text">Menggunakan arsitektur MVC Laravel untuk kemudahan pengembangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Mudah Dikembangkan</h5>
                            <p class="card-text">Sangat fleksibel untuk ditambahkan fitur baru kapan saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary text-white text-center py-4 mt-5">
        <div class="container">
            &copy; {{ date('Y') }} LaravelApp. Semua Hak Dilindungi.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
