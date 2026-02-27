<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closet - Fashion Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image" href="images/logo_bg.png">
</head>

<body>

    <!-- ==================== HEADER ==================== -->
    <header class="bg-white border-bottom sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-2">
            <div class="container">
                <!-- Logo -->
                <a href="index.php" class="navbar-brand">
                    <img src="images/logo.png" alt="Closet Logo" height="50">
                </a>

                <!-- Mobile toggle + icons -->
                <div class="d-flex align-items-center gap-3 d-lg-none">
                    <a href="#" class="text-dark"><i class="bi bi-person fs-5"></i></a>
                    <a href="#" class="text-dark position-relative">
                        <i class="bi bi-cart3 fs-5"></i>
                        <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" style="font-size: 0.6rem;">5</span>
                    </a>
                    <button class="navbar-toggler border-0 ps-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="mainNav">
                    <!-- Nav links -->
                    <ul class="navbar-nav me-auto gap-lg-3">
                        <li class="nav-item"><a class="nav-link active fw-semibold" href="#">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-semibold dropdown-toggle" href="#" data-bs-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">T-Shirts</a></li>
                                <li><a class="dropdown-item" href="#">Jeans</a></li>
                                <li><a class="dropdown-item" href="#">Jackets</a></li>
                                <li><a class="dropdown-item" href="#">Dresses</a></li>
                                <li><a class="dropdown-item" href="#">Accessories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#new-arrivals">New Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#contact">Contact</a></li>
                    </ul>

                    <!-- Search bar -->
                    <form class="d-flex mx-lg-3 my-2 my-lg-0" style="max-width: 350px; width: 100%;" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search products...">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>

                    <!-- Icons (desktop only) -->
                    <div class="d-none d-lg-flex align-items-center gap-3 ms-2">
                        <a href="#" class="text-dark"><i class="bi bi-person fs-5"></i></a>
                        <a href="#" class="text-dark position-relative">
                            <i class="bi bi-cart3 fs-5"></i>
                            <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" style="font-size: 0.6rem;">3</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- ==================== MAIN CONTENT ==================== -->
    <main>

        <!-- Hero Banner -->
        <section class="bg-dark text-white text-center py-5"
            style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                   url('https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=1400') center/cover no-repeat;">
            <div class="container py-5">
                <h1 class="display-4 fw-bold">New Season, New Style</h1>
                <p class="lead mb-4">Discover the latest trends in fashion at Closet.</p>
                <a href="#featured" class="btn btn-light btn-lg px-4">Shop Now</a>
            </div>
        </section>


        <!-- Featured Products -->
        <section id="featured" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Featured Products</h2>
                <div class="row g-4">
                    <?php
                    $products = [
                        ['name' => 'Classic White Tee',     'price' => 29.99,  'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400'],
                        ['name' => 'Slim Fit Jeans',        'price' => 59.99,  'img' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=400'],
                        ['name' => 'Leather Jacket',        'price' => 149.99, 'img' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400'],
                        ['name' => 'Summer Floral Dress',   'price' => 45.99,  'img' => 'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?w=400'],
                        ['name' => 'Casual Hoodie',         'price' => 39.99,  'img' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=400'],
                        ['name' => 'Denim Shorts',          'price' => 34.99,  'img' => 'https://images.unsplash.com/photo-1591195853828-11db59a44f6b?w=400'],
                        ['name' => 'Wool Overcoat',         'price' => 189.99, 'img' => 'https://images.unsplash.com/photo-1539533018447-63fcce2678e3?w=400'],
                    ];
                    foreach ($products as $p): ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card h-100 product-card border-0 shadow-sm">
                                <img src="<?= $p['img'] ?>" class="card-img-top" alt="<?= $p['name'] ?>"
                                    style="height: 260px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-1"><?= $p['name'] ?></h6>
                                    <p class="text-muted mb-2">$<?= number_format($p['price'], 2) ?></p>
                                    <a href="#" class="btn btn-outline-dark btn-sm">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- New Arrivals -->
        <section id="new-arrivals" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">New Arrivals</h2>
                <div class="row g-4">
                    <?php
                    $newArrivals = [
                        ['name' => 'Oversized Blazer',  'price' => 89.99,  'img' => 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=400'],
                        ['name' => 'Cargo Pants',       'price' => 54.99,  'img' => 'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=400'],
                        ['name' => 'Knit Sweater',      'price' => 49.99,  'img' => 'https://images.unsplash.com/photo-1576871337632-b9aef4c17ab9?w=400'],
                        ['name' => 'Linen Shirt',       'price' => 42.99,  'img' => 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=400'],
                    ];
                    foreach ($newArrivals as $p): ?>
                        <div class="col-6 col-md-3">
                            <div class="card h-100 product-card border-0 shadow-sm">
                                <div class="position-relative">
                                    <img src="<?= $p['img'] ?>" class="card-img-top" alt="<?= $p['name'] ?>"
                                        style="height: 280px; object-fit: cover;">
                                    <span class="badge bg-success position-absolute top-0 start-0 m-2">New</span>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-1"><?= $p['name'] ?></h6>
                                    <p class="text-muted mb-2">$<?= number_format($p['price'], 2) ?></p>
                                    <a href="#" class="btn btn-dark btn-sm">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer id="contact" class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <!-- About -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Closet</h5>
                    <p class="text-white-50">Your one-stop fashion destination. Quality clothing at affordable prices since 2024.</p>
                </div>
                <!-- Quick Links -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-1"><a href="#featured" class="text-white-50 text-decoration-none">Products</a></li>
                        <li class="mb-1"><a href="#new-arrivals" class="text-white-50 text-decoration-none">New Arrivals</a></li>
                        <li class="mb-1"><a href="#contact" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Contact Us</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-1"><i class="bi bi-geo-alt me-2"></i>123 Fashion Street, HCM City</li>
                        <li class="mb-1"><i class="bi bi-envelope me-2"></i>info@closet-store.com</li>
                        <li class="mb-1"><i class="bi bi-telephone me-2"></i>+84 123 456 789</li>
                    </ul>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white-50"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-white-50"><i class="bi bi-twitter-x fs-5"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary mt-4">
            <p class="text-center text-white-50 mb-0">&copy; 2026 Closet Fashion Store. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>