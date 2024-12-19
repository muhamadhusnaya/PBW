<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Jurnal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg shadow-sm p-3 fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="index.html">My Daily Jurnal</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- Home page -->
    <div class="bg-danger-subtle mb-5 mt-5" id="home">
        <div class="container d-flex flex-md-row-reverse justify-content-between pt-md-5 pb-md-5 flex-column pt-3">
            <div class="container">
                <img src="img/cover.jpg" class="rounded-4 float-md-end mx-auto d-block" width="75%" alt="COVER">
            </div>
            <div class="container align-content-center">
                <p class="fs-1 fw-bold ">
                    Create Memoris, Save Memori, Everyday
                </p>
                <p class="fs-2 fw-light">
                    Mencatat semua kegiatan sehari-hari yang ada tanpa kecuali
                </p>
            </div>
        </div>
    </div>
    <!-- END Home page -->
    <!-- Article -->
    <h1 class="text-center mt-5" id="article">My Daily Journal</h1>
    <div class="mx-md-4 mt-1 mb-5 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <?php
        $sql = "SELECT * FROM articles ORDER BY tanggal ASC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
        ?>
            <div class="col">
                <div class="card h-100">
                    <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="..." style="height: 280px;">
                    <div class="card-body bg-danger-subtle">
                        <h5 class="card-title"><?= $row["judul"] ?></h5>
                        <p class="card-text">
                            <?= $row["isi"] ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">
                            <?= $row["tanggal"] ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- END Articel -->
    <!-- Gallery -->
    <h1 class="mt-5 text-center" id="gallery">Gallery</h1>

    <div class="row mt-3 mx-1">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="img/gallery 1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery1" />

            <img src="img/gallery 2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery2" />

            <img src="img/gallery 3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery3" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="img/gallery 4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery4" />

            <img src="img/gallery 5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery5" />

            <img src="img/gallery 6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery6" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="img/gallery 7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery7" />

            <img src="img/gallery 8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery8" />

            <img src="img/gallery 9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="gallery9" />
        </div>
    </div>
    <!-- End Gallery -->

    <!-- schedule -->
    <h1 class="mt-5 text-center" id="schedule">SCHEDULE</h1>

    <div class="mx-md-4 mt-1 mb-5 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-header bg-danger bg-opacity-75 bg-danger bg-opacity-75">
                    Senin
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Logika Informatika <br />
                        09:30 - 12:00 | H.4.11
                    </li>
                    <li class="list-group-item">
                        Rekayasa Perangkat Lunak <br />
                        12:30 - 15:00 | H.5.11
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-header bg-danger bg-opacity-75">Selasa</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Pendidikan Kewarganegaraan <br />
                        08:40 - 10:20 | Aula E3
                    </li>
                    <li class="list-group-item">
                        Sistem Operasi <br />
                        12:30 - 15:00 | H.4.10
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-header bg-danger bg-opacity-75">Rabu</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Basis Data <br />
                        10:20 - 12:00 | D.3.M
                    </li>
                    <li class="list-group-item">
                        Technopreneurship <br />
                        14:10 - 15:50 | Kulino
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-header bg-danger bg-opacity-75">Kamis</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Probabilitas dan Statistik <br />
                        07:00 - 09:30 | H.3.2
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-header bg-danger bg-opacity-75">Jum'at</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Pemrograman Berbasis Web <br />
                        07:00 - 08:40 | D.2.J
                    </li>
                    <li class="list-group-item">
                        Basis Data <br />
                        10:20 - 12.00 | H.5.3
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-header bg-danger bg-opacity-75">Sabtu</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tidak Ada Jadwal</li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- END Scedule -->

    <!-- Profile -->
    <div class="profile d-flex flex-column flex-lg-row justify-content-around align-items-center text-center text-lg-start py-5" id="profile">
        <div class="profile-picture mb-4 mb-lg-0">
            <img
                src="./img/myfotonw.jpeg"
                alt="profile"
                class="img-fluid rounded-circle"
                width="150" />
        </div>
        <div class="profile-details">
            <p class="fs-5 mb-1">A11.2023.15094</p>
            <h3>Muhamad Husnaya</h3>
            <p class="mb-1">Program Studi Teknik Informatika</p>
            <a href="https://dinus.ac.id/">Universitas Dian Nuswantoro</a>
        </div>
    </div>
    <!-- Profile End -->
    <!-- END Profile -->

    <!-- Footer -->
    <footer class="bg-dark-subtle mt-5">
        <p class="p-3 text-center">&copy; 2024 Copyright: Muhamad Husnaya. All rights reserved.</p>
    </footer>
    <!-- END Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>