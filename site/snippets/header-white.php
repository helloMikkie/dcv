<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototyp</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">

    <?= css(['assets/css/main.css']) ?>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>

    <script src="assets/js/_vendorjs/isotope.pkgd.min.js"></script>
    <script src="assets/js/_vendorjs/packery-mode.pkgd.min.js"></script>

</head>

<body>
    
<!-- Submenu Books -->
<nav class="submenu-books">
    <ul class="submenu-book-list">
        <li><a href="<?= url('books') ?>">Alle</a></li>
        <li> <a href="<?= url('books') ?>">Neuheiten</a></li>
    </ul>
    <ul class="submenu-book-list">
        <li><a href="#">Malerei</a></li>
        <li><a href="#">Fotografie</a></li>
        <li><a href="#">Architektur</a></li>
    </ul>
    <ul class="submenu-book-list">
        <li><a href="#">Mode</a></li>
        <li><a href="#">Skulptur</a></li>
        <li><a href="#">Performance</a></li>
    </ul>
    
    <ul class="submenu-book-list">
        <li><a href="#">Film und Video</a></li>
        <li><a href="#">Installation</a></li>
        <li><a href="#">Über Kunst</a></li>
    </ul>
</nav>

<!-- Submenu Site -->

<nav class="submenu-site">
    <ul class="links-main-mobile" >
        <li><a href="<?= url('books') ?>">Bücher</a></li>
        <li><a href="<?= url('editionen') ?>">Editionen</a></li>
    </ul>

    <ul class="links-site">
        <li><a href="<?= url('verlag') ?>">Verlag</a></li>
        <li><a href="<?= url('News') ?>">News</a></li>
        <li><a href="<?= url('kontakt') ?>">Kontakt</a></li>
        <li><a href="#">EN</a></li>
    </ul>
</nav>

<!-- Submenu Search -->

<nav class="submenu-search">
    <label for="">Suche</label>
    <input type="text">
</nav>



<main>

    <header class="header-white">
        <nav class="header-content white">
            <ul class="links-main white">
                <li><a href="#" class="toggle-books">Bücher</a></li>
                <li><a href="<?= url('editionen') ?>">Editionen</a></li>
            </ul>  

            <a href="<?= url('/') ?>">
                <img src="assets/images/logo_dcv-white.svg" alt="logo" class="header-logo-white">
            </a>
            <ul class="toggle-links">
                <li class="toggle toggle-search-white"><a href="#"></a></li>
                <li class="toggle toggle-shop-white"><a href="#" ></a></li>
                <li class="toggle toggle-site-white"><a href="#"></a></li>
                
            </ul>
         
        </nav>
    </header>




