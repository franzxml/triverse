<?php
/**
 * View: Genshin Impact Index
 * * Menampilkan daftar karakter dengan fitur pencarian real-time.
 */
?>

<div class="game-header-section">
    <div class="container">
        <div class="header-content-wrapper">
            <div class="header-text">
                <h1>Genshin Impact</h1>
                <p>Kelola progress karakter Teyvat-mu.</p>
            </div>
            
            <div class="search-container">
                <input type="text" id="charSearch" placeholder="Cari karakter... (Contoh: Furina)" autocomplete="off">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
        </div>
    </div>
</div>

<div class="character-section">
    <div class="container">
        <div class="character-grid" id="charGrid">
            
            <?php foreach ($data['characters'] as $char) : ?>
                <a href="<?= BASEURL; ?>/genshin/detail/<?= strtolower($char['name']); ?>" class="char-card" data-name="<?= strtolower($char['name']); ?>">
                    <div class="char-img-wrapper">
                        <img src="<?= $char['img']; ?>" alt="<?= $char['name']; ?>" loading="lazy">
                    </div>
                    <div class="char-info">
                        <h3><?= $char['name']; ?></h3>
                        <span class="element-badge <?= strtolower($char['element']); ?>"><?= $char['element']; ?></span>
                    </div>
                </a>
            <?php endforeach; ?>

            <div id="emptyState" class="empty-state" style="display: none;">
                <p>Karakter tidak ditemukan.</p>
            </div>

        </div>
    </div>
</div>

<script>
    // Simple Client-Side Search Logic
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('charSearch');
        const charCards = document.querySelectorAll('.char-card');
        const emptyState = document.getElementById('emptyState');

        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            let visibleCount = 0;

            charCards.forEach(card => {
                const name = card.getAttribute('data-name');
                if (name.includes(term)) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Toggle Empty State
            if (visibleCount === 0) {
                emptyState.style.display = 'block';
            } else {
                emptyState.style.display = 'none';
            }
        });
    });
</script>