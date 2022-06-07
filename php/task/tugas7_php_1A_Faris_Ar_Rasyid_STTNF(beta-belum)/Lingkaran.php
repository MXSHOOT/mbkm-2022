<?php
require_once 'kelilingBidang.php';
require_once 'luasBidang.php';

class Lingkaran implements kelilingBidang, luasBidang{
    private $jari;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function namaBidang()
    {
        return 'Segitiga';
    }
    public function kelilingBidang()
    {
        $keliling = 3.14*$this->jari;
        return $keliling;
    }
    public function luasBidang()
    {
        $luas = 2*3.14*$this->jari;
        return $luas;
    }
    public function cetak(){
        echo '<tr>';
        echo '<td>'.$this->namaBidang($this->jari).'</td>';
        echo '<td> Jari-Jari : '.$this->jari.'</td>';
        echo '<td>'.$this->kelilingBidang($this->jari).'</td>';
        echo '<td>'.$this->luasBidang($this->jari).'</td>';
        echo '</tr>';
    }
}