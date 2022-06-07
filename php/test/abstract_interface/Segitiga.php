<?php
require_once 'kelilingBidang.php';
require_once 'luasBidang.php';

class Segitiga implements kelilingBidang, luasBidang{
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        return 'Segitiga';
    }
    public function kelilingBidang()
    {
        $keliling = $this->alas+$this->alas+$this->alas;
        return $keliling;
    }
    public function luasBidang()
    {
        $luas = 0.5*$this->alas*$this->tinggi;
        return $luas;
    }
    public function cetak(){
        echo '<tr>';
        echo '<td>'.$this->namaBidang($this->alas,$this->tinggi).'</td>';
        echo '<td> Alas : '.$this->alas.' Tinggi : '.$this->tinggi.'</td>';
        echo '<td>'.$this->kelilingBidang($this->alas,$this->tinggi).'</td>';
        echo '<td>'.$this->luasBidang($this->alas,$this->tinggi).'</td>';
        echo '</tr>';
    }
}