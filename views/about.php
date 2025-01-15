<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tentang Kami</title>
    <style>
        body {
            background-color: #f9f5f1;
            color: #6f4e37;
        }

        h1,
        h2 {
            color: #6f4e37;
        }

        .about-container {
            text-align: center;
            margin-bottom: 40px;
        }

        .gallery-container {
            margin-top: 40px;
        }

        .gallery-item img {
            width: 100%;
            /* Mengisi seluruh kolom */
            height: 200px;
            /* Tinggi tetap */
            object-fit: cover;
            /* Mempertahankan proporsi */
            border: 2px solid #6f4e37;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        .gallery-caption {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- About Section -->
        <div class="about-container">
            <h1>
                Restoran Chicken: Sajian Ayam Lezat untuk Setiap Selera
            </h1>
            <p>
                Nikmati pengalaman kuliner terbaik dengan menu ayam yang diproses dengan bahan-bahan berkualitas tinggi. Setiap hidangan kami diracik dengan penuh perhatian untuk memuaskan setiap lidah. Bergabunglah dengan kami untuk menikmati makanan yang lezat, bergizi, dan tentu saja, penuh dengan rasa yang tak terlupakan.
            </p>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-container">
            <h2 class="text-center">Galeri</h2>
            <div class="row g-4">
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/1.jpeg" class="img-fluid" alt="Kuliner 1">
                    <div class="gallery-caption">Fried Chicken Pedas Manis</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/2.jpeg" class="img-fluid" alt="Kuliner 2">
                    <div class="gallery-caption">Fried Chicken BBQ</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/3.jpeg" class="img-fluid" alt="Kuliner 3">
                    <div class="gallery-caption">Fried Chicken Lemon Herb</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/4.jpeg" class="img-fluid" alt="Kuliner 4">
                    <div class="gallery-caption">Fried Chicken Teriyaki</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/5.jpeg" class="img-fluid" alt="Kuliner 5">
                    <div class="gallery-caption">Fried Chicken Garlic Butter</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/6.jpg" class="img-fluid" alt="Kuliner 6">
                    <div class="gallery-caption">Fried Chicken 1 Ekor</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>