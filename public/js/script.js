/**
 * Script Utama Genhowa
 * Menangani interaksi UI dan Smooth Scrolling
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('Genhowa App Ready!');

    // --- Logika Smooth Scroll untuk Brand Logo ---
    const brandLink = document.getElementById('brandLink');

    if (brandLink) {
        brandLink.addEventListener('click', (e) => {
            // Cek apakah URL saat ini adalah halaman utama (home)
            const currentPath = window.location.pathname;
            
            // Logika sederhana: jika di root atau index, lakukan scroll
            // Sesuaikan kondisi ini dengan struktur URL project (misal: /genhowa/public/)
            if (currentPath.endsWith('/public/') || currentPath.endsWith('index.php')) {
                e.preventDefault(); // Mencegah reload
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
    }

    // --- Interaksi Tombol CTA (Contoh) ---
    const ctaButton = document.getElementById('ctaButton');
    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            alert('Fitur ini akan segera tersedia!');
        });
    }
});