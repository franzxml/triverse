<?php
/**
 * View: Genshin Character Detail
 * * Halaman dashboard untuk tracking statistik karakter spesifik.
 */
?>

<div class="detail-header">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASEURL; ?>/genshin">← Kembali ke Daftar Karakter</a>
        </div>
        <div class="detail-title">
            <h1>Tracking: <?= $data['nama_karakter']; ?></h1>
        </div>
    </div>
</div>

<div class="tracking-section">
    <div class="container">
        
        <form class="tracking-grid">
            
            <div class="track-card">
                <div class="track-header">
                    <h3>Status Dasar</h3>
                </div>
                <div class="track-body">
                    <div class="input-group">
                        <label>Level Karakter</label>
                        <input type="number" value="<?= $data['stats']['level']; ?>" min="1" max="90">
                    </div>
                    <div class="input-group">
                        <label>Konstelasi (C)</label>
                        <select>
                            <?php for($i=0; $i<=6; $i++): ?>
                                <option value="<?= $i; ?>" <?= $data['stats']['constellation'] == $i ? 'selected' : ''; ?>>C<?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="track-card">
                <div class="track-header">
                    <h3>Senjata / Weapon</h3>
                </div>
                <div class="track-body">
                    <div class="input-group">
                        <label>Nama Senjata</label>
                        <input type="text" value="<?= $data['stats']['weapon']; ?>">
                    </div>
                    <div class="input-group">
                        <label>Level Senjata</label>
                        <input type="number" value="<?= $data['stats']['weapon_level']; ?>" min="1" max="90">
                    </div>
                </div>
            </div>

            <div class="track-card">
                <div class="track-header">
                    <h3>Talenta</h3>
                </div>
                <div class="track-body talent-row">
                    <div class="input-mini">
                        <label>NA</label>
                        <input type="number" value="<?= $data['stats']['talents'][0]; ?>" max="10">
                    </div>
                    <div class="input-mini">
                        <label>Skill</label>
                        <input type="number" value="<?= $data['stats']['talents'][1]; ?>" max="10">
                    </div>
                    <div class="input-mini">
                        <label>Burst</label>
                        <input type="number" value="<?= $data['stats']['talents'][2]; ?>" max="10">
                    </div>
                </div>
            </div>

            <div class="track-card full-width">
                <div class="track-header">
                    <h3>Catatan Artefak & Tim</h3>
                </div>
                <div class="track-body">
                    <textarea placeholder="Tulis catatan set artefak atau komposisi tim di sini..."></textarea>
                </div>
            </div>

            <div class="action-area full-width">
                <button type="button" class="btn-save">Simpan Progress</button>
            </div>

        </form>

    </div>
</div>