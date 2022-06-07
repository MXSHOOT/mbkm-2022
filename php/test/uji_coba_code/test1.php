<?php
class dataKonversiSuhu{
    //member1 variabel
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    //member2 konstruktor
    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;

    }
    
    //member3 method
    private function konversi ($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        if($satuanSuhuAwal == 'Celcius' && $satuanSuhuTujuan == 'Fahrenheit')
            $hasil = (9/5)*$besaranSuhu+32;
        else if($satuanSuhuAwal == 'Fahrenheit' && $satuanSuhuTujuan == 'Celcius')
            $hasil = 5/9*($besaranSuhu-32);  
        else if($satuanSuhuAwal == 'Celcius' && $satuanSuhuTujuan == 'Reamur')
            $hasil = (4/5)*$besaranSuhu;
        else if ($satuanSuhuAwal == 'Reamur' && $satuanSuhuTujuan == 'Reamur')
            $hasil = (5/4)*$besaranSuhu;
        else $hasil = 0;
        return $hasil;  
    }

    public function cetak(){
        echo 'Satuan Suhu Awal : '.$this->satuanSuhuAwal;
        echo '<br/>Besaran Suhu : '.$this->besaranSuhu;
        echo '<br/>Satuan Suhu Tujuan : '.$this->satuanSuhuTujuan;
        echo '<br/>Hasil Konversi Suhu : '.$this->konversi($this->satuanSuhuAwal,$this->besaranSuhu,$this->satuanSuhuTujuan);
        echo '<hr/>';
    }
}