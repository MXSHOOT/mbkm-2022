<?php
require_once 'Asset.php';
class Data extends Asset{
    //member1 variabel
    private $no;
    private $nama;
    private $tahun;
    private $keterangan;
    private $nilai;
    //member2 konstruktor
    public function __construct($no, $nama, $tahun, $keterangan, $nilai)
    {
        parent::__construct($no, $nama, $tahun, $keterangan, $nilai);
        $this->no = $no;
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->keterangan = $keterangan;
        $this->nilai = $nilai;
    }
    //member3 method
    public function cetak(){
        parent::cetak();
        echo '<tr>';
        echo '<td>'.$this->no.'</td>';
        echo '<td>'.$this->nama.'</td>';
        echo '<td>'.$this->tahun.'</td>';
        echo '<td>'.$this->keterangan.'</td>';
        echo '<td>'.$this->nilai.'</td>';
        echo '</tr>';
    }
}