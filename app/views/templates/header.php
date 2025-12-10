<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            
            <div class="navbar-left">
                <a href="<?= BASEURL; ?>" class="brand" id="brandLink">Genhowa</a>
            </div>

            <div class="navbar-center">
                <form action="<?= BASEURL; ?>/search" method="POST" class="search-box">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" id="searchInput" name="keyword" placeholder="Cari karakter, build, guide..." autocomplete="off">
                    <span class="search-shortcut">Ctrl K</span>
                </form>
            </div>

            <div class="navbar-right">
                <ul class="nav-links">
                    <li><a href="<?= BASEURL; ?>">Beranda</a></li>
                    <li><a href="<?= BASEURL; ?>/about">Tentang</a></li>
                    <li><a href="<?= BASEURL; ?>/login">Login</a></li>
                </ul>
            </div>

        </div>
    </nav>