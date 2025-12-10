/**
 * Script Utama Genhowa
 * Fitur: Smooth Scroll & Shortcut Search
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('Genhowa App Ready! 🚀');

    // 1. Logic Shortcut Ctrl + K (atau Cmd + K di Mac)
    const searchInput = document.getElementById('searchInput');

    document.addEventListener('keydown', (e) => {
        // Cek jika tombol CTRL (atau Meta/Cmd) dan K ditekan bersamaan
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault(); // Mencegah aksi default browser (misal search bar browser)
            if (searchInput) {
                searchInput.focus(); // Fokuskan kursor ke input
            }
        }
    });

    // 2. Logic Smooth Scroll Logo
    const brandLink = document.getElementById('brandLink');
    if (brandLink) {
        brandLink.addEventListener('click', (e) => {
            const currentPath = window.location.pathname;
            
            // Logika: Jika di halaman home, scroll ke atas. Jika tidak, biarkan link bekerja.
            // Sesuaikan filter URL ini dengan environment lokal Anda
            if (currentPath === '/' || currentPath.includes('/public/') || currentPath.includes('index.php')) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            }
        });
    }

    // 3. CTA Button Interaction
    const ctaButton = document.getElementById('ctaButton');
    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            // Nanti bisa diarahkan ke halaman login atau dashboard
            alert('Silahkan Login untuk mulai tracking akun Genshin/HSR/WuWa Anda!');
        });
    }
});