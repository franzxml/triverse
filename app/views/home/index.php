<?php
/**
 * View: Home Index
 * * Update: Layout 2 Kolom dengan Ilustrasi Estetik
 */
?>

<div class="hero">
    <div class="container">
        <div class="hero-wrapper">
            
            <div class="hero-content">
                <h1 class="hero-title"><?= $data['judul']; ?></h1>
                <p class="hero-subtitle"><?= $data['deskripsi']; ?> Dibangun dengan kesederhanaan untuk performa maksimal dan kode yang bersih.</p>
                <button id="ctaButton" class="btn-primary">Mulai Sekarang</button>
            </div>

            <div class="hero-image">
                <img src="https://illustrations.popsy.co/amber/designer.svg" alt="Genhowa Design Illustration">
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="features">
        <div class="feature-card">
            <h3>⚡ Ringan & Cepat</h3>
            <p>Arsitektur MVC murni tanpa *bloatware*. Load time instan.</p>
        </div>
        
        <div class="feature-card">
            <h3>🎨 Terstruktur</h3>
            <p>Pemisahan logika yang rapi membuat coding terasa seperti seni.</p>
        </div>
        
        <div class="feature-card">
            <h3>🚀 Scalable</h3>
            <p>Siap tumbuh dari script sederhana menjadi aplikasi raksasa.</p>
        </div>
    </div>
</div>