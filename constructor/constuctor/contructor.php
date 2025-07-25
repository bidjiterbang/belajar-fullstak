<?php
class Mobil {
    private $warna;
    private $merk;
    private $tahun;
    private $banyakroda;

    public function __construct($warna,$merk,$tahun) {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tahun = $tahun;
        
    }

    public function getwarna() { 
        return $this->warna;
    }

    public function setwarna() {
        return $this->warna;
    }

    public function getmerk($warna) {
        $this->warna = $warna;
    }

     public function gettahun($tahun) {
        $this->warna = $tahun;
    }

}