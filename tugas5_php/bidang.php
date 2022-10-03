<?php

abstract class Bentuk2D {
    abstract protected function luasBidang();
    abstract protected function kelilingBidang();
}

class circle extends Bentuk2D {
    public $jari2;
    public $phi;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function getPhi($phi)
    {
        return $this->phi = 3.14;
    }

    public function namaBidang()
    {
        echo "Lingkaran";
    }

    public function luasBidang()
    {
        return $this->getPhi($this->phi) * $this->jari2 * $this->jari2;
    }

    public function kelilingBidang()
    {
        return 2 * $this->getPhi($this->phi) * $this->jari2;
    }
}

class rectangle extends Bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        echo "Persegi Panjang";
    }

    public function luasBidang()
    {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

class triangle extends Bentuk2D{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        echo "Segitiga Siku-siku";
    }

    public function luasBidang()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang()
    {
        $sisi = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisi;
    }

}


?>