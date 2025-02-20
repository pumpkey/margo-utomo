<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margo Utomo Resorts</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/eco-resort.css">
    <link rel="stylesheet" href="assets/css/hillview-resort.css">
    <link rel="stylesheet" href="assets/css/tour.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="/margo-utomo/assets/images/logo.png" alt="Logo">
            </a>
        </div>
        <button class="menu-toggle" id="menuToggle">&#9776;</button>
        <nav id="navMenu">
            <ul>
                <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="eco-resort.php" class="<?= basename($_SERVER['PHP_SELF']) == 'eco-resort.php' ? 'active' : '' ?>">Eco Resort</a></li>
                <li><a href="hillview-resort.php" class="<?= basename($_SERVER['PHP_SELF']) == 'hillview-resort.php' ? 'active' : '' ?>">Hill View Resort</a></li>
                <li><a href="tour.php" class="<?= basename($_SERVER['PHP_SELF']) == 'tour.php' ? 'active' : '' ?>">Tour</a></li>
                <li><a href="gallery.php" class="<?= basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : '' ?>">Gallery</a></li>
                <li><button class="cta">Book Now</button></li>
            </ul>
        </nav>
    </div>
</header>
