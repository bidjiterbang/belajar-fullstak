<?php
class Kendaraan {
    public $jumlahRoda;
    public $merk;

    public function suarakendaraan(){
        echo"Brumm";
    }
}

class Mobil extends Kendaraan {
    public function bukaKap(){
        echo "Kap mesin dibuka";
    }
    public function suaraKendaraan(){
        echo "ngengg";
    }
}