<?php
require_once 'Person.php';
class Total extends Person{
    //member1 variabel
    private $total;
    //member2 konstruktor
    public function __construct($total)
    {
        parent::__construct($total);
        $this->total = $total;
    }
    //member3 method
    public function cetak(){
        parent::cetak();
        echo '<br/>NIDN :'.$this->nidn;
        echo '<br/>Gelar :'.$this->gelar;
        echo '<hr/>';
    }
}