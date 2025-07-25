<?php
interface Bentuk {
    public function Luas();
}

class Lingkaran implements Bentuk {
    private $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function Luas() {
        return $this->jari2 * $this->jari2 * 22 / 7;
    }
}

class Persegi implements Bentuk {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function Luas() {
        return $this->panjang * $this->lebar;
    }
}

// Contoh penggunaan:
$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran: " . $lingkaran->Luas() . "\n";

$persegi = new Persegi(5, 4);
echo "Luas Persegi: " . $persegi->Luas() . "\n";
?>
