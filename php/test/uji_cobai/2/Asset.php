<?php
class Asset{
//member1 variabel
private $no;
    private $nama;
    private $tahun;
    private $keterangan;
    private $nilai;

//member2 konstruktor
public function __construct($no, $nama, $tahun, $keterangan, $nilai)
{
    $this->no = $no;
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->keterangan = $keterangan;
        $this->nilai = $nilai;
}

private function sum ($no, $nama, $tahun, $keterangan, $nilai){
    $total = 0;
    if ($no >= 0 )
    $total += $nilai;
    else 
    $total = 0;
    return $total; 
}
//member3 method
public function cetak(){
    echo '<br/>7 :'.$this->sum($this->no,$this->nama,$this->tahun,$this->keterangan,$this->nilai);
}
}