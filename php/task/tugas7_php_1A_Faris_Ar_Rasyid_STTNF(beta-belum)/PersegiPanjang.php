<?php
require_once 'kelilingBidang.php';
require_once 'luasBidang.php';

class PersegiPanjang implements kelilingBidang, luasBidang{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return 'Persegi Panjang';
    }
    public function kelilingBidang()
    {
        $keliling = 2*($this->panjang+$this->lebar);
        return $keliling;
    }
    public function luasBidang()
    {
        $luas = $this->panjang*$this->lebar;
        return $luas;
    }
    public function cetak(){
        echo '<tr>';
        echo '<td>'.$this->namaBidang($this->panjang,$this->lebar).'</td>';
        echo '<td> Panjang : '.$this->panjang.' Lebar : '.$this->lebar.'</td>';
        echo '<td>'.$this->kelilingBidang($this->panjang,$this->lebar).'</td>';
        echo '<td>'.$this->luasBidang($this->panjang,$this->lebar).'</td>';
        echo '</tr>';
    }
}