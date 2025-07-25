<?php
// Trait untuk menghitung luas lingkaran
trait LuasLingkaran {
    public function luasLingkaran($jari2) {
        return $jari2 * $jari2 * 22 / 7;
    }
}

// Kelas Lingkaran menggunakan trait
class Lingkaran {
    use LuasLingkaran;
}

// Contoh penggunaan
$jari2 = 7;
$lingkaran = new Lingkaran();
echo "Luas Lingkaran: " . $lingkaran->luasLingkaran($jari2);
?>
