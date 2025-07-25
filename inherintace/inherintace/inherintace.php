<?php
class kendaraan {
    public $jumlahRoda;
    public $merk;
    
    public function bergerak() {
        echo "kendaraan mulai bergerak";
    }
}

class Mobil extends Kendaraan {
    public function bukaKap(){
        echo "kap mesin dibuka";
    }
}

class Motor extends Kendaraan {
    public function standar(){
        echo "standar motor di turunkan";
    }

    public function bukajok(){
        echo "jok motor dibuka";
    }
}

class TipeMotor extends motor{
    public function tipe(){
        echo "ini tipe motor saya";
    }
}