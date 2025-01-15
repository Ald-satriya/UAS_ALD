<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Food Delivery
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF8E1;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .container {
            background-color: #FFF8E1;
            border-radius: 20px;
            padding: 20px;
            margin: 20px auto;
            max-width: 1200px;
            position: relative;
            height: 780px;
            align-items: center;
        }

        .navbar {
            background-color: transparent;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #000;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #FF6F61;
        }

        .login-btn {
            background-color: #2ECC71;
            color: #fff;
            border-radius: 20px;
            padding: 5px 20px;
        }

        .main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 0;
        }

        .main-content h1 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .main-content p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .category-buttons .btn {
            border-radius: 50px;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .category-buttons .btn img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .zip-code-input {
            display: flex;
            align-items: center;
            margin-top: 20px;
            margin-left: 145px;
        }

        .zip-code-input input {
            border-radius: 20px 0 0 20px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
            margin: center;
        }

        .zip-code-input button {
            border-radius: 0 20px 20px 0;
            background-color: #2ECC71;
            color: #fff;
            border: none;
            padding: 10px 20px;

        }

        .food-image {
            position: relative;
        }

        .food-image img {
            border-radius: 50%;
            width: 600px;
            height: 600px;
        }

        .discount-badge {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: #2ECC71;
            color: #fff;
            border-radius: 50%;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .background-text {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 100px;
            color: rgba(0, 0, 0, 0.1);
            font-weight: bold;
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="main-content">
            <div>
                <h1>
                    Restoran Chicken: Sajian Ayam Lezat untuk Setiap Selera
                </h1>
                <p>
                    Nikmati pengalaman kuliner terbaik dengan menu ayam yang diproses dengan bahan-bahan berkualitas tinggi. Setiap hidangan kami diracik dengan penuh perhatian untuk memuaskan setiap lidah. Bergabunglah dengan kami untuk menikmati makanan yang lezat, bergizi, dan tentu saja, penuh dengan rasa yang tak terlupakan.
                </p>

                <div class="category-buttons">
                    <button class="btn btn-light">
                        <img alt="Salad icon" src="assets/img/Logo.jpeg" />
                        Chicken Pedas Manis
                    </button>
                    <button class="btn btn-light">
                        <img alt="Burger icon" src="assets/img/Logo.jpeg" />
                        Fried Chicken BBQ
                    </button>
                    <button class="btn btn-light">
                        <img alt="Pizza icon" src="assets/img/Logo.jpeg" />
                        Fried Chicken Lemon Herb
                    </button>
                    <button class="btn btn-light">
                        <img alt="Drink icon" src="assets/img/Logo.jpeg" />
                        Fried Chicken Teriyaki
                    </button>
                    <button class="btn btn-light">
                        <img alt="Dessert icon" src="assets/img/Logo.jpeg" />
                        Fried Chicken Garlic Butter
                    </button>
                </div>
                <div class="zip-code-input">
                    <input placeholder="Enter Zip Code" type="text" />
                    <button>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="food-image">
                <img alt="A bowl of fresh salad with various vegetables" src="assets/img/home.png" />
                <div class="discount-badge">
                    30% Off
                </div>
            </div>
        </div>
        <div class="background-text">
            Salad
        </div>
    </div>
</body>

</html>