<?php
class suhu_ubah{
    //member1 variabel
    private $konvert;
    private $nomor;

    //member2 konstruktor
    public function __construct($konvert, $nomor)
    {
        $this->konvert = $konvert;
        $this->nomor = $nomor;
    }
    
    //member3 method
    private function CelciusToFahrenheit($nomor){
        $this->nomor = $nomor;
        if($nomor >= 0)
            $c_f = $nomor*9/5+32; 
        else $c_f = 'kosong';
        return $c_f;  
    }
    private function FahrenheitToCelcius($nomor){
        $this->nomor = $nomor;
        if($nomor >= 0)
            $f_c = ($nomor -32)*5/9; 
        else $f_c = 'kosong';
        return $f_c;  
    }
    private function CelciusToRheamur($nomor){
        $this->nomor = $nomor;
        if($nomor >= 0)
            $c_r = 4/5*$nomor; 
        else $c_r = 'kosong';
        return $c_r;  
    }
    private function RheamurToCelcius($nomor){
        $this->nomor = $nomor;
        if($nomor >= 0)
            $r_c = 5/4*$nomor; 
        else $r_c = 'kosong';
        return $r_c;  
    }


    public function cetak(){
        echo 'konvert :'.$this->konvert;
        echo '<br/>suhu awal :'.$this->nomor;
        echo '<br/>Celcius ke Fahrenheit :'.$this->CelciusToFahrenheit($this->nomor);
        echo '<br/>Fahrenheit ke Celcius :'.$this->FahrenheitToCelcius($this->nomor);
        echo '<br/>Celcius ke Reamur :'.$this->CelciusToRheamur($this->nomor);
        echo '<br/>Reamur ke Celcius :'.$this->RheamurToCelcius($this->nomor);
        echo '<hr/>';
    }
}