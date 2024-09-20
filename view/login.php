<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RustRover</title>
    <link href="/library/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav class="sidebar col-md-3 col-lg-2">
            <div class="text-center mb-4">
                <img src="/asset/img/rostroverlogo.png" alt="Logo RustRover" class="img-fluid rounded-circle logo-img">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="/view/artikel.html" class="nav-link text-light">Artikel</a></li>
                <li class="nav-item"><a href="/view/event.html" class="nav-link text-light">Event</a></li>
                <li class="nav-item"><a href="/view/galeri.html" class="nav-link text-light">Galeri Foto</a></li>
                <li class="nav-item"><a href="/view/klien.html" class="nav-link text-light">Klien Kami</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link text-light dropdown-toggle" id="accountDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                    <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="/view/login.php">Sign in</a></li>
                        <li><a class="dropdown-item" href="/view/signup.php">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main class="content col-md-9 col-lg-10">
            <header class="head-content">
                <img src="/asset/img/header image.jpg" alt="RustRover Background" class="header-image">
                <h1 class="header-text">RUST ROVER</h1>
            </header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/view/profile.html">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="/view/visidanmisi.html">Visi dan Misi</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/view/produk.html">Produk kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="/view/kontak.php">Kontak Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="/view/about.html">About us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <section class="welcome-section p-4 p-md-5">
                            <h2 class="text-center mb-4">Masuk</h2>
                            <form action="/controller/validation.php" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                            </form>
                            <p class="text-center mt-3">
                                Belum punya akun? <a href="signup.php">Sign Up</a>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-light">
            © 2024 Copyright: Dewantara
        </div>
        <!-- Copyright -->
    </footer>

    <script src="/library/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>