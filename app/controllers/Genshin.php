<?php

/**
 * Class Genshin
 * * Controller untuk mengelola fitur Genshin Impact.
 * * Menangani tampilan daftar karakter dan detail tracking.
 */
class Genshin extends Controller {
    
    /**
     * Halaman Utama Genshin (Daftar Karakter).
     */
    public function index() {
        $data['judul'] = 'Triverse - Genshin Impact';
        
        // Data Mockup Karakter (Nanti diganti database)
        $data['characters'] = [
            ['name' => 'Furina', 'element' => 'Hydro', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Furina.png'],
            ['name' => 'Neuvillette', 'element' => 'Hydro', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Neuvillette.png'],
            ['name' => 'Arlecchino', 'element' => 'Pyro', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Arlecchino.png'],
            ['name' => 'Nahida', 'element' => 'Dendro', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Nahida.png'],
            ['name' => 'Raiden Shogun', 'element' => 'Electro', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Raiden_Shogun.png'],
            ['name' => 'Zhongli', 'element' => 'Geo', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Zhongli.png'],
            ['name' => 'Navia', 'element' => 'Geo', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Navia.png'],
            ['name' => 'Xiao', 'element' => 'Anemo', 'img' => 'https://rerollcdn.com/GENSHIN/Characters/Xiao.png']
        ];

        $this->view('templates/header', $data);
        $this->view('genshin/index', $data);
        $this->view('templates/footer');
    }

    /**
     * Halaman Detail Tracking Karakter.
     * @param string $nama Nama karakter yang dipilih (dari URL).
     */
    public function detail($nama = '') {
        // Jika tidak ada nama, kembalikan ke index
        if (empty($nama)) {
            header('Location: ' . BASEURL . '/genshin');
            exit;
        }

        $data['judul'] = 'Tracking: ' . ucfirst($nama);
        $data['nama_karakter'] = ucfirst($nama);
        
        // Simulasi data tracking (Nanti dari Database)
        $data['stats'] = [
            'level' => 90,
            'weapon' => 'Splendor of Tranquil Waters',
            'weapon_level' => 90,
            'constellation' => 2,
            'talents' => [1, 10, 10]
        ];

        $this->view('templates/header', $data);
        $this->view('genshin/detail', $data);
        $this->view('templates/footer');
    }
}